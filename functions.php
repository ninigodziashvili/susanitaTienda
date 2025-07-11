<?php
// Cargar estilos del tema padre y del tema hijo
add_action('wp_enqueue_scripts', function () {
    // Estilos del tema padre
    wp_enqueue_style('storefront-style', get_template_directory_uri() . '/style.css');

    // Estilos del tema hijo, con dependencia del padre
    wp_enqueue_style('storefront-child-style', get_stylesheet_uri(), ['storefront-style']);
});

// Cambiar texto del botón "Añadir al carrito" en WooCommerce
add_filter('woocommerce_product_add_to_cart_text', 'cambiar_texto_boton_tienda');
function cambiar_texto_boton_tienda() {
    return __('Añadir al carrito', 'woocommerce');
}

// Encolar script JS del tema hijo
function tema_hijo_scripts() {
    wp_enqueue_script(
        'tema-hijo-script', // Handle único
        get_stylesheet_directory_uri() . '/assets/js/main.js', // Ruta CORRECTA al archivo JS (añadida la barra antes de assets)
        array(), // Dependencias, vacías porque tu script no usa jQuery explícitamente
        filemtime(get_stylesheet_directory() . '/assets/js/main.js'), // Versión basada en modificación para cache busting
        true // Cargar en el footer
    );
}
add_action('wp_enqueue_scripts', 'tema_hijo_scripts');

// ELIMINAR MENÚ PRIMARIO DUPLICADO en Storefront
function eliminar_menu_primario_storefront() {
    remove_action('storefront_header', 'storefront_primary_navigation', 50);
}
add_action('init', 'eliminar_menu_primario_storefront');

// OCULTAR CARRITO EN PORTADA
function ocultar_carrito_en_portada() {
    if (is_front_page()) {
        remove_action('storefront_header', 'storefront_header_cart', 60);
    }
}
add_action('wp', 'ocultar_carrito_en_portada');
