<?php
get_header();
?>
<div class="posts-container">
<?php 

if(have_posts()):
    while(have_posts()) : the_post();
    the_content();
?>
<div class="post">
    <?php

    $heroTitle = get_field('hero_title');
    $heroDescription = get_field('hero_description');
    $heroImage = get_field('hero_image');
    $heroButtonCta = get_field('hero_button_-_cta');

    ?>
    <button> DEFAULT </button>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h3><?php   if(!empty($heroTitle)){
        echo $heroTitle;
    } ?></h3>
    <p><?php if(!empty($heroDescription)){
        echo $heroDescription;
    } ?></p>
    <img src="<?php if(!empty($heroImage)){
        echo $heroImage;
    } ?>" alt="men with thumb up">
    <button><?php if(!empty($heroButtonCta)){
        echo $heroButtonCta;
    } 
    ?></button>
</div>
<?php
endwhile;
else:
    echo "No content found";
endif;
?>
</div>
<?php
include 'faq-template.php';
?>
<?php
get_footer();
?>