<?php
/*
Template Name: politica
*/
?>
<style>
    /*
Theme Name: Storefront child
Template: storefront
*/

/* ============================================= */
/*               DEFINICIONES DE FUENTES         */
/* ============================================= */
@font-face {
  font-family: 'Nanum Gothic';
  src: url('/assets/fonts/NanumGothic-Regular.ttf') format('truetype');
  font-weight: 400;
  font-style: normal;
  font-display: swap;
}

@font-face {
  font-family: 'Nanum Gothic';
  src: url('/assets/fonts/NanumGothic-Bold.ttf') format('truetype');
  font-weight: 700;
  font-style: normal;
  font-display: swap;
}

@font-face {
  font-family: 'Nanum Gothic';
  src: url('/assets/fonts/NanumGothic-ExtraBold.ttf') format('truetype');
  font-weight: 800;
  font-style: normal;
  font-display: swap;
}

/* ============================================= */
/*               VARIABLES CSS                   */
/* ============================================= */
:root {
  --primary-color: #2107b4;
  --primary-dark: #19077c;
  --text-dark: #3b2f24;
  --text-medium: #5c4b3a;
  --text-light: #666;
  --bg-light: #f9f8f6;
  --white: #fff;
  --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.1);
  --shadow-md: 0 8px 20px rgba(0, 0, 0, 0.15);
  --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.15);
  --radius-sm: 8px;
  --radius-md: 12px;
  --radius-lg: 14px;
  --radius-susana:50%;
  --transition: all 0.3s ease;
  --footer-bg: #082C38;
  --footer-link: #FCD8B4;
  --footer-link-hover: #C19976;
  --sobre-mi-opacity: 0.15;
}

/* ============================================= */
/*               RESET Y ESTILOS BASE            */
/* ============================================= */
*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Nanum Gothic', sans-serif;
  font-weight: 400;
  line-height: 1.6;
  color: var(--text-dark);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body::before {
  content: "";
  position: fixed;
  top: 8em;
  left: 0;
  width: 100%;
  height: 100vh;
  background: url('assets/img/fondo.png') center/cover no-repeat;
  z-index: -1;
}

h1, h2, h3, h4 {
  font-weight: 700;
  line-height: 1.2;
}

h1 {
  font-size: 2.8rem;
}

h2 {
  font-size: 2.4rem;
}

h3 {
  font-size: 1.8rem;
}

h4 {
  font-size: 1.4rem;
}

a {
  text-decoration: none;
  color: inherit;
  transition: var(--transition);
}

a:hover {
  color: var(--primary-color);
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}
.padding{
  padding: 0.5em;
}

/* ============================================= */
/*               LAYOUT GENERAL                  */
/* ============================================= */
.container {
  margin-top: 10em;
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem 0;
}

.section {
  padding: 5rem 0;
}

.bg-light {
  background-color: var(--bg-light);
}

/* ============================================= */
/*               HEADER                          */
/* ============================================= */
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background: rgba(255, 255, 255, 0.98);
  box-shadow: var(--shadow-sm);
  z-index: 1000;
  padding: 1rem 0;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--primary-color);
}

.nav-links {
  display: flex;
  gap: 2rem;
  list-style: none;
}

.nav-links a {
  font-weight: 600;
  position: relative;
  padding: 0.5rem 0;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--primary-color);
  transition: var(--transition);
}

.nav-links a:hover::after {
  width: 100%;
}

/* ============================================= */
/*               HERO SECTION                   */
/* ============================================= */
.hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 0 1rem;
  color: var(--white);
  margin-top: 68px;
}

.hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 0;
}

.hero-content {
  position: relative;
  z-index: 1;
  max-width: 700px;
  padding: 3rem;
  color: var(--white);
  box-shadow: var(--shadow-md);
  margin: 1rem;
}

.hero-content h1 {
  margin-bottom: 1.5rem;
  color: var(--white);
}

.hero-content p {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  color: var(--bg-light);
}

.producto-del-mes {
  background-color: var(--text-light);
  border: 4px solid var(--bg-light);
  padding: 10px;
  margin: 15px 0;
  border-radius: 8px;
  font-size: 0.9rem;
}

.producto-del-mes img {
  display: block;
  width: 100px;
  height: auto;
  margin: 10px auto 0 auto;
  border-radius: 6px;
}

