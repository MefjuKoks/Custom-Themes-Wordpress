<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header>
        <h1><?php bloginfo('name'); ?> </h1>
        <h1><?php bloginfo('description'); ?> </h1>
        <nav>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'glowne-menu',
                'menu_class'     => 'menu-lista',
                'fallback_cb'    => 'wp_page_menu',
            ) );
            ?>
        </nav>

    </header>   