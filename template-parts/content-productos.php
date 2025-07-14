<?php
/**
 * Productos Section - Catálogo de productos destacados
 */
?>
<section id="productos" class="section" aria-labelledby="productos-title">
    <div class="container">
        <h2 id="productos-title" class="ganchillo resaltado"><?php esc_html_e('Productos destacados', 'storefront-child'); ?></h2>
        <div class="productos-grid">
            <!-- Producto 1 -->
            <article class="producto-card" tabindex="0">
                <img src="<?php echo esc_url(wp_get_attachment_image_url(202, 'large')); ?>" 
                     alt="<?php esc_attr_e('Bolso artesanal "Tornasol" - Hecho a mano', 'storefront-child'); ?>" 
                     class="producto-img" 
                     loading="lazy">
                <div class="producto-info">
                    <h3 class="producto-nombre"><?php esc_html_e('Bolso Tornasol', 'storefront-child'); ?></h3>
                    <p class="producto-descripcion"><?php esc_html_e('Un bolso único hecho a mano, perfecto para tu estilo bohemio.', 'storefront-child'); ?></p>
                    <div class="producto-precio">90 €</div>
                    <a href="https://wa.me/34612345678?text=<?php echo urlencode(esc_html__('Hola, me interesa el Bolso Tornasol', 'storefront-child')); ?>" 
                       class="btn-personaliza">
                       <?php esc_html_e('Quiero encargar el mío', 'storefront-child'); ?>
                    </a>
                </div>
            </article>

            <!-- Producto 2 -->
            <article class="producto-card" tabindex="0">
                <img src="<?php echo esc_url(wp_get_attachment_image_url(203, 'large')); ?>" 
                     alt="<?php esc_attr_e('Bolso beige clásico de ganchillo - Modelo artesanal', 'storefront-child'); ?>" 
                     class="producto-img" 
                     loading="lazy">
                <div class="producto-info">
                    <h3 class="producto-nombre"><?php esc_html_e('Bolso de grannys de mano', 'storefront-child'); ?></h3>
                    <p class="producto-descripcion"><?php esc_html_e('Elegancia y sencillez tejidas con amor.', 'storefront-child'); ?></p>
                    <div class="producto-precio">55 €</div>
                    <a href="https://wa.me/34612345678?text=<?php echo urlencode(esc_html__('Hola, me interesa el Bolso de grannys', 'storefront-child')); ?>" 
                       class="btn-personaliza">
                       <?php esc_html_e('Quiero encargar el mío', 'storefront-child'); ?>
                    </a>
                </div>
            </article>

            <!-- Producto 3 -->
            <article class="producto-card" tabindex="0">
                <img src="<?php echo esc_url(wp_get_attachment_image_url(204, 'large')); ?>" 
                     alt="<?php esc_attr_e('Bolso grannys con textura de ganchillo moderno - Diseño exclusivo', 'storefront-child'); ?>" 
                     class="producto-img" 
                     loading="lazy">
                <div class="producto-info">
                    <h3 class="producto-nombre"><?php esc_html_e('Bolso cuadrado granys', 'storefront-child'); ?></h3>
                    <p class="producto-descripcion"><?php esc_html_e('Texturas únicas para un look moderno y artesanal.', 'storefront-child'); ?></p>
                    <div class="producto-precio">95 €</div>
                    <a href="https://wa.me/34612345678?text=<?php echo urlencode(esc_html__('Hola, me interesa el Bolso cuadrado granys', 'storefront-child')); ?>" 
                       class="btn-personaliza">
                       <?php esc_html_e('Quiero encargar el mío', 'storefront-child'); ?>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>
