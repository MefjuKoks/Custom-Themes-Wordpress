<?php
function moj_motyw_scripts() {
    wp_enqueue_style( 'moj-styl-glowny', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'moj_motyw_scripts' );

function moj_motyw_konfiguracja() {
    register_nav_menus( array(
        'glowne-menu' => __( 'Główne Menu Nagłówka', 'moj-motyw' ),
    ) );

    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'moj_motyw_konfiguracja' );
