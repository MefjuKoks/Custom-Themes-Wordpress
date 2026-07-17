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
<form action="" method="post" id="contact-form">
    <label for="Name">Name/NickName: </label>
    <input type="text" name="Name" id="Name">
    <label for="Email">Email: </label>
    <input type="email" name="Email" id="Email">
    <label for="message-content">Message: </label>
    <textarea name="message-content" id="message-content" cols="30" rows="10"></textarea>
    <?php wp_nonce_field('my_form_action', 'my_form_nonce')?>
    <button>Submit</button>
</form>
<?php
endwhile;
else:
    echo "No content found.";
endif;
get_footer();
?>