<footer class="site-footer">
    <p><?php bloginfo('name')?> - &copy; <?php the_time('F jS, Y'); ?></p>
    <p>Made by: <?php the_author(); ?></p>
    <nav class="site-nav">
        <?php
        $args = array(
            'theme_location' => 'footer'
        );
        wp_nav_menu($args);
        ?>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>