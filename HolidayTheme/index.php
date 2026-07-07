<?php
$strona_id = get_the_ID();
get_header();
?>
<main>
    <?php
    if(have_posts()):
        while(have_posts() ) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
        <?php endwhile;?>
    <?php else :?>
        echo '<p>Brak zawartości do wyświetlenia.</p>';
    <?php endif; ?>
    <section>
        <button> <?php 
        echo get_theme_mod('tekst_lewy', 'Domyslny Lewy');
        ?> </button>
        <button> <?php 
        echo get_theme_mod('tekst_prawy', 'Domyslny Prawy');
        ?></button>
    </section>
</main>
<?php
get_footer();
?>