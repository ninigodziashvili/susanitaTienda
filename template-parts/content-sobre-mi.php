<?php
/**
 * Sobre Mí Section - Biografía de la artesana
 */
?>
<section id="sobre-mi" class="section">
    <div class="sobre-mi-glass">
        <div class="container">
            <h2 class="ganchillo line-break"><?php esc_html_e('Sobre mí', 'storefront-child'); ?></h2>
            <div class="bio-content">
                <div class="bio-text sobre-mi-glass2">
                    <p class="ganchillo line-break"><?php esc_html_e('El ganchillo ocupa un lugar muy especial en mi historia. Fue mi tía quien, con infinita paciencia, enseñó a manejar los hilos a esta chica zurda que parecía que no aprendería: al principio torpe, pero siempre llena de ganas y risas.', 'storefront-child'); ?></p>
                    <p class="ganchillo"><?php esc_html_e('Poco a poco descubrí la calma, el cariño y la alegría de transformar un simple ovillo en algo único. Ese camino me llevó a obtener diferentes reconocimientos y premios, y, sobre todo, me enseñó que lo más valioso no es solo lo que se crea, sino todo lo que se teje alrededor.', 'storefront-child'); ?></p>
                    <p class="ganchillo"><?php esc_html_e('Apasionada de las cosas únicas y especiales, decidí fundar Susanita Urban, un espacio donde cada pieza nace sin guion, surgiendo directamente de mi imaginación y de mis manos.', 'storefront-child'); ?></p>
                </div>
                <div class="bio-image">
    <?php echo wp_get_attachment_image(248, 'full', false, [
        'class' => 'bio-img',
        'loading' => 'lazy',
        'alt' => __('Artista tejiendo con ganchillo en su taller creativo', 'storefront-child'),
    ]); ?>
</div>

            </div>
        </div>
    </div>
</section>