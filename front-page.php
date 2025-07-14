<?php
/**
 * Template Name: Página de Inicio Personalizada
 * Description: Página de inicio para Susanita Urban
 */

get_header(); // Incluye el header.php
?>

<main id="primary" class="site-main">
    <?php
    // Incluye todos los template parts en orden
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'sobre-mi');
    get_template_part('template-parts/content', 'ganchillo');
    get_template_part('template-parts/content', 'dog-lover');
    get_template_part('template-parts/content', 'personalizacion');
    get_template_part('template-parts/content', 'productos');
    get_template_part('template-parts/content', 'hecho-mano');
    get_template_part('template-parts/content', 'filosofia');
    ?>
</main>

<?php
get_footer(); // Incluye el footer.php
?>

