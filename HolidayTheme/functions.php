<?php
function load_styles(){
    wp_enqueue_style('my-stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_styles')
?>