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
<?php
endwhile;
else:
    echo "No content found";
endif;
?>





<?php
get_footer();
?>