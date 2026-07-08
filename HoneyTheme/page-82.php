<?php
get_header();


if(have_posts()):
    while(have_posts()): the_post(); ?>
    <div class="item-page">
        <h2><?php the_title(); ?></h2>
        <?php if(has_post_thumbnail()): ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <hr>
        <?php the_content(); ?>
    </div>
 <?php   endwhile;
else:
    echo '<p>No content found.</p>';
endif;


get_footer();


?>