/* ============================================= */
/*               SECCIÓN SOBRE MÍ               */
/* ============================================= */
.sobre-mi-glass {
  background: rgba(255, 255, 255, var(--sobre-mi-opacity));
  backdrop-filter: blur(4px) saturate(120%);
  -webkit-backdrop-filter: blur(4px) saturate(120%);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-md);
  margin: 0 auto;
  padding: 3rem 2rem;
  max-width: 1200px;
}
.sobre-mi-glass2 {
  background: rgba(230, 230, 230, 0.637); /* Gris claro con alta opacidad */
  backdrop-filter: blur(4px) saturate(120%);
  -webkit-backdrop-filter: blur(4px) saturate(120%);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-md);
  margin: 0 auto;
  padding: 3rem 2rem;
  max-width: 1200px;
}
.bio-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
  align-items: center;
}

.bio-text p {
  margin-bottom: 1.5rem;
  font-size: 1.1rem;
  line-height: 1.6;
}

.bio-image {
  border-radius: var(--radius-md);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}

.bio-img {
  width: 100%;
  height: auto;
  transition: transform 0.5s ease;
}

.bio-img:hover {
  transform: scale(1.03);
}

.ganchillo {
  color: var(--footer-bg);
  text-shadow: var(--bg-light);
}
.resaltado{
  color: #f9f8f6;
  text-shadow: var(--footer-bg);
}
/* ============================================= */
/*               SECCIÓN GANCHILLO              */
/* ============================================= */
.two-columns {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
  align-items: center;
}

.column-text p {
  margin-bottom: 1.5rem;
  font-size: 1.1rem;
}

.process-img {
  width: 100%;
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-md);
  transition: transform 0.5s ease;
}

.process-img:hover {
  transform: scale(1.03);
}

/* ============================================= */
/*               SECCIÓN DOG LOVER              */
/* ============================================= */
#dog-lover {
  padding: 5rem 0;
  background-color: #58c1d6c5;
  position: relative;
}

#dog-lover .section-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 3rem;
}

#dog-lover .section-title {
  font-weight: 800;
  font-size: 2.5rem;
  color: var(--primary-color);
  margin-bottom: 1.5rem;
  position: relative;
  display: inline-block;
}

#dog-lover .section-title:after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 3px;
  background: var(--primary-color);
  border-radius: 3px;
}

#dog-lover .section-divider {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 1.5rem 0;
}

#dog-lover .divider-line {
  width: 60px;
  height: 2px;
  background: var(--primary-color);
  opacity: 0.3;
}

#dog-lover .divider-icon {
  margin: 0 15px;
  font-size: 1.5rem;
  color: var(--primary-color);
}

#dog-lover .section-intro {
  font-size: 1.2rem;
  line-height: 1.7;
  color: var(--bg-light);
  margin-bottom: 0;
}

/* ============================================= */
/*               CARRUSELES                     */
/* ============================================= */
.carousel-section {
  margin-bottom: 4rem;
}

.carousel-section h3 {
  text-align: center;
  color: var(--primary-color);
  margin-bottom: 2rem;
  font-size: 1.8rem;
}

.carousel-container {
  display: flex;
  gap: 1.5rem;
  overflow-x: auto;
  flex-wrap: nowrap;
  padding: 1rem 0;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
}

.carousel-container::-webkit-scrollbar {
  display: none;
}

.carousel-slide {
  flex: 0 0 85%;
  scroll-snap-align: start;
  position: relative;
  border-radius: var(--radius-md);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}

.carousel-image {
  width: 100%;
  height: 350px;
  object-fit: cover;
  display: block;
}

.carousel-caption {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(59, 47, 36, 0.8);
  color: white;
  padding: 1rem;
  text-align: center;
  font-size: 0.95rem;
}

.carousel-controls {
  display: flex;
  justify-content: center;
  gap: 1rem;
  margin-top: 1.5rem;
}

.carousel-prev, 
.carousel-next {
  background: var(--primary-color);
  color: white;
  border: none;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  font-size: 1.2rem;
  cursor: pointer;
}

.carousel-prev:hover,
.carousel-next:hover {
  background: var(--primary-dark);
  transform: scale(1.1);
}

