<?php
/**
 * The footer for our theme
 */
?>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Columna 1 · Marca -->
            <div class="footer-brand">
                <h3 class="logo">Susanita Urban</h3>
                <p>Complementos artesanales con alma</p>
                <ul>
                <li><a href="<?php echo get_permalink(177); ?>">Política de privacidad</a></li>
                <li><a href="<?php echo get_permalink(10); ?>">Política de devoluciones</a></li>
                </ul>
            </div>

            <!-- Columna 2 · Redes sociales -->
            <div class="footer-social">
                <h4>Síguenos</h4>
                <ul class="social-links">
                    <li><a href="https://www.instagram.com/susanitaurban/" aria-label="Instagram">Instagram</a></li>
                </ul>
            </div>

            <!-- Columna 3 · Información institucional -->
            <div class="project-info">
                <h4>💻 Proyecto Final de Desarrollo Web</h4>
                <p>Desarrollado por programadores recién graduados en colaboración con la 
                    <a href="https://ceaformacion.com/" target="_blank" rel="noopener noreferrer"><strong>Escuela CEA</strong></a>.
                </p>
                <p>Curso impartido y gestionado por <strong>LANBIDE – Servicio Vasco de Empleo</strong> y financiado por la <strong>Unión Europea</strong>.</p>
                <p><strong>Formador:</strong> 
                    <a href="https://www.linkedin.com/in/ikeralvarezformador/" target="_blank" rel="noopener noreferrer">Iker Álvarez</a>
                </p>
            </div>

            <!-- Columna 4 · Equipo -->
            <div class="team-info">
                <h4>👨‍💻 Equipo de desarrollo</h4>
                <ul class="team-list">
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Niño</a> – DevOps Engineer</li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Adrian</a> – eCommerce Content Manager</li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Axel A</a> – Front‑End Developer (JS)</li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Axel S</a> – UI/UX Designer &amp; Front‑End Dev</li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Carol</a> – Compliance &amp; Data Protection Specialist</li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Blanca</a> – QA Tester</li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Dominguito</a> – Project Manager &amp; Brand Designer</li>
                </ul>
            </div>
        </div>

        <!-- Línea legal -->
        <div class="footer-legal">
            <p>&copy; <span id="year"><?php echo date('Y'); ?></span> Susanita Urban. Todos los derechos reservados.</p>
        </div>
    </div>

    <!-- Botón WhatsApp flotante -->
    <a href="https://wa.me/34612345678?text=Hola,%20me%20interesa%20vuestro%20servicio" 
       class="whatsapp-btn" 
       target="_blank" 
       rel="noopener noreferrer" 
       aria-label="Contactar por WhatsApp">
        <img src="<?php echo esc_url(wp_get_attachment_url(250)); ?>" 
             alt="<?php esc_attr_e('Icono de WhatsApp - Contacta para personalizar tu pedido', 'storefront-child'); ?>" 
             loading="lazy">
    </a>
</footer>

<?php wp_footer(); ?>
</body>
</html>
