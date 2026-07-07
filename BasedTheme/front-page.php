<?php get_header();?>

<header class="hero-section" style="text-align: center; padding: 60px 20px; background: #eef2f3; border-radius: 8px; margin-bottom: 30px;">
    <h1>Witaj na naszej stronie głównej!</h1>
</header>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile;
    else :
        echo '<p>Brak treści do wyświetlenia.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