/* ============================================= */
/*               SECCIÓN PERSONALIZACIÓN        */
/* ============================================= */
/* Centrar solo el encabezado de personalización */
#personaliza .section-header {
  text-align: center;
  max-width: 800px; /* Opcional: para limitar el ancho y mejorar legibilidad */
  margin: 0 auto; /* Centra horizontalmente */
  padding: 0 1rem; /* Asegura espacio en móviles */
}

#personaliza .section-title {
  margin-bottom: 1rem;
}

#personaliza .section-divider {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 1.5rem auto;
}

#personaliza .divider-line {
  width: 60px; /* Ajusta según necesites */
  height: 2px;
  background: #082C38; /* Color que coincida con tu diseño */
  opacity: 0.3;
}

#personaliza .divider-icon {
  margin: 0 15px;
  font-size: 1.5rem;
}

#personaliza .section-header p {
  margin-top: 1.5rem;
  font-size: 1.1rem;
  line-height: 1.6;
}
.bg-blush {
  background-color: #fcd8b4;
}

.section-intro {
  color: var(--primary-color);
  font-size: 1.2rem;
  margin-top: 0.5em;
  font-weight: 400;
}

.personaliza-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; /* Centra las columnas */
  gap: 2rem;
  align-items: center;
  margin-top: 2rem;
}

.personaliza-text {
  flex: 1 1 300px;
  text-align: center; /* Centrado interno */
}

.personaliza-text h3 {
  font-family: 'Nunito', sans-serif;
  font-size: 1.5rem;
  color: #082C38;
}

.personaliza-text p {
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 1em;
}

.btn-personaliza {
  background-color: #C19976;
  color: var(--primary-color);
  padding: 0.8em 1.4em;
  border: none;
  border-radius: 8px;
  font-weight: bold;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.btn-personaliza:hover {
  background-color: #a47c5d;
}

.personaliza-img {
  flex: 1 1 300px;
   text-align: center; /* Centra la imagen */
}

.personaliza-img img {
  width: 100%;
  border-radius: 1rem;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Centrado y espaciado del texto */
.personaliza-text {
  text-align: center; /* Centra todo el contenido */
}

/* Espaciado para el título */
.personaliza-text h3 {
  margin-bottom: 1em; /* Reemplaza el primer <br> */
  font-family: 'Nunito', sans-serif;
  font-size: 1.5rem;
  color: #082C38;
}

/* Estilo mejorado para line-break */
.line-break {
  display: block;
  margin: 1em 0; /* 1em arriba y abajo (reemplaza <br>) */
}

/* Espacio adicional antes del botón */
.personaliza-text p:last-of-type {
  margin-bottom: 1.5em; /* Reemplaza el segundo <br> */
}

/* Ajuste para el botón */
.btn-personaliza {
  margin-top: 0; /* Elimina espacio extra */
  /* Mantén tus otros estilos de botón... */
  background-color: #C19976;
  color: var(--primary-color);
  padding: 0.8em 1.4em;
  border: none;
  border-radius: 8px;
  font-weight: bold;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

/* ============================================= */
/*               SECCIÓN PRODUCTOS              */
/* ============================================= */
.productos-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
  margin-top: 3rem;
}

.producto-card {
  background: var(--white);
  border-radius: var(--radius-md);
  overflow: hidden;
  box-shadow: var(--shadow-sm);
}

.producto-img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  transition: var(--transition);
}

.producto-card:hover .producto-img {
  transform: scale(1.05);
}

.producto-info {
  padding: 1.5rem;
}

.producto-nombre {
  margin-bottom: 0.5rem;
  color: var(--text-dark);
}

.producto-descripcion {
  color: var(--text-light);
  margin-bottom: 1rem;
  font-size: 0.95rem;
}

.producto-precio {
  font-weight: 800;
  color: var(--primary-color);
  margin-bottom: 1.5rem;
  font-size: 1.2rem;
}

.btn-comprar {
  background-color: var(--primary-color);
  color: var(--white);
  border: none;
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  cursor: pointer;
  font-weight: 600;
  width: 100%;
  transition: var(--transition);
}

.btn-comprar:hover {
  background-color: var(--primary-dark);
}

/* ============================================= */
/*               SECCIÓN HECHO A MANO           */
/* ============================================= */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin: 3rem 0;
}

.feature-card {
  background: var(--white);
  padding: 2rem;
  border-radius: var(--radius-susana);
  text-align: center;
  box-shadow: var(--shadow-sm);
}

.feature-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.feature-card h3 {
  margin-bottom: 1rem;
  color: var(--text-dark);
}

