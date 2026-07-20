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
    wp_enqueue_script('wp-api');
    wp_enqueue_script(
        'swiper-js', 
        get_template_directory_uri() . '/js/swiper-bundle.min.js', 
        array(), 
        '11.0.0', 
        true
    );

    wp_enqueue_script(
        'mine-script',
        get_template_directory_uri() . '/js/script.js',
        array('wp-api'), 
        '1.0.0',
        true
    );

    wp_localize_script('mine-script', 'themeData', array(
        'themeUrl' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'load_my_js');

register_nav_menus(array(
    'headermenu' => __('Header Menu'),
    'footermenu' => __('Footer Menu'),
    'dodatkowestronymenu' => __('Dodatkowe strony Menu')
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
    if(in_the_loop() && is_main_query() && is_home()){
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
    $logo_url = get_stylesheet_directory_uri() . '/assets/login-user-name-1.png';
    ?>
    <style>
        html {
            margin: 0 ;
            padding: 0 ;
            height: 100% ;
        }

        body {  
            width: 100% ;
            height: 100dvh ; 
            margin: 0 ;         
            padding: 0 ;
            background-color:#ffffff ;
            color:#000 ;
        }   
        body.login #login h1 a {
            background-image: url('<?php echo $logo_url ?>') ;
            width: 100% ;
            height: 100px ;
        }
        body.login #login #loginform{
            box-shadow:1px 1px 50px #9c9998;
        }
        body.login #login #loginform .submit .button-primary{
            background-color: rgb(0, 114, 132);
            border-color: rgb(0, 114, 132);
            margin:auto;
            width:100%;
            margin-top:20px;
        }
        body.login #login #login-message{
            border-left-color: rgb(0, 114, 132);
            background-color: #ffffff ;
        }
        .wp-core-ui .button, .wp-core-ui .button-secondary span{
            color : #303030;
        }
        body.login .language-switcher input{
            background-color: rgb(0, 114, 132) ;
            border-color: rgb(0, 114, 132);
            color:#fff;
        }
        body.login .language-switcher input:hover{
            color:#e8e8e8;
        }
        body.login #login #loginform p input:focus, body.login #login #loginform .user-pass-wrap .wp-pwd #user_pass:focus{
            outline: none ;
            box-shadow: none ;
            border: 1px solid #000 ;
        }
        body.login #login #loginform .forgetmenot{
            width:100%;
        }
        .login #nav a, .login #backtoblog a{
            color:#000 ;
        }
        .language-switcher label .dashicons{
            color:#000 ;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'theme_specific_login_page');
// function dodaj_tekst_do_footer(){
//     echo "<p> Dodatkowa czesc footera </p>"; 
// }
// add_action('custom_footer_hook', 'dodaj_tekst_do_footer');

// function zmien_moj_tytul($tytul){
//     return $tytul . ' - dopisek od deva';
// }
// add_filter('unikalny_filter_hook' , 'zmien_moj_tytul');
function add_slug_to_body_class( $classes ) {
    global $post;
    if ( is_page() && isset( $post ) ) {
        $classes[] = 'page-slug-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_to_body_class' );
if ( isset( $_POST['submit_my_form'] ) ) {

    // 1. Weryfikacja Nonce
    if ( ! isset( $_POST['email_form_nonce'] ) || ! wp_verify_nonce( $_POST['email_form_nonce'], 'my_form_action' ) ) {
        wp_die( 'Błąd bezpieczeństwa. Spróbuj ponownie.' );
    }

    // 2. Sanityzacja danych wejściowych
    $Name         = sanitize_text_field( $_POST['Name'] );
    $sender_email = sanitize_email( $_POST['user_email'] );
    $message      = sanitize_textarea_field( $_POST['message-content'] ); 

    // 3. Walidacja adresu e-mail (zamiast return, sprawdzamy warunek poprawności)
    if ( ! is_email( $sender_email ) ) {
        echo '<p style="color:red;">Podano nieprawidłowy adres e-mail.</p>';
    } else {
        
        // 4. Przygotowanie i wysyłka wiadomości
        $to      = 'usigma1234alpha@gmail.com'; 
        $subject = 'Nowa wiadomość z formularza';
        
        $body    = "Od: " . $Name . " <" . $sender_email . ">\n\n";
        $body   .= "Treść wiadomości:\n" . $message;

        // Dodano poprawny znak końca linii \r\n
        $headers = array( 'Reply-To: ' . $Name . ' <' . $sender_email . '>' . "\r\n" );

        $success = wp_mail( $to, $subject, $body, $headers );

        // 5. Komunikat dla użytkownika
        if ( $success ) {
            echo '<p style="color:green;">Wiadomość została wysłana pomyślnie!</p>';
        } else {
            echo '<p style="color:red;">Wystąpił błąd podczas wysyłania wiadomości przez serwer.</p>';
        }
    }
}

?>