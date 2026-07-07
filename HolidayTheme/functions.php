<?php
function load_styles(){
    wp_enqueue_style('my-stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_styles');
function rejestracja_moich_menu() {
    register_nav_menus( array(
        'glowne-menu' => __( 'Główne Menu Tematu', 'tekst-domeny' ),
    ) );
}
add_action( 'init', 'rejestracja_moich_menu' );
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Ustawienia motywu',
        'menu_title'    => 'Ustawienia motywu',
        'menu_slug'     => 'ustawienia-motywu',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
function moj_motyw_przyciski_customizer( $wp_customize ) {
    $wp_customize->add_section( 'sekcja_przyciskow', array(
        'title'    => 'Przyciski Strony Głównej',
        'priority' => 30,
    ) );
    $wp_customize->add_setting( 'tekst_lewy', array(
        'default'           => 'Domyślny Lewy',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'tekst_lewy_control', array(
        'label'    => 'Tekst lewego przycisku',
        'section'  => 'sekcja_przyciskow',
        'settings' => 'tekst_lewy',
        'type'     => 'text',
    ) );
    $wp_customize->add_setting( 'tekst_prawy', array(
        'default'           => 'Domyślny Prawy',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'tekst_prawy_control', array(
        'label'    => 'Tekst prawego przycisku',
        'section'  => 'sekcja_przyciskow',
        'settings' => 'tekst_prawy',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'moj_motyw_przyciski_customizer' );

?>