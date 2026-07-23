<?php $TitleFaq = get_field('the_title_faq'); ?>
<hr>
<div class="faq-container">
    <h2 class="faq-h2"><?php if($TitleFaq){
        echo $TitleFaq;
    }?></h2>
    <ul class="faq-ul">
<?php
if( have_rows('faq') ):

    while( have_rows('faq') ) : the_row();

        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        if($question){
            echo "<li> $question </li>";
        }
        if($answer){
            echo "<li> $answer </li>";
        }
    endwhile;

else :
    
endif;
?>
</ul>
</div>