.handmade-quote {
  max-width: 800px;
  margin: 4rem auto 0;
  padding: 2rem;
  text-align: center;
  font-style: italic;
  font-size: 1.2rem;
  color: var(--text-medium);
  border-left: 4px solid var(--primary-color);
  background: rgba(185, 136, 95, 0.05);
}

/* ============================================= */
/*               SECCIÓN FILOSOFÍA              */
/* ============================================= */
.philosophy-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2.5rem;
  margin-top: 3rem;
}

.philosophy-card {
  background: var(--white);
  border-radius: var(--radius-md);
  padding: 2rem 1.5rem;
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
  text-align: center;
}

.philosophy-emoji {
  font-size: 3rem;
  margin-bottom: 1.5rem;
}

.philosophy-card h3 {
  margin-bottom: 1rem;
  color: var(--text-dark);
}

.philosophy-card p {
  color: var(--text-light);
  font-size: 1rem;
}
/* ============================================= */
/*               SECCIÓN Tienda-Online       */
/* ============================================= */

#main{
  background-color: whitesmoke;
  padding: 10px;
  margin: 10px;
  gap: 10px;
}
#main h1{
  text-align: center;
}
/* ============================================= */
/*               FOOTER                         */
/* ============================================= */
.footer {
  background: var(--text-dark);
  color: var(--white);
  padding: 3rem 0 1.5rem;
}

.footer-content {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-bottom: 2rem;
}

.footer h3, .footer h4 {
  color: var(--white);
  margin-bottom: 1.5rem;
}

.footer p {
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 1rem;
}

.social-links {
  list-style: none;
}

.social-links li {
  margin-bottom: 0.5rem;
}

.social-links a {
  color: rgba(255, 255, 255, 0.8);
  transition: var(--transition);
}

.social-links a:hover {
  color: var(--primary-color);
}

.footer-legal {
  text-align: center;
  padding-top: 2rem;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.6);
  font-size: 0.9rem;
}

/* Agradecimientos específicos */
.footer {
  background: var(--footer-bg);
  color: var(--white);
}

.footer a {
  color: var(--footer-link);
  transition: var(--transition);
}

.footer a:hover {
  color: var(--footer-link-hover);
}

.team-list {
  list-style: none;
  padding-left: 0;
  line-height: 1.8;
  font-size: 0.95rem;
}

/* ============================================= */
/*               COMPONENTES REUTILIZABLES       */
/* ============================================= */
.btn-primary {
  display: inline-block;
  background-color: var(--primary-color);
  color: var(--white);
  font-weight: 600;
  padding: 0.9rem 2.4rem;
  border-radius: 50px;
  border: none;
  cursor: pointer;
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
  font-size: 1rem;
}

.btn-primary:hover {
  background-color: var(--primary-dark);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

.card {
  background: var(--white);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-md);
}

/* ============================================= */
/*               BOTÓN WHATSAPP                 */
/* ============================================= */
.whatsapp-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: #25D366;
  width: 5em;
  height: 5em;
  border-radius: 70%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
  z-index: 1000;
  transition: transform 0.3s ease;
  animation: pulse 3s infinite;
}

.whatsapp-btn:hover {
  transform: scale(1.1) translateY(-5px);
}

.whatsapp-btn img {
  width: 6em;
  height: 6em;
}

@keyframes pulse {  
  0% { transform: scale(1); }
  50% { transform: scale(1.1); }
  100% { transform: scale(1); }
}


/* ============================================= */
/*               MEDIA QUERIES                   */
/* ============================================= */
@media (max-width: 768px) {
  /* Estilos generales */
  .section {
    padding: 3rem 0;
  }
  
  h1 {
    font-size: 2.2rem;
  }
  
  h2 {
    font-size: 1.8rem;
  }
  
  /* Navegación */
  .navbar {
    flex-direction: column;
    gap: 1rem;
  }
  
  .nav-links {
    gap: 1.5rem;
  }
  
  /* Hero */
  .hero-content {
    padding: 2rem 1.5rem;
  }
  
  /* Grids */
  .philosophy-grid,
  .productos-grid {
    grid-template-columns: 1fr;
  }
  
  /* Secciones con dos columnas */
  .bio-content,
  .two-columns {
    grid-template-columns: 1fr;
  }
  
  .bio-image,
  .column-image {
    order: -1;
    margin-bottom: 2rem;
  }
  
  /* Citas */
  .handmade-quote {
    padding: 1.5rem;
    font-size: 1.1rem;
  }
  
  /* Dog Lover */
  #dog-lover {
    padding: 3rem 0;
  }
  
  #dog-lover .section-title {
    font-size: 2rem;
  }
  
  #dog-lover .section-intro {
    font-size: 1.1rem;
    padding: 0 1rem;
  }

  /* Footer */
  .footer-content {
    grid-template-columns: 1fr;
  }

  /* Sobre mí */
  .sobre-mi-glass {
    padding: 2rem 1.5rem;
  }
}

