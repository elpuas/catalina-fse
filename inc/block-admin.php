<?php
/**
 * Catalina Block Admin.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package catalina
 */

/**
 * Register Catalina Block Category.
 *
 * @return void
 */
function catalina_block_categories( $categories ) {
    return array_merge(
        $categories,
        [
            [
                'slug'  => 'catalina-blocks',
                'title' => __( 'Catalina Blocks', 'catalina' ),
            ],
        ]
    );
}
add_action( 'block_categories', 'catalina_block_categories', 10, 2 );