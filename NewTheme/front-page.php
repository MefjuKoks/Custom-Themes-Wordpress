<?php
get_header();
?>
<?php 

if(have_posts()):
    while(have_posts()) : the_post();
    the_content();
?>
<div class="post">
    <button> DEFAULT </button>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h3><?php   the_field('hero_title') ?></h3>
    <p><?php the_field('hero_description') ?></p>
    <img src="<?php the_field('hero_image') ?>" alt="men with thumb up">
    <button><?php the_field('hero_button_-_cta') 
    ?></button>
</div>
<?php
endwhile;
else:
    echo "No content found";
endif;
?>
<?php
get_footer();
?>