@media (min-width: 768px) {
  /* Carrusel */
  .carousel-slide {
    flex: 0 0 45%;
  }
  
  .carousel-image {
    height: 400px;
  }
  .personaliza-text, 
  .personaliza-img {
    flex: 1 1 100%; /* Apila en móviles */
  }
  
  .personaliza-text {
    order: -1; /* Texto arriba en móviles */
    margin-bottom: 2rem;
  }
}

@media (min-width: 1024px) {
  /* Carrusel */
  .carousel-slide {
    flex: 0 0 30%;
  }
}
.cookie-banner {
  position: fixed;
  bottom: 0;
  width: 100%;
  background: #fff;
  color: #333;
  padding: 15px;
  box-shadow: 0 -2px 5px rgba(0,0,0,0.2);
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 9999;
}

.cookie-banner p {
  margin: 0;
  flex: 1;
}

.cookie-banner button {
  margin-left: 10px;
  padding: 8px 12px;
  cursor: pointer;
  border: none;
  background-color: #007BFF;
  color: white;
  border-radius: 4px;
}

.cookie-banner button:hover {
  background-color: #0056b3;
}


/* Ajustes para el contenido principal */
.Politica {
  margin: 2em;
  padding: 1em;
  
}
.politica_privacidad{
    text-decoration: underline;
}

/* Estilo para encabezados */
h1, h2, h3, h4 {
  color: #333;
  text-align: center;
  margin-top: 1.2em;
  margin-bottom: 0.5em;
}

/* Párrafos generales */
.parrafo-privacidad {
  font-size: 1rem;
  
}

/* Listas */
ul {
  padding-left: 1.5em;
}


/* Estilo responsive */
@media (max-width: 768px) {
  .politica {
    margin: 0.5em;
    padding: 0.5em;
  }

  h1 {
    font-size: 1.5rem;
  }

  h2, h3 {
    font-size: 1.2rem;
  }

  h4 {
    font-size: 1rem;
  }

  .parrafo-privacidad {
    font-size: 0.95rem;
  }
}

