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
                
                <!-- Menú estático con iconos -->
                <ul class="nav-links" role="menubar">
                    <li role="none"><a href="#sobre-mi" role="menuitem" aria-label="Ir a Sobre mí">👩‍🎨 <span class="menu-text">Sobre mí</span></a></li>
                    <li role="none"><a href="#ganchillo" role="menuitem" aria-label="Ir a Ganchillo">🧶 <span class="menu-text">Ganchillo</span></a></li>
                    <li role="none"><a href="#dog-lover" role="menuitem" aria-label="Ir a Mis creaciones">🐶 <span class="menu-text">Mis creaciones</span></a></li>
                    <li role="none"><a href="#personaliza" role="menuitem" aria-label="Ir a Contacto y personalización">✉️ <span class="menu-text">Contacto y personalización</span></a></li>                    
                    <li role="none"><a href="#hecho-mano" role="menuitem" aria-label="Ir a Hecho a mano">✨ <span class="menu-text">Hecho a mano</span></a></li>
                    <li role="none"><a href="#filosofia" role="menuitem" aria-label="Ir a Filosofía">🌿 <span class="menu-text">Filosofía</span></a></li>
                    <li role="none"><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" role="menuitem" aria-label="Ir a Tienda">🛍️ <span class="menu-text">Tienda</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
