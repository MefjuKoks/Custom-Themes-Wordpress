<footer>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    <nav>
        <?php
        $args = array(
            'theme_location' => 'footer-menu'
        );
        wp_nav_menu($args);
        ?>
    </nav>
</footer> 
<?php wp_footer(); ?>
</body>
</html>