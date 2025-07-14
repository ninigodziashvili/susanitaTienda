<?php
/**
 * Personalización Section - Opciones para productos personalizados
 */

// IDs de imágenes del proceso de personalización
$personaliza_ids = [228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241, 242]; // Cambia estos por los IDs reales
?>
<section id="personaliza" class="section bg-blush">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php esc_html_e('Personaliza tu producto junto a mi', 'storefront-child'); ?></h2>
            <div class="section-divider">
                <span class="divider-line"></span>
                <span class="divider-icon">🧶</span>
                <span class="divider-line"></span>
            </div>
            <p><strong><?php esc_html_e('Cuéntame tu idea, muéstrame una foto especial, elige los colores, los hilos, los detalles...', 'storefront-child'); ?></strong> <?php esc_html_e('y tejemos algo que hable de ti.', 'storefront-child'); ?></p>
        </div>

        <div class="personaliza-content">
            <div class="personaliza-text">
                <h3><?php esc_html_e('Tu historia, tu estilo, tus hilos', 'storefront-child'); ?></h3>
                <p class="line-break first-paragraph"><?php esc_html_e('Cada bolso o complemento personalizado es un viaje compartido. Trabajamos mano a mano para elegir materiales, colores y formas que encajen contigo.', 'storefront-child'); ?></p>
                <p><?php esc_html_e('Enviarme una imagen inspiradora, una foto de tu mascota o simplemente una emoción que quieras llevar contigo.', 'storefront-child'); ?></p>
                <p class="line-break last-paragraph"><?php esc_html_e('Escribeme y cuéntame qué necesitas. Juntas diseñamos tu pieza única.', 'storefront-child'); ?></p>

                <div class="line-break">
                    <a href="https://wa.me/34612345678?text=<?php echo urlencode(esc_html__('Hola, me interesa vuestro servicio', 'storefront-child')); ?>" 
                       class="btn-personaliza">
                       <?php esc_html_e('Quiero personalizar el mío', 'storefront-child'); ?>
                    </a>
                </div>
            </div>

            <!-- Carrusel -->
            <div class="personaliza-img">
                <div class="carousel-container personaliza-carousel">
                    <?php foreach ($personaliza_ids as $img_id): ?>
                        <?php $img_url = wp_get_attachment_image_url($img_id, 'large'); ?>
                        <?php if ($img_url): ?>
                            <div class="carousel-slide">
                                <img src="<?php echo esc_url($img_url); ?>" 
                                     alt="<?php esc_attr_e('Proceso de personalización artesanal', 'storefront-child'); ?>" 
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

        </div>
    </div>
</section>
