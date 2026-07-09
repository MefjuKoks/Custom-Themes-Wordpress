<?php
function inject_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'inject_styles');
//Navigation
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));
//theme_support
function moj_motyw_setup() {
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_theme_support('title-tag');
    add_theme_support( 'custom-logo', array(
        'height' => 150,
        'width'  => 300,
        'flex-height' => true,
        'flex-width' => true
    ) );
    add_theme_support( 'html5', array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption', 
        'style', 
        'script' 
    ) );
    
}
add_action('after_setup_theme', 'moj_motyw_setup');

?>