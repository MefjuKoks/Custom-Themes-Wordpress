<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function register_styles(){

    wp_enqueue_style(
        'swiper-css', 
        get_template_directory_uri() . '/css/swiper-bundle.css', 
        array(), 
        '11.0.0'
    );

    wp_enqueue_style('style', get_stylesheet_uri(), array('swiper-css'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'register_styles');


function load_my_js(){
    wp_enqueue_script(
        'swiper-js', 
        get_template_directory_uri() . '/js/swiper-bundle.min.js', 
        array(), 
        '11.0.0', 
        true
    );

    wp_enqueue_script(
        'moj-skrypt-galerii',
        get_template_directory_uri() . '/js/script.js',
        array('swiper-js'), 
        '1.0.0',
        true
    );

    wp_localize_script('moj-skrypt-galerii', 'themeData', array(
        'themeUrl' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'load_my_js');

register_nav_menus(array(
    'headermenu' => __('Header Menu'),
    'footermenu' => __('Footer Menu')
));

function handle_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array('height' => 500, 'width' => 300, 'flex-height' => true, 'flex-width' => true));
    add_image_size('small-thumbnail', 100, 150, true);
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'handle_theme_support');
