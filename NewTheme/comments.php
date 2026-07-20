<?php

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( 1 === $comment_count ) {
                printf( esc_html__( '1 komentarz do wpisu', 'textdomain' ) );
            } else {
                printf(
                    esc_html( _nx( '%s komentarz', '%s komentarzy', $comment_count, 'comments title', 'textdomain' ) ),
                    number_format_i18n( $comment_count )
                );
            }
            ?>
        </h2>

    
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <div class="nav-previous"><?php previous_comments_link( '&larr; Starsze komentarze' ); ?></div>
                <div class="nav-next"><?php next_comments_link( 'Nowsze komentarze &rarr;' ); ?></div>
            </nav>
        <?php endif; ?>


        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 42,
            ) );
            ?>
        </ol>

        
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <div class="nav-previous"><?php previous_comments_link( '&larr; Starsze komentarze' ); ?></div>
                <div class="nav-next"><?php next_comments_link( 'Nowsze komentarze &rarr;' ); ?></div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments">Komentarze do tego wpisu są zamknięte.</p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>
