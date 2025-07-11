<?php

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar" aria-label="Navegación principal">
                <a href="#" class="logo">Susanita Urban</a>
                <ul class="nav-links">
                    <li><a href="#sobre-mi">Sobre mí</a></li>
                    <li><a href="#dog-lover">Complementos personalizados</a></li>
                    <li><a href="#personaliza">Contacta conmigo</a></li>
                    <li><a href="#ganchillo">Ganchillo</a></li>
                    <li><a href="#hecho-mano">Hecho a mano</a></li>
                    <li><a href="#filosofia">Filosofía</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- /* ============================================= */
     /*               SECCIÓN HERO                   */
     /* ============================================= */ -->
<section class="hero" role="banner">
    <div class="hero-content" role="heading" aria-level="1">
        <h1 class="padding">Complementos hechos a mano pensados para ti.</h1>
        
        <!-- Producto del mes -->
        <div class="producto-del-mes line-break">
            <h2>✨ Producto del mes</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/productodelmes.jpg"
                 alt="Bolso artesanal de edición limitada con diseño canino - Producto destacado" loading="lazy">
            <p>Portabolsas canino. ¡Edición limitada!</p>
        </div>
        
        <div class="padding">
            <a href="#productos" class="btn-primary" aria-label="Quiero el mío ya">👉 Quiero el mío ya</a>
        </div>
    </div>
</section>

<!-- /* ============================================= */
     /*               SECCIÓN SOBRE MI               */
     /* ============================================= */ -->
<section id="sobre-mi" class="section">
    <div class="sobre-mi-glass">
        <div class="container">
            <h2 class="ganchillo line-break">Sobre mí</h2>
            <div class="bio-content">
                <div class="bio-text sobre-mi-glass2">
                    <p class="ganchillo line-break">El ganchillo ocupa un lugar muy especial en mi historia. Fue
                        mi tía
                        quien, con infinita paciencia, enseñó a manejar los hilos a esta chica zurda que
                        parecía que no aprendería: al principio torpe, pero siempre llena de ganas y risas.</p>
                    <p class="ganchillo">Poco a
                        poco descubrí la calma, el cariño y la alegría de transformar un simple ovillo en algo
                        único. Ese camino me llevó a obtener diferentes reconocimientos y premios, y, sobre
                        todo, me enseñó que lo más valioso no es solo lo que se crea, sino todo lo que se teje
                        alrededor.</p>
                    <p class="ganchillo">Apasionada de las cosas únicas y especiales, decidí fundar Susanita
                        Urban, un espacio donde cada pieza nace sin guion, surgiendo directamente de mi
                        imaginación y de mis manos.</p>
                </div>
                <div class="bio-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tia-susanita.jpg"
                         alt="Artista tejiendo con ganchillo en su taller creativo" class="bio-img" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /* ============================================= */
     /*               SECCIÓN GANCHILLO                */
     /* ============================================= */ -->
<section id="ganchillo" class="section bg-light">
    <div class="container">
        <h2 class="line-break">El arte del ganchillo</h2>
        <div class="two-columns">
            <div class="column-text">
                <p class="line-break">Algunas colecciones aparecen como un suspiro, otras vuelven... o no, quién
                    sabe. Muchas están disponibles para personalizarse, mientras que otras llegan con toda su
                    esencia, tal como fueron concebidas.</p>
                <p>No sigo calendarios. Creo, diseño y comparto pensando en quienes valoran lo hecho con
                    dedicación, un toque de sorpresa y, por encima de todo, mucho corazón.</p>
                <p>Como amante de los animales y orgullosa dog lover, muchas de mis creaciones nacen de esa
                    ternura juguetona que ellos saben inspirar. Cada pieza es un tributo a esas pequeñas musas
                    de cuatro patas que forman parte de mi día a día.</p>
            </div>
            <div class="column-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ganchillo-proceso.png"
                    alt="Proceso artesanal de creación con hilos y ganchillo" class="process-img"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- /* ============================================= */
     /*               SECCIÓN DOG LOVER                */
     /* ============================================= */ -->
