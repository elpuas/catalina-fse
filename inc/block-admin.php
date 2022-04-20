<?php
/**
 * Catalina Block Admin.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package catalina
 */
namespace catalina\inc;

/**
 * Register Catalina Block Category.
 *
 * @return void
 */
function block_categories( $categories ) {
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

add_action( 'block_categories', __NAMESPACE__ . '\block_categories', 10, 2 );
