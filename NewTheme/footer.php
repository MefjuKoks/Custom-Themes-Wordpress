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

        $question = get_sub_field('pytanie');
        $answer = get_sub_field('odpowiedz');
        if(isset($ask) && isset($answer)){
            echo "<li> $question </li>";
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
            <div class="footer-info-container">
                <div class="footer-info-container-part-1">
                    <?php
                        $LogoSrc = get_field('logo_footer', 'options');
                        if(!empty($LogoSrc)){
                            echo "<img src='" . wp_kses_post($LogoSrc) . "' alt='logo'";
                        }
                    ?>
                    <h3>Author Name:</h3>
                    <?php 
                        $AuthorName = get_field('author_footer', 'options');
                        if(!empty($AuthorName)){
                            echo wp_kses_post($AuthorName);
                        }
                    ?>
                </div>
                <div class="footer-info-container-part-2">
                    <?php
                    $DataTime = get_field('data_footer', 'options');
                    if(!empty($DataTime)){
                        echo wp_kses_post($DataTime);
                    }   
                    ?> 
                </div>
            </div>
            <div class="nav-container">
                <h2>Additional websites: </h2>
                <?php 
                    $args = array(
                        'theme_location' => 'dodatkowestronymenu'
                    );
                    wp_nav_menu($args);
                ?>
            </div>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>