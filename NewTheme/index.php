<?php
get_header();
?>


<?php 

if(have_posts()):
    while(have_posts()) : the_post();
?>
<div class="post">
    <button> DEFAULT </button>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
</div>
<!-- <div class="post-images">
    <img src="<?php echo esc_url(get_theme_file_uri('assets/lionel-messi.webp')); ?>" alt="Lionel Messi">
    <img src="<?php echo esc_url(get_theme_file_uri('assets/doreadme.jpg')); ?>" alt="Do readme">
    <img src="<?php echo esc_url(get_theme_file_uri('assets/cristiano-ronaldo.webp')); ?>" alt="Cristiano Ronaldo">
</div> -->
<?php
endwhile;
else:
    echo "No content found";
endif;
?>





<?php
get_footer();
?>