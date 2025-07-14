<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="header" role="banner">
        <div class="container">
            <nav class="navbar" aria-label="Navegación principal" role="navigation">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="Inicio - Susanita Urban">Susanita Urban</a>
                
                <?php $home_url = esc_url(home_url('/')); ?>
    <ul class="nav-links" role="menubar">
        <li role="none"><a href="<?php echo is_front_page() ? '#sobre-mi' : $home_url . '#sobre-mi'; ?>">👩‍🎨 <span class="menu-text">Sobre mí</span></a></li>
        <li role="none"><a href="<?php echo is_front_page() ? '#ganchillo' : $home_url . '#ganchillo'; ?>">🧶 <span class="menu-text">Ganchillo</span></a></li>
        <li role="none"><a href="<?php echo is_front_page() ? '#dog-lover' : $home_url . '#dog-lover'; ?>">🐶 <span class="menu-text">Mis creaciones</span></a></li>
        <li role="none"><a href="<?php echo is_front_page() ? '#personaliza' : $home_url . '#personaliza'; ?>">✉️ <span class="menu-text">Contacto y personalización</span></a></li>
        <li role="none"><a href="<?php echo is_front_page() ? '#hecho-mano' : $home_url . '#hecho-mano'; ?>">✨ <span class="menu-text">Hecho a mano</span></a></li>
        <li role="none"><a href="<?php echo is_front_page() ? '#filosofia' : $home_url . '#filosofia'; ?>">🌿 <span class="menu-text">Filosofía</span></a></li>
        <li role="none"><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">🛍️ <span class="menu-text">Tienda</span></a></li>
    </ul>

            </nav>
        </div>
    </header>
