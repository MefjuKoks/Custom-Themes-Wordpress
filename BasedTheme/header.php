<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <nav>
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>
        
        <?php
        wp_nav_menu( array(
            'theme_location' => 'glowne-menu', 
            'container'      => false,
            'fallback_cb'    => false, 
        ) );
        ?>
    </nav>

    <div class="main-content">
