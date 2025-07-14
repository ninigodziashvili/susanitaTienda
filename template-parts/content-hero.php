<?php
/**
 * Hero Section - Muestra la sección principal
 */

// ID de la imagen subida a la Biblioteca de Medios
$imagen_producto_id = 247; // ← Cambia este ID por el real de tu imagen

// Obtener URL de la imagen
$imagen_url = wp_get_attachment_image_url($imagen_producto_id, 'full');
?>
<section class="hero" role="banner">
    <div class="hero-content" role="heading" aria-level="1">
        <h1 class="padding"><?php esc_html_e('Complementos hechos a mano pensados para ti.', 'storefront-child'); ?></h1>
        
        <div class="producto-del-mes line-break">
            <h2><?php esc_html_e('✨ Producto del mes', 'storefront-child'); ?></h2>

            <?php if ($imagen_url) : ?>
                <img src="<?php echo esc_url($imagen_url); ?>"
                     alt="<?php esc_attr_e('Bolso artesanal de edición limitada con diseño canino - Producto destacado', 'storefront-child'); ?>" 
                     loading="lazy">
            <?php endif; ?>

            <p><?php esc_html_e('Portabolsas canino. ¡Edición limitada!', 'storefront-child'); ?></p>
        </div>
        
        <div class="padding">
            <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="btn-primary" aria-label="<?php esc_attr_e('Quiero el mío ya', 'storefront-child'); ?>">
                👉 <?php esc_html_e('Quiero el mío ya', 'storefront-child'); ?>
            </a>
        </div>
    </div>
</section>
