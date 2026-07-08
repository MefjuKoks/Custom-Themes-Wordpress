<?php
get_header();


if(have_posts()):
    while(have_posts()): the_post(); ?>
    <div class="item-page">
        <h2><?php the_title(); ?></h2>
        <hr>
        <div class="item-page-content">
            <p><?php the_content(); ?></p>
        </div>
    </div>
 <?php   endwhile;
else:
    echo '<p>No content found.</p>';
endif;


get_footer();


?>