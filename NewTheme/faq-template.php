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