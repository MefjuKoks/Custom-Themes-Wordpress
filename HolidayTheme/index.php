<?php
get_header();
?>
<main>
    <?php
    if(have_posts()):
        while(have_posts() ) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
            <button class="btn-shop">SHOP</button>
            <button class="btn-projects">PROJECTS</button>
        </article>
        <?php endwhile;?>
        <section>
            <div class="item-card"><img src="" alt="icon-1"><p>Card 1</p><h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5></div>
            <div class="item-card"><img src="" alt="icon-2"><p>Card 2</p><h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5></div>
            <div class="item-card"><img src="" alt="icon-3"><p>Card 3</p><h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5></div>
        </section>
    <?php else :?>
        echo '<p>Brak zawartości do wyświetlenia.</p>';
    <?php endif; ?>
    ?>
</main>
<?php
get_footer();
?>