<?php
/**
 * Dog Lover Section - Productos con temática canina
 */
?>
<section id="dog-lover" class="section bg-light">
    <div class="container">
        <div class="section-header">
            <h3><?php esc_html_e('Mis creaciones', 'storefront-child'); ?></h3>
            <div class="section-divider">
                <span class="divider-line"></span>
                <span class="divider-icon">🐾</span>
                <span class="divider-line"></span>
            </div>
        </div>

        <?php get_template_part('template-parts/carruseles'); ?>
        
        <div class="padding">
            <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="btn-primary" aria-label="<?php esc_attr_e('Quiero el mío ya', 'storefront-child'); ?>">
                👉 <?php esc_html_e('Quiero el mío ya', 'storefront-child'); ?>
            </a>
        </div>
    </div>
</section>