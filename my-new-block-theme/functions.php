<?php
function myblocks_myheader_block_init() {
	wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}
add_action( 'init', 'myblocks_myheader_block_init' );
function my_new_block_theme_block_pattern() {
    register_block_pattern(
        'myblocks_theme_block_pattern/My-new-unsynced-pattern',
        array(
            'title'       => __( 'My new unsynced pattern', 'myblocks_theme_block_pattern' ),
            'description' => _x( 'A simple section with heading and text.', 'Block pattern description', 'myblocks_theme_block_pattern' ),
            'categories'  => array( 'text', 'featured' ),
            'content'     => '<!-- wp:group -->
                            <div class="wp-block-group">
                            <!-- wp:heading {"fontSize":"large"} -->
                            <h2 class="has-large-font-size"><span style="color:#ba0c49" class="has-inline-color">Hi everyone</span></h2>
                            <!-- /wp:heading -->
                            <!-- wp:paragraph {"backgroundColor":"black","textColor":"white"} -->
                            <p class="has-white-color has-black-background-color has-text-color has-background">Powered by MefjuKoks</p>
                            <!-- /wp:paragraph -->
                            </div><!-- /wp:group -->',
        )
    );
}
add_action( 'init', 'my_new_block_theme_block_pattern' );
