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
    <?php the_content(); ?>
</div>
<div class="faq-container">
<h2 class="faq-h2"><?php the_field('the_title_faq');?></h2>
    <ul class="faq-ul">
<?php
if( have_rows('faq') ):

    while( have_rows('faq') ) : the_row();

        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        echo "<li> $question </li>";
        echo "<li> $answer </li>";
    endwhile;

else :
    
endif;
?>
</ul>
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