@media (max-width: 480px) {
  .politica {
    margin: 0.8em;
    padding: 0.5em;
  }

  h1 {
    font-size: 1.5rem;
  }

  h2, h3 {
    font-size: 1.2rem;
  }

  h4 {
    font-size: 1rem;
  }

  .parrafo-privacidad {
    font-size: 0.9rem;
  }
}

    </style>
    <main class="Politica">
        <h1 class="politica_privacidad">Política de Privacidad</h1>
    <h3 class="Actualizacion">Última actualización: [08/07/2025]</h3>
        <p class="parrafo-privacidad">En <strong>Susanita Urban</strong>, nos comprometemos a proteger tu privacidad y garantizar la seguridad de tus datos personales. Esta Política de Privacidad explica cómo recopilamos, utilizamos y protegemos tu información cuando visitas nuestro sitio web o realizas una compra.</p>

        <i><p>Condiciones de venta</p></i>
        <i><p>Aviso legal y política datos</p></i>
        <i><p>Política de Cookies</p></i>

    <h3 class="titulos"> 1.Responsable del tratamiento</h3>
    <h3 class="titulos">Susanita Urban</h3>

        <p class="parrafo-privacidad">Correo electrónico: <i><a href="">susanitaurban@gmail.com</a></i></p>
        <p class="parrafo-privacidad">Dirección: <i>Juan II Kalea,5, 01003 /Vitoria-Gasteiz, Araba</i></p>

    <h3 class="Actualizacion">2. Datos personales que recopilamos</h3>
        <p class="parrafo-privacidad">Podemos recopilar y tratar los siguientes datos personales:</p>
        <ul>
            <li>Nombre y apellidos</li>
            <li>Dirección de correo electrónico</li>
            <li>Dirección postal y datos de envío</li>
            <li>Número de teléfono</li>
            <li>Información de pago (a través de plataformas seguras de terceros)</li>
            <li>Historial de compras</li>
            <li>Datos de navegación (cookies, IP, tipo de navegador, etc.)</li>
        </ul>
    <div class="table-tratamiento">
    <h3 class="Actualizacion">3. Finalidades del tratamiento y base legal</h3>
    <h3 class="Actualizacion">Finalidad</h3>
            <p class="parrafo-privacidad">Procesar tus pedidos y pagos</p>
            <p class="parrafo-privacidad">Envío de actualizaciones sobre tu pedido</p>
            <p class="parrafo-privacidad">Atención al cliente y resolución de incidencias</p>
            <p class="parrafo-privacidad">Envío de promociones y boletines (si te suscribes)</p>
            <p class="parrafo-privacidad">Mejorar la experiencia del usuario y analizar el tráfico</p>
            <p class="parrafo-privacidad">Cumplimiento de obligaciones legales (fiscales, contables, etc.)</p>
    </div> 
    <div class="table-tratamiento">  
    <h3 class="Actualizacion">Base legal (art. 6 RGPD)</h3>
        <p class="parrafo-privacidad">Cumplimiento de un contrato (Art. 6(1)(b))</p>
        <p class="parrafo-privacidad">Interés legítimo (Art. 6(1)(f))</p>
        <p class="parrafo-privacidad">Interés legítimo (Art. 6(1)(f))</p>
        <p class="parrafo-privacidad">Consentimiento (Art. 6(1)(a))</p>
        <p class="parrafo-privacidad">Interés legítimo / Consentimiento (según el tipo de cookies)</p>
        <p class="parrafo-privacidad">Obligación legal (Art. 6(1)(c))</p>
    </div>

    <h3 class="Actualizacion">4. Conservación de los datos</h3>
        <p class="parrafo-privacidad">Conservaremos tus datos personales durante el tiempo necesario para cumplir con las finalidades indicadas, y conforme a las obligaciones legales aplicables. Por ejemplo:</p>
        <ul>
            <li>Datos de pedidos: hasta 6 años (por obligaciones fiscales y contables)</li>
            <li>Datos de marketing: hasta que retires tu consentimiento</li>
        </ul>
    
    <h3 class="Actualizacion">5. Compartición de datos</h3>
        <p class="parrafo-privacidad">Podemos compartir tus datos con:</p>
        <ul>
            <li>Proveedores de servicios de pago (como Stripe o PayPal)</li>
            <li>Servicios de mensajería y transporte</li>
            <li>Plataformas de email marketing (si te has suscrito al boletín)</li>
            <li>Proveedores tecnológicos y de alojamiento web</li>
            <li>Asesores fiscales y contables (cuando sea necesario legalmente)</li>
        </ul>
            <p class="parrafo-privacidad">Nunca venderemos tus datos personales a terceros.</p>

    <h3 class="Actualizacion">6. Tus derechos como usuario</h3>
            <p class="parrafo-privacidad">Procesa tus pedidos y pagos de una manera fácil</p>
            <ul>
                <li>Acceder a tus datos personales</li>
                <li>Rectificar los datos inexactos</li>
                <li>Solicitar la supresión de tus datos</li>
                <li>Oponerte al tratamiento en base al interés legítimo</li>
                <li>Solicitar la limitación del tratamiento</li>
                <li>Retirar tu consentimiento en cualquier momento</li>
                <li>Presentar una reclamación ante una autoridad de control (como la AEPD)</li>
            </ul>
            <p class="parrafo-privacidad">Para ejercer tus derechos, contáctanos en: <a href=""><i>susanitaurban2025@gmail.com</i></a></p>
    
    <h3 class="Actualizacion">7. Seguridad de tus datos</h3>
            <p class="parrafo-privacidad">Implementamos medidas técnicas y organizativas adecuadas para proteger tus datos frente a pérdida, acceso no autorizado, uso indebido o divulgación.</p>

    <h3 class="Actualizacion">8. Cookies</h3>
           <p class="parrafo-privacidad">Utilizamos cookies para mejorar tu experiencia, analizar el tráfico y personalizar contenido. Puedes gestionar tus preferencias a través de nuestra [Política de Cookies].</p> 

    <h3 class="Actualizacion">9. Modificaciones de esta política</h3>
            <p class="parrafo-privacidad">Podemos actualizar esta política ocasionalmente. Te recomendamos revisarla periódicamente. Te notificaremos cambios significativos a través del sitio web o por correo electrónico.</p>

    <h3 class="Actualizacion">10. Condiciones de venta</h3>
    <h4 class="Actualizacion">Como comprar:</h4>
            <p class="parrafo-privacidad">Comprar en Susanita Urban es muy sencillo e intuitivo. Si es la primera vez que entras en Susanita Urban y quieres realizar una compra te detallo los pasos, aunque si conoces otros comercios on-line, te parecerá bastante fácil.</p>
            <p class="parrafo-privacidad">Navega por la tienda echando un vistazo a los productos por las diferentes categorías: pulsa sobre las imágenes y los títulos para ver en detalle las características de cada uno.</p>

            <p class="parrafo-privacidad">A medida que encuentres artículos que te interesen puedes ir añadiendo a la cesta de la compra que aparece a la derecha de la pantalla. Es muy parecido a un supermercado en el que se llena el carrito de la compra con las cosas que queremos adquirir. Para añadir un producto al carrito basta con pinchar en <strong>«Encargar«</strong> y automáticamente se añade. Del mismo modo, puedes eliminar el producto añadido previamente en cualquier momento, ya que la inclusión en la cesta en este paso no presupone su consentimiento a la adquisición del producto. </p>

            <p class="parrafo-privacidad">Una vez que hayas terminado tu elección, sólo tendrás que pinchar en el icono <strong>«Finalizar compra«</strong> y seguir los pasos.</p>
            <p class="parrafo-privacidad">Si no estás registrado como cliente, en el proceso de compra lo podrás  hacer. Te pediré tus datos para el envío y de contacto, respetando en todo momento nuestra <strong>política de datos.</strong></p>

            <p class="parrafo-privacidad">Una vez finalizada la compra, recibirás en la dirección de correo electrónico que hayas facilitado, la <strong>confirmación</strong> de que el pedido se ha realizado, momento a partir del cuál trabajaré para que tu pedido te llegue a la dirección postal que has puesto.</p>

            <p class="parrafo-privacidad">Todas las compras que se realizan en mi tienda online <strong>Susanita Urban</strong> están sujetas a las condiciones generales de contratación expuestas en el presente documento. Las ventas celebradas son ventas a distancia reguladas por la legislación española vigente en la materia.</p>

    <h4 class="Actualizacion">Métodos de pago</h4>
            <ul>
                <li><h4 class="Actualizacion">Tarjeta de débito o crédito:</h4>El pago se realiza de forma rápida, cómoda y segura a través del Sistema correspondiente, quien procesa el pago y me notifica la realización de la operación. Yo nunca recibo los datos de la tarjeta.</li>

                <li><h4 class="Actualizacion">PayPal: </h4> El pago lo realizas a través de la plataforma de pago seguro por internet. Puedes pagar con tu tarjeta de crédito aunque no tengas una cuenta de PayPal creada.</li>

                <li><h4 class="Actualizacion">Bizum:</h4> Al número de teléfono: <i>+34 646752850 (Susana Pérez Gómez).</i> </li> 
            </ul>

    <h4 class="Actualizacion">Política de envíos</h4>
    <h4 class="Actualizacion">Formas y costes de envío:</h4>

                <p class="parrafo-privacidad">El envío se realiza cuando se ha efectuado y comprobado el pago, y su tiempo de entrega dependiendo de el tipo de producto y material seleccionado.</p>
                <p class="parrafo-privacidad"> El tiempo aproximado para la entrega de cada producto según el tamaño y las medidas solicitadas por el cliente, con un plazo aproximado <strong>3 semanas.</strong></p>

    <h4 class="Actualizacion">Plazos de entrega</h4>
                <ul>
                    <li>Artículos <strong>«en stock»:</strong> significa que están disponibles y se enviarán una vez recibido el pedido y comprobado el pago.</li>

                    <li>Artículos <strong>«disponibles para reserva»:</strong>  Significa que están casi terminados o te lo podemos fabricar, por eso te permitimos realizar la compra.</li>
                </ul>
                <p> class="parrafo-privacidad"> <strong> IMPORTANTE: </strong> Debes tener en cuenta el <strong>TIEMPO APROXIMADO DE FABRICACIÓN</strong> . Normalmente tardamos poco. Ya que dependerá del número de encargos en cada momento.  Aún así, se concretará con el cliente en cada caso.</p>

                <p class="parrafo-privacidad">Y ante cualquier duda, puedes consultarme directamente en el Whatsapp  de la web, teléfono en el <strong>646752850</strong> o por correo electrónico en <strong>susanitaurban@gmail.com </strong></p>

        <h4 class="Actualizacion">Cómo realizar devoluciones:</h4>
        <p class="parrafo-privacidad">En caso de que no estés satisfecho/a con el producto  recibido, puedes proceder a su devolución en un plazo máximo de 7 días, siempre que el artículo esté en perfecto estado y <strong> siendo los gastos de envío correspondientes por tu cuenta.</strong></p>

        <p class="parrafo-privacidad">Si adviertes pequeñas imperfecciones o variaciones de color en algunos artículos, es debido al uso de materiales naturales y al trabajo artesanal de cada artículo. No deben considerarse tara ni defectos.</p>

        <p class="parrafo-privacidad">Nunca olvides que nuestros productos son hechos a mano uno a uno, y aunque usemos los mismos patrones y los mismos hilos, todos son creaciones nuevas, con sus diferencias y peculiaridades. Y eso es lo que lo hace <strong>único.</strong></p>

         <h2 class="Actualizacion">Política de cookies</h2>

         <h3 class="Actualizacion">¿Qué son las cookies?</h3>
         <p class="parrafo-privacidad">Las cookies son pequeños archivos que se almacenan en el disco duro de su ordenador cuando visita un sitio web.</p>

         <h3 class="Actualizacion">¿Son las cookies seguras?</h3>
         <p class="parrafo-privacidad">Si. Las cookies son pequeños archivos de texto. No pueden ver en su ordenador ni tampoco leer ninguna información personal. Las cookies no pueden vehicular virus ni instalar nada dañino en su ordenador.</p>

         <h3 class="Actualizacion">¿Son usadas las cookies para rastrear información?</h3>
         <p class="parrafo-privacidad">Si. También las cookies se usan para rastrear cuanta gente está visitando una página web y qué áreas del sitio web están viendo. Esto nos permite tener una idea de cómo nuestros clientes están usando nuestro sitio web y nos ayuda a mejorar su uso.</p>

        <h3 class="Actualizacion">¿Qué tipo de cookies se usan?</h3>
        <p class="parrafo-privacidad">Usamos diferentes cookies; algunas son temporales y otras permanentes. Ninguna recoge información personal.</p>

        <h4 class="Actualizacion">Cookies temporales</h4>
             <p class="parrafo-privacidad">Estas cookies identifican que el usuario se está moviendo de página a página y termina cuando el usuario para de visitar estas varias páginas web. Se borra cuando el navegador se cierra.</p>

        <h4 class="Actualizacion">Cookies permanentes</h4>
             <p class="parrafo-privacidad"> Estas cookies nos ayudan a recordar tus preferencias/configuraciones cuando vuelves a visitar nuestro sitio web. Por eso, estas cookies siguen en tu ordenador aún después de que hayas terminado de visitar nuestro sitio web.</p>

        <h4 class="Actualizacion">Cookies de terceros: </h4>
             <p class="parrafo-privacidad">: Todas las cookies pertenecen a un propietario como a colaboradores publicitarios y pueden ser incluso establecidas por consentimiento externo de terceros respecto de nuestro sitio web, dentro de nuestro sitio web.</p>

    </main>
    <script>
        
  window.addEventListener('load', () => {
    const banner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('accept-cookies');
    const rejectBtn = document.getElementById('reject-cookies');

    if (!localStorage.getItem('cookieConsent')) {
      banner.style.display = 'flex';
    }

    acceptBtn.addEventListener('click', () => {
      localStorage.setItem('cookieConsent', 'accepted');
      banner.style.display = 'none';
      // Aquí puedes activar scripts que dependen del consentimiento
    });

    rejectBtn.addEventListener('click', () => {
      localStorage.setItem('cookieConsent', 'rejected');
      banner.style.display = 'none';
      // Aquí puedes bloquear scripts que instalan cookies no esenciales
    });
  });
</script>

    
</body>

<?php
get_footer();
?>
</html>