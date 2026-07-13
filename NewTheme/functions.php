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
function wporg_filter_title($title, $id = null){
    if(in_the_loop() && is_main_query()){
        return '⚽' . $title;
    }
    return $title;
}   
add_filter('the_title', 'wporg_filter_title', 10 , 2);
function modify_footer(){
    // echo "Hello" . "\n";
}
add_action('wp_footer', 'modify_footer', 20);
function theme_specific_login_page(){
    $logo_url = get_stylesheet_directory_uri() . '/assets/lionel-messi.webp';
    ?>
    <style>
        body.login #login h1 a {
            background-image: url('<?php echo $logo_url ?>') !important;
            width: 100% !important;
            height: 100px !important;
        }
        body.login #login #loginform .submit .button-primary{
            background-color: #d227e6;
            border-color: #d227e6;
            margin:auto;
            width:100%;
            margin-top:20px;
        }
        body.login #login #login-message{
            border-left-color: #d227e6;
        }
        .wp-core-ui .button, .wp-core-ui .button-secondary span{
            color : #d227e6;
        }
        body.login .language-switcher input{
            background-color: #d227e6 !important;
            border-color: #d227e6;
            color:#ffffff;
        }
        body.login .language-switcher input:hover{
            background-color: #d227e6 !important;
            border-color: #d227e6;
            color:#ffffff;
        }
        body.login #login #loginform p input:focus, body.login #login #loginform .user-pass-wrap .wp-pwd #user_pass:focus{
            outline: none !important;
            box-shadow: none !important;
            border: 2px solid #d227e6 !important;
        }
        body.login #login #loginform .forgetmenot{
            width:100%;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'theme_specific_login_page');