<section id="dog-lover" class="section bg-light">
    <div class="container">
        <div class="section-header">
            <h3>Mis creaciones</h3>
            <div class="section-divider">
                <span class="divider-line"></span>
                <span class="divider-icon">🐾</span>
                <span class="divider-line"></span>
            </div>
        </div>

        <!-- /* ============================================= */
             /*               CARRUSEL 1 PRODUCTOS            */
             /* ============================================= */ -->
        <div class="carousel-section">
            <div class="carousel-container product-carousel">
                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolso-perro-1.png"
                        alt="Bolso tote bag con estampado de Golden Retriever - Colección dog lover"
                        class="carousel-image" loading="lazy">
                    <div class="carousel-caption">Tote bag dog-lover - Algodón orgánico</div>
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolso-perro-2.png"
                        alt="Bolso tote bag con estampado de Dachshund - Colección dog lover"
                        class="carousel-image" loading="lazy">
                    <div class="carousel-caption">Tote bag dog-lover - Algodón orgánico</div>
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolso-perro-3.png"
                        alt="Bolso tote bag con estampado de Labrador - Colección dog lover"
                        class="carousel-image" loading="lazy">
                    <div class="carousel-caption">Tote bag dog-lover - Algodón orgánico</div>
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolso-perro-4.png"
                        alt="Bolso tote bag con estampado de Bulldog - Colección dog lover"
                        class="carousel-image" loading="lazy">
                    <div class="carousel-caption">Tote bag dog-lover - Algodón orgánico</div>
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolso-perro-5.png"
                        alt="Bolso tote bag con estampado de pack canino - Colección dog lover"
                        class="carousel-image" loading="lazy">
                    <div class="carousel-caption">Tote bag dog-lover - Algodón orgánico</div>
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolso-perro-6.png"
                        alt="Bolso tote bag con estampado de Bulldog francés - Colección dog lover"
                        class="carousel-image" loading="lazy">
                    <div class="carousel-caption">Tote bag dog-lover - Algodón orgánico</div>
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolso-perro-7.jpeg"
                        alt="Bolso tote bag con estampado canino en técnica DTF - Colección exclusiva"
                        class="carousel-image" loading="lazy">
                    <div class="carousel-caption">Tote bag dog-lover - DTF</div>
                </div>
            </div>
            <div class="carousel-controls">
                <button class="carousel-prev" aria-label="Anterior">❮</button>
                <button class="carousel-next" aria-label="Siguiente">❯</button>
            </div>
            <a href="#productos" class="btn-primary line-break" aria-label="Quiero el mío ya">👉 Quiero el mío ya</a>
        </div>

        <!-- =============================================
             CARRUSEL 2 PERSONAS
             ============================================= -->
        <div class="carousel-section">
            <h3>En su vida cotidiana</h3>
            <div class="carousel-container lifestyle-carousel">

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-1.jpg" alt="Cliente satisfecho 1" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-2.jpg" alt="Cliente satisfecho 2" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-3.jpg" alt="Cliente satisfecho 3" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-4.jpg" alt="Cliente satisfecho 4" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-5.jpg" alt="Cliente satisfecho 5" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-6.jpg" alt="Cliente satisfecho 6" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-7.jpg" alt="Cliente satisfecho 7" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-8.jpg" alt="Cliente satisfecho 8" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-9.jpg" alt="Cliente satisfecho 9" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-10.jpg" alt="Cliente satisfecho 10" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-11.jpg" alt="Cliente satisfecho 11" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-12.jpg" alt="Cliente satisfecho 12" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-13.jpg" alt="Cliente satisfecho 13" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-14.jpg" alt="Cliente satisfecho 14" class="carousel-image"
                        loading="lazy">
                </div>

                <div class="carousel-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifestyle-15.jpg" alt="Cliente satisfecho 15" class="carousel-image"
                        loading="lazy">
                </div>
                
            </div>
            <div class="carousel-controls">
                <button class="carousel-prev" aria-label="Anterior">❮</button>
                <button class="carousel-next" aria-label="Siguiente">❯</button>
            </div>
        </div>
    </div>
</section>


       <!-- /* ============================================= */
     /*               SECCIÓN PRODUCTOS                */
     /* ============================================= */ -->
