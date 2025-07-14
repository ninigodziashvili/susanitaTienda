<?php
/**
 * Storefront Child Theme functions and definitions
 */

function storefront_child_enqueue_styles() {
    $parent_style = 'storefront-style';
    
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('storefront-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'storefront_child_enqueue_styles');

require_once get_stylesheet_directory() . '/inc/custom-functions.php';

function agregar_fondo_personalizado() {
    $url_imagen = wp_get_attachment_image_url(249, 'full');
    if ($url_imagen) {
        ?>
        <style>
            body::before {
                content: "";
                position: fixed;
                top: 8em;
                left: 0;
                width: 100%;
                height: 100vh;
                background: url('<?php echo esc_url($url_imagen); ?>') center/cover no-repeat;
                z-index: -1;
            }
        </style>
        <?php
    }
}
add_action('wp_head', 'agregar_fondo_personalizado');
// En functions.php de tu tema hijo
function susanita_woocommerce_styles() {
    wp_enqueue_style('susanita-woocommerce', get_stylesheet_directory_uri() . '/assets/css/woocommerce.css');
}
add_action('wp_enqueue_scripts', 'susanita_woocommerce_styles');
function susanita_woocommerce_responsive_styles() {
    wp_enqueue_style(
        'susanita-woocommerce', 
        get_stylesheet_directory_uri() . '/assets/css/woocommerce.css',
        array('storefront-woocommerce-style'), 
        filemtime(get_stylesheet_directory() . '/assets/css/woocommerce.css')
    );
}
add_action('wp_enqueue_scripts', 'susanita_woocommerce_responsive_styles', 30);