<?php get_header(); ?>

<main>
    <h1 style="border-bottom: 2px solid #1a1a1a; padding-bottom: 10px; margin-bottom: 30px;">Najnowsze wpisy</h1>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px; border-bottom: 1px solid #eee; padding-bottom: 20px;">
                <h2>
                    <a href="<?php the_permalink(); ?>" style="color: #1a1a1a; text-decoration: none;">
                        <?php the_title(); ?>
                    </a>
                </h2>
                
                <p class="post-meta" style="font-size: 13px; color: #666;">
                    Opublikowano: <?php echo get_the_date(); ?> | Autor: <?php the_author(); ?>
                </p>

                <div class="entry-excerpt">
                    <?php the_excerpt();  ?>
                </div>

                <a href="<?php the_permalink(); ?>" style="display: inline-block; margin-top: 10px; color: #007cba; text-decoration: none; font-weight: bold;">
                    Czytaj więcej &rarr;
                </a>
            </article>

        <?php endwhile;
        
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => '&larr; Poprzednia',
            'next_text' => 'Następna &rarr;',
        ) );

    else :
        echo '<p>Nie znaleziono żadnych wpisów.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
