<?php
/**
 * Carruseles - Componente reutilizable para todos los carruseles
 */

// IDs de imágenes para el carrusel de productos (subidas a Medios)
$productos_ids = [205, 206, 207, 208, 209, 210, 211]; // Sustituye con los IDs reales

// IDs de imágenes para el carrusel lifestyle
$lifestyle_ids = [213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 214, 225, 226, 227]; // Sustituye con los reales
?>

<!-- Carrusel 1 Productos -->
<div class="carousel-section">
    <div class="carousel-container product-carousel">
        <?php foreach ($productos_ids as $index => $img_id): ?>
            <?php $img_url = wp_get_attachment_image_url($img_id, 'full'); ?>
            <?php if ($img_url): ?>
                <div class="carousel-slide">
                    <img src="<?php echo esc_url($img_url); ?>" 
                         alt="<?php echo esc_attr(sprintf(__('Bolso tote bag con estampado canino - Colección dog lover %d', 'storefront-child'), $index + 1)); ?>" 
                         class="carousel-image" 
                         loading="lazy">
                    <div class="carousel-caption">
                        <?php esc_html_e('Tote bag dog-lover - ', 'storefront-child'); ?>
                        <?php echo ($index + 1 === 7) ? esc_html__('DTF', 'storefront-child') : esc_html__('Algodón orgánico', 'storefront-child'); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="carousel-controls">
        <button class="carousel-prev" aria-label="<?php esc_attr_e('Anterior', 'storefront-child'); ?>">❮</button>
        <button class="carousel-next" aria-label="<?php esc_attr_e('Siguiente', 'storefront-child'); ?>">❯</button>
    </div>
</div>

<!-- Carrusel 2 Lifestyle -->
<div class="carousel-section">
    <h3><?php esc_html_e('En su vida cotidiana', 'storefront-child'); ?></h3>
    <div class="carousel-container lifestyle-carousel">
        <?php foreach ($lifestyle_ids as $index => $img_id): ?>
            <?php $img_url = wp_get_attachment_image_url($img_id, 'full'); ?>
            <?php if ($img_url): ?>
                <div class="carousel-slide">
                    <img src="<?php echo esc_url($img_url); ?>" 
                         alt="<?php echo esc_attr(sprintf(__('Cliente satisfecho %d', 'storefront-child'), $index + 1)); ?>" 
                         class="carousel-image" 
                         loading="lazy">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="carousel-controls">
        <button class="carousel-prev" aria-label="<?php esc_attr_e('Anterior', 'storefront-child'); ?>">❮</button>
        <button class="carousel-next" aria-label="<?php esc_attr_e('Siguiente', 'storefront-child'); ?>">❯</button>
    </div>
</div>

