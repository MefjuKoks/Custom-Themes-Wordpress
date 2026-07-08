<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?> </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?> </a></h1>
        <h5><?php bloginfo('description'); ?></h5>
        <?php if(is_page(82)){ ?>
            <p>Thank you for viewing our work!</p>
        <?php } ?>
        <nav class="site-nav">
            <?php
            $args = array(
                'theme_location' => 'primary'
            );
            wp_nav_menu($args);
            ?>
        </nav>
        <nav class="nav-second">
            <?php
            $args = array(
                'child_of' => $post->ID,
                'title_li' => ''
            );
            ?>


            <?php  wp_list_pages($args);  ?>
        </nav>
    </header>
    
