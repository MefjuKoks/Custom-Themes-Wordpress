<?php
get_header();
?>
<h1 class="archive-title">
    <?php the_archive_title(); ?>
</h1>
<?php
if(have_posts()):
    while(have_posts()) : the_post();
?>
<div class="post">
    <button> DEFAULT </button>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
</div>

<?php
endwhile;
else:
    echo "No content found.";
endif;
get_footer();
?>