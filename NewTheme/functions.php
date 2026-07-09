<?php
function register_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'register_styles');
register_nav_menus(array(
    'headermenu' => __('Header Menu'),
    'footermenu' => __('Footer Menu')
));
function handle_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 500,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true
    ));
    add_image_size('small-thumbnail', 100, 150, true);
    add_theme_support('html5', array(
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption', 
        'style', 
        'script'                    
    ));
};
add_action('after_setup_theme', 'handle_theme_support');
?>