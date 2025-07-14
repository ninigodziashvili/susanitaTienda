<?php
/**
 * Ganchillo Section - El arte del ganchillo
 */
?>
<section id="ganchillo" class="section bg-light">
    <div class="container">
        <h2 class="line-break"><?php esc_html_e('El arte del ganchillo', 'storefront-child'); ?></h2>
        <div class="two-columns">
            <div class="column-text">
                <p class="line-break"><?php esc_html_e('Algunas colecciones aparecen como un suspiro, otras vuelven... o no, quién sabe. Muchas están disponibles para personalizarse, mientras que otras llegan con toda su esencia, tal como fueron concebidas.', 'storefront-child'); ?></p>
                <p><?php esc_html_e('No sigo calendarios. Creo, diseño y comparto pensando en quienes valoran lo hecho con dedicación, un toque de sorpresa y, por encima de todo, mucho corazón.', 'storefront-child'); ?></p>
                <p><?php esc_html_e('Como amante de los animales y orgullosa dog lover, muchas de mis creaciones nacen de esa ternura juguetona que ellos saben inspirar. Cada pieza es un tributo a esas pequeñas musas de cuatro patas que forman parte de mi día a día.', 'storefront-child'); ?></p>
            </div>
            <div class="column-image">
    <?php echo wp_get_attachment_image(212, 'full', false, [
        'class' => 'process-img',
        'loading' => 'lazy',
        'alt' => __('Proceso artesanal de creación con hilos y ganchillo', 'storefront-child'),
    ]); ?>
</div>

        </div>
    </div>
</section>