<section id="productos" class="section" aria-labelledby="productos-title">
    <div class="container">
        <h2 id="productos-title" class="ganchillo resaltado">Productos destacados</h2>
        <div class="productos-grid">
            <article class="producto-card" tabindex="0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolsito1.png" alt="Bolso artesanal 'Tornasol' - Hecho a mano"
                    class="producto-img" loading="lazy">
                <div class="producto-info">
                    <h3 class="producto-nombre">Bolso Tornasol</h3>
                    <p class="producto-descripcion">Un bolso único hecho a mano, perfecto para tu estilo bohemio.</p>
                    <div class="producto-precio">90 €</div>
                    <a href="https://wa.me/34612345678?text=Hola,%20me%20interesa%20vuestro%20servicio"
                        class="btn-personaliza">Quiero encargar el mío</a>
                </div>
            </article>
            <article class="producto-card" tabindex="0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolsito2.png" alt="Bolso beige clásico de ganchillo - Modelo artesanal"
                    class="producto-img" loading="lazy">
                <div class="producto-info">
                    <h3 class="producto-nombre">Bolso de grannys de mano</h3>
                    <p class="producto-descripcion">Elegancia y sencillez tejidas con amor.</p>
                    <div class="producto-precio">55 €</div>
                    <a href="https://wa.me/34612345678?text=Hola,%20me%20interesa%20vuestro%20servicio"
                        class="btn-personaliza">Quiero encargar el mío</a>
                </div>
            </article>
            <article class="producto-card" tabindex="0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolsito3.png"
                    alt="Bolso grannys con textura de ganchillo moderno - Diseño exclusivo" class="producto-img"
                    loading="lazy">
                <div class="producto-info">
                    <h3 class="producto-nombre">Bolso cuadrado granys</h3>
                    <p class="producto-descripcion">Texturas únicas para un look moderno y artesanal.</p>
                    <div class="producto-precio">95 €</div>
                    <a href="https://wa.me/34612345678?text=Hola,%20me%20interesa%20vuestro%20servicio"
                        class="btn-personaliza">Quiero encargar el mío</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- /* ============================================= */
     /*               SECCIÓN HECHO A MANO             */
     /* ============================================= */ -->
<section id="hecho-mano" class="section">
    <div class="container">
        <h2 class="ganchillo resaltado">Hecho a mano</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🧶</div>
                <h3>Originalidad absoluta</h3>
                <p>Cada creación es una pieza irrepetible o no...</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">✂️</div>
                <h3>Personalización</h3>
                <p>Muchas piezas pueden adaptarse a tu estilo, medida o gusto.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌱</div>
                <h3>Crecimiento natural</h3>
                <p>Algunas colecciones son efímeras, otras regresan cuando lo siento.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🧵</div>
                <h3>Materiales seleccionados</h3>
                <p>Siempre pensando en originalidad, comodidad y durabilidad.</p>
            </div>
        </div>
        <div class="sobre-mi-glass2">
            <div class="handmade-quote">
                <p class="ganchillo">"Lo artesanal no es solo un método, es un estilo de vida. Me ayuda a
                    reconectar con la creatividad, experimentar, explorar nuevas técnicas... y, al final, lo
                    mejor es compartirlo. Tejo para ti, para esos momentos pequeños y especiales que hacen
                    grandes recuerdos."</p>
            </div>
        </div>
    </div>
</section>

<!-- /* ============================================= */
     /*               SECCIÓN FILOSOFIA               */
     /* ============================================= */ -->
