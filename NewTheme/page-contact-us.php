<?php
get_header();
if(have_posts()):
    while(have_posts()) : the_post();
?>
<div class="post">
    <button> DEFAULT </button>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
</div>
<?php
endwhile;
else:
    echo "No content found.";
endif;
?>
<form action="" method="post" id="contact-form">
    <label for="Name">Name/NickName: </label>
    <input type="text" name="Name" id="Name" required>
    <label for="user_email">Email: </label>
    <input type="email" name="user_email" id="user_email" required>
    <label for="message-content">Message: </label>
    <textarea name="message-content" id="message-content" cols="30" rows="10" required></textarea>
    <?php
        wp_nonce_field('my_form_action', 'email_form_nonce');
    ?>
    <button name="submit_my_form" type="submit">Submit</button>
</form>
<?php
get_footer();
?>