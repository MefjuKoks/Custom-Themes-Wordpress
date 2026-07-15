<hr>
<footer>
<!-- <?php
    do_action('custom_footer_hook');
    $tytul = "moj customowy filter";
    $zmodyfikowany_tytul = apply_filters('unikalny_filter_hook', $tytul);
    echo $zmodyfikowany_tytul;
?> -->
<div class="faq-container">
    <h2 class="faq-h2"><?php the_field('the_title_faq');?></h2>
    <ul class="faq-ul">
<?php
if( have_rows('faq') ):

    while( have_rows('faq') ) : the_row();

        $ask = get_sub_field('pytanie');
        $answer = get_sub_field('odpowiedz');
        if(isset($ask) && isset($answer)){
            echo "<li> $ask </li>";
            echo "<li> $answer </li>";
        }
    endwhile;

else :
    
endif;
?>
</ul>
</div>
<hr>
<nav class="navbar-third">
            <h2>Additional websites: </h2>
            <?php 
                $args = array(
                    'theme_location' => 'dodatkowestronymenu'
                );
                wp_nav_menu($args);
            ?>
        </nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>