<section id="filosofia" class="section" aria-labelledby="filosofia-title">
    <div class="container">
        <h2 id="filosofia-title" class="ganchillo resaltado">Filosofía</h2>
        <div class="philosophy-grid">
            <article class="philosophy-card" tabindex="0">
                <div class="philosophy-emoji" aria-label="Autenticidad">✂</div>
                <h3>Autenticidad en cada punto</h3>
                <p>No sigo modas ni manuales estrictos: mis creaciones brotan desde la inspiración del momento,
                    sin guion, con libertad.</p>
            </article>
            <article class="philosophy-card" tabindex="0">
                <div class="philosophy-emoji" aria-label="Valor emocional">💖</div>
                <h3>Valor emocional</h3>
                <p>Crear algo con las manos es también un acto de conexión. Cada punto lleva una historia, una
                    emoción y un pedazo de alma.</p>
            </article>
            <article class="philosophy-card" tabindex="0">
                <div class="philosophy-emoji" aria-label="Sostenibilidad consciente">♻️</div>
                <h3>Sostenibilidad consciente</h3>
                <p>Uso materiales duraderos, y la práctica del ganchillo me permite reconectar con lo sencillo y
                    lo auténtico, en contraposición a lo desechable.</p>
            </article>
            <article class="philosophy-card" tabindex="0">
                <div class="philosophy-emoji" aria-label="Bienestar y creatividad">🎁</div>
                <h3>Identidad y creatividad</h3>
                <p>Cada pieza nace en mi taller, punto a punto, con técnicas tradicionales como el ganchillo y
                    otras totalmente nuevas como la impresión dtf</p>
            </article>
            <article class="philosophy-card" tabindex="0">
                <div class="philosophy-emoji" aria-label="Empatía y comunidad">🧶</div>
                <h3>Empatía y comunidad</h3>
                <p>Crear comunidad de amantes del crochet, de mujeres creativas que tejen juntas, se apoyan y
                    comparten.</p>
            </article>
            <article class="philosophy-card" tabindex="0">
                <div class="philosophy-emoji" aria-label="Inspiración animal">🐶</div>
                <h3>Inspiración animal</h3>
                <p>Como amante de los animales, muchas de mis colecciones se inspiran en su ternura, en su forma
                    de ser espontánea y cercana. Mis perros son cómplices de este proceso creativo.</p>
            </article>
        </div>
    </div>
</section>
</main>


    <!-- /* ============================================= */
        /*               FOOTER                           */
        /* ============================================= */ -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>Susanita Urban</h3>
                    <p>Complementos artesanales con alma</p>
                </div>
                <div class="footer-social">
                    <h4>Síguenos</h4>
                    <ul class="social-links">
                        <li><a href="#" aria-label="Instagram">Instagram</a></li>
                        <li><a href="#" aria-label="Facebook">Facebook</a></li>
                        <li><a href="#" aria-label="Pinterest">Pinterest</a></li>
                    </ul>
                </div>
                <div class="footer-legal">
                    <p>&copy; <span id="year"></span> Susanita Urban. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Columna 1 · Información institucional -->
                <div class="project-info">
                    <h3>💻 Proyecto Final de Desarrollo Web</h3>
                    <p>Desarrollado por programadores recién graduados en colaboración con la <a
                            href="https://ceaformacion.com/" target="_blank" rel="noopener noreferrer"><strong>Escuela
                                CEA</strong></a>.</p>
                    <p>Curso impartido y gestionado por <strong>LANBIDE – Servicio Vasco de Empleo</strong> y financiado
                        por la <strong>Unión Europea</strong>.</p>
                    <p><strong>Formador:</strong> <a href="https://www.linkedin.com/in/ikeralvarezformador/"
                            target="_blank" rel="noopener noreferrer">Iker Álvarez</a></p>
                </div>

                <!-- Columna 2 · Equipo -->
                <div class="team-info">
                    <h4>👨‍💻 Equipo de desarrollo</h4>
                    <ul class="team-list">
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Niño</a> – DevOps Engineer</li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Adrian</a> – eCommerce Content Manager
                        </li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Axel A</a> – Front‑End Developer (JS)
                        </li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Axel S</a> – UI/UX Designer &amp;
                            Front‑End Dev</li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Carol</a> – Compliance &amp; Data
                            Protection Specialist</li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Blanca</a> – QA Tester</li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Dominguito</a> – Project Manager &amp;
                            Brand Designer</li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="https://wa.me/34612345678?text=Hola,%20me%20interesa%20vuestro%20servicio" class="whatsapp-btn"
            target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                alt="Icono de WhatsApp - Contacta para personalizar tu pedido" loading="lazy">
        </a>
    </footer>

    <script src="main.js"></script>
</body>

</html>

