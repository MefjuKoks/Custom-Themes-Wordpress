<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header>
        <h1><?php bloginfo('name'); ?> </h1>
        <h1><?php bloginfo('description'); ?> </h1>
        <nav>
            <ul>
                <li>link1</li>
                <li>link2</li>
                <li>link3</li>
                <li>link4</li>
                <li>link5</li>
            </ul>
        </nav>
    </header>   