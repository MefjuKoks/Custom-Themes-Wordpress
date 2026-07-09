<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php
                $args = array(
                    'theme_location' => 'footermenu'
                );
                wp_nav_menu($args);
            ?>
            <div class="social-links">
                <?php
                    echo file_get_contents(get_theme_file_path('assets/x.svg'));
                    echo file_get_contents(get_theme_file_path('assets/facebook.svg'));
                    echo file_get_contents(get_theme_file_path('assets/linkerd.svg'));
                    echo file_get_contents(get_theme_file_path('assets/youtube.svg'));
                ?>
            </div>
        </nav>
        <?php 
            if(function_exists('the_custom_logo')){
                echo the_custom_logo();
            }
        ?>
        <hr>
        <nav class="navbar">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
            <?php 
            $args = array(
                'theme_location' => 'headermenu'
            );
            wp_nav_menu($args);
            ?>
        </nav>
        <nav class="navbar-second">
            <?php
            $args = array(
                'child_of' => $post->ID,
                'title_li' => ''
            );
            wp_list_pages($args);
            ?>
        </nav>
    </header>
    
