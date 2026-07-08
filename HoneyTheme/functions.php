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
//post-thumbnail
function moj_motyw_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'moj_motyw_setup');
?>