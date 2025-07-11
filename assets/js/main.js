document.addEventListener('DOMContentLoaded', function () {
  // Actualizar año en el footer
  document.getElementById('year').textContent = new Date().getFullYear();

  // Smooth scrolling para enlaces internos
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        const headerHeight = document.querySelector('.header').offsetHeight;
        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      }
    });
  });

  // Efecto scroll para header
  window.addEventListener('scroll', function () {
    const header = document.querySelector('.header');
    header.style.boxShadow = window.scrollY > 100 ? '0 4px 12px rgba(0, 0, 0, 0.1)' : 'none';
  });

  // Inicializar carruseles
  initCarousels();
});

function initCarousels() {
  document.querySelectorAll('.carousel-container').forEach(carousel => {
    const slides = carousel.querySelectorAll('.carousel-slide');
    if (!slides.length) return; // Sin slides → salimos

    /* ======================  BOTONES  ====================== */
    const controls = carousel.parentElement.querySelector('.carousel-controls');
    const prevBtn  = controls?.querySelector('.carousel-prev');
    const nextBtn  = controls?.querySelector('.carousel-next');

    const step = () => {
      const slideW = slides[0].getBoundingClientRect().width;
      const gap    = parseFloat(getComputedStyle(carousel).columnGap || getComputedStyle(carousel).gap || 0);
      return slideW + gap;
    };

    prevBtn?.addEventListener('click', () => {
      carousel.scrollBy({ left: -step(), behavior: 'smooth' });
    });

    nextBtn?.addEventListener('click', () => {
      carousel.scrollBy({ left:  step(), behavior: 'smooth' });
    });

    /* ======================  ARRASTRE  ====================== */
    let active = false, startX = 0, scrollStart = 0;

    const dragStart = e => {
      active      = true;
      startX      = (e.pageX ?? e.touches[0].pageX);
      scrollStart = carousel.scrollLeft;
      carousel.classList.add('dragging');
      carousel.style.scrollBehavior = 'auto';
      pauseAutoScroll();            // ⏸️  Pausamos mientras se arrastra
    };

    const dragMove = e => {
      if (!active) return;
      const x   = (e.pageX ?? e.touches[0].pageX);
      const walk = (x - startX) * 1.5;
      carousel.scrollLeft = scrollStart - walk;
    };

    const dragEnd = () => {
      active = false;
      carousel.classList.remove('dragging');
      carousel.style.scrollBehavior = 'smooth';
      resumeAutoScroll();           // ▶️  Reanudamos al soltar
    };

    carousel.addEventListener('pointerdown', dragStart,  { passive: true });
    window.addEventListener  ('pointermove', dragMove,  { passive: true });
    window.addEventListener  ('pointerup',   dragEnd,   { passive: true });

    /* ======================  AUTOSCROLL  ====================== */
    let autoId;

    const setupAutoScroll = (delay = 3500) => {
      autoId = setInterval(() => {
        const max = carousel.scrollWidth - carousel.clientWidth;
        const atEnd = carousel.scrollLeft >= max - 2;     // márgen de seguridad
        carousel.scrollBy({
          left: atEnd ? -max : step(),                    // si llegó al final → vuelve al inicio
          behavior: 'smooth'
        });
      }, delay);
    };

    const pauseAutoScroll  = () => clearInterval(autoId);
    const resumeAutoScroll = () => {
      clearInterval(autoId);
      setupAutoScroll();
    };

    // Opcional: pausa cuando el ratón entra y reanuda al salir (evita marear al usuario)
    carousel.addEventListener('mouseenter', pauseAutoScroll);
    carousel.addEventListener('mouseleave', resumeAutoScroll);

    setupAutoScroll();  // ▶️ ¡Listo!  Arranca el auto‑scroll
  });
}
// ====================== LIGHTBOX ======================
document.addEventListener('DOMContentLoaded', function() {
  // Crear elementos del lightbox
  const lightbox = document.createElement('div');
  lightbox.id = 'lightbox';
  lightbox.innerHTML = `
    <div class="lightbox-content">
      <img src="" alt="">
      <div class="lightbox-nav">
        <button class="lightbox-close">&times;</button>
        <button class="lightbox-prev">&lt;</button>
        <button class="lightbox-next">&gt;</button>
      </div>
      <div class="lightbox-caption"></div>
    </div>
  `;
  document.body.appendChild(lightbox);

  // Añadir estilos dinámicamente
  const style = document.createElement('style');
  style.textContent = `
    #lightbox {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.9);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2000;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s;
    }
    
    #lightbox.active {
      opacity: 1;
      pointer-events: all;
    }
    
    .lightbox-content {
      position: relative;
      max-width: 90%;
      max-height: 90%;
    }
    
    .lightbox-content img {
      max-height: 80vh;
      max-width: 90vw;
      display: block;
      border-radius: 8px;
    }
    
    .lightbox-nav {
      position: absolute;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      padding: 10px;
    }
    
    .lightbox-close, .lightbox-prev, .lightbox-next {
      background: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      font-size: 2rem;
      cursor: pointer;
      padding: 0.5rem 1rem;
      border-radius: 50%;
      transition: all 0.3s ease;
    }
    
    .lightbox-close {
      right: 10px;
    }
    
    .lightbox-prev {
      left: 10px;
    }
    
    .lightbox-next {
      right: 10px;
    }
    
    .lightbox-close:hover, .lightbox-prev:hover, .lightbox-next:hover {
      background: rgba(0, 0, 0, 0.8);
      transform: scale(1.1);
    }
    
    .lightbox-caption {
      text-align: center;
      color: white;
      padding: 1rem;
      font-size: 1.1rem;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 0 0 8px 8px;
    }
  `;
  document.head.appendChild(style);

  // Variables para navegación
  let currentImageIndex = 0;
  let images = [];
  let captions = [];

  // Función para abrir el lightbox
  function openLightbox(imageSrc, altText, clickedImage) {
    const img = lightbox.querySelector('img');
    const caption = lightbox.querySelector('.lightbox-caption');
    
    img.src = imageSrc;
    img.alt = altText;
    
    // Buscar el caption correspondiente
    const parentSlide = clickedImage.closest('.carousel-slide');
    if (parentSlide) {
      const slideCaption = parentSlide.querySelector('.carousel-caption');
      if (slideCaption) {
        caption.textContent = slideCaption.textContent;
      } else {
        caption.textContent = altText;
      }
    } else {
      caption.textContent = altText;
    }
    
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden'; // Evitar scroll del body
    
    // Configurar navegación
    images = Array.from(document.querySelectorAll('.carousel-slide img, .producto-img'));
    captions = images.map(img => {
      const parent = img.closest('.carousel-slide');
      return parent ? (parent.querySelector('.carousel-caption')?.textContent || img.alt) : img.alt;
    });
    currentImageIndex = images.indexOf(clickedImage);
  }

  // Función para cerrar el lightbox
  function closeLightbox() {
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Función para navegar entre imágenes
  function navigate(direction) {
    currentImageIndex += direction;
    
    if (currentImageIndex >= images.length) {
      currentImageIndex = 0;
    } else if (currentImageIndex < 0) {
      currentImageIndex = images.length - 1;
    }
    
    const img = lightbox.querySelector('img');
    const caption = lightbox.querySelector('.lightbox-caption');
    
    img.src = images[currentImageIndex].src;
    img.alt = images[currentImageIndex].alt;
    caption.textContent = captions[currentImageIndex];
  }

  // Event listeners
  document.addEventListener('click', function(e) {
    // Detectar clic en imágenes de carrusel o productos
    if (e.target.matches('.carousel-image, .producto-img, .producto-del-mes img, .bio-img, .process-img, .personaliza-img img')) {
      e.preventDefault();
      openLightbox(e.target.src, e.target.alt, e.target);
    }
    
    // Cerrar lightbox
    if (e.target.matches('.lightbox-close, #lightbox:not(.lightbox-content):not(.lightbox-nav):not(.lightbox-caption)')) {
      closeLightbox();
    }
    
    // Navegación
    if (e.target.matches('.lightbox-prev')) {
      navigate(-1);
    }
    
    if (e.target.matches('.lightbox-next')) {
      navigate(1);
    }
  });

  // Navegación con teclado
  document.addEventListener('keydown', function(e) {
    if (!lightbox.classList.contains('active')) return;
    
    if (e.key === 'Escape') {
      closeLightbox();
    } else if (e.key === 'ArrowLeft') {
      navigate(-1);
    } else if (e.key === 'ArrowRight') {
      navigate(1);
    }
  });

  // Navegación por gestos táctiles
  let touchStartX = 0;
  let touchEndX = 0;

  lightbox.addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
  }, {passive: true});

  lightbox.addEventListener('touchend', function(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, {passive: true});

  function handleSwipe() {
    if (touchEndX < touchStartX - 50) {
      navigate(1); // Swipe izquierda
    } else if (touchEndX > touchStartX + 50) {
      navigate(-1); // Swipe derecha
    }
  }
});

// ====================== CARRUSEL DE 20 IMÁGENES ======================
document.addEventListener('DOMContentLoaded', function() {
  const personalizaImgContainer = document.querySelector('.personaliza-img');
  
  // Verificar si existe el contenedor
  if (!personalizaImgContainer) return;

  // Crear estructura del carrusel
  personalizaImgContainer.innerHTML = `
    <div class="carousel-container personaliza-carousel">
      ${Array.from({length: 20}, (_, i) => `
        <div class="carousel-slide">
          <img src="assets/img/personalizacion-${i+1}.jpg" 
               alt="Proceso de personalización ${i+1}" 
               loading="lazy" 
               class="carousel-image">
        </div>
      `).join('')}
    </div>
    <div class="carousel-controls">
      <button class="carousel-prev" aria-label="Anterior">❮</button>
      <button class="carousel-next" aria-label="Siguiente">❯</button>
    </div>
  `;

  // Inicializar el carrusel (usa tu función existente)
  initCarousels();
});