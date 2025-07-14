<?php
/**
 * Funciones personalizadas para el tema hijo
 */

function storefront_child_register_menus() {
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'storefront-child'),
        'social' => __('Redes Sociales', 'storefront-child')
    ));
}
add_action('init', 'storefront_child_register_menus');

function storefront_child_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    
    register_sidebar(array(
        'name' => __('Área Personalizada', 'storefront-child'),
        'id' => 'custom-area',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}
add_action('after_setup_theme', 'storefront_child_setup');

function storefront_child_custom_front_page() {
    if ('posts' == get_option('show_on_front')) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', get_page_by_path('inicio')->ID);
    }
}
add_action('after_switch_theme', 'storefront_child_custom_front_page');