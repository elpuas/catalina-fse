<?php
/**
 * Catalina Theme Patterns
 *
 * @package catalina
 */

namespace catalina\inc;

/**
 * Register Catalina Pattern Category.
 *
 * @return void
 */
function catalina_register_pattern_categories() {
	register_block_pattern_category(
		'catalina-patterns',
		array( 'label' => __( 'Catalina Patterns', 'catalina' ) )
	);
}

add_action( 'init', __NAMESPACE__ . '\catalina_register_pattern_categories', 9 );

/**
 * Register Block Patterns.
 *
 * @return void
 */
function catalina_block_patterns() {
	register_block_pattern(
		'catalina/hero',
		[
			'categories'  => [ 'catalina-patterns' ],
			'description' => _x( 'Hero Block Pattern.', 'Block pattern description', 'catalina' ),
			'content'     => include get_stylesheet_directory() . '/patterns/hero.php',
			'title'       => __( 'Hero', 'catalina' ),
		]
	);

	register_block_pattern(
		'catalina/cards',
		[
			'categories'  => [ 'catalina-patterns' ],
			'description' => _x( 'A pattern to show the two latest posts cards.', 'Block pattern description', 'catalina' ),
			'content'     => include get_stylesheet_directory() . '/patterns/cards.php',
			'title'       => __( 'Cards', 'catalina' ),
		]
	);

	register_block_pattern(
		'catalina/headline-with-cards',
		[
			'categories'  => [ 'catalina-patterns' ],
			'description' => _x( 'A pattern to show the two latest posts cards and a headline with a call to action', 'Block pattern description', 'catalina' ),
			'content'     => include get_stylesheet_directory() . '/patterns/headline-with-cards.php',
			'title'       => __( 'Headline with Cards', 'catalina' ),
		]
	);

	register_block_pattern(
		'catalina/headline-with-video',
		[
			'categories'  => [ 'catalina-patterns' ],
			'description' => _x( 'A pattern to show a embed video and a headline with a call to action', 'Block pattern description', 'catalina' ),
			'content'     => include get_stylesheet_directory() . '/patterns/headline-with-video.php',
			'title'       => __( 'Headline with Video', 'catalina' ),
		]
	);

	register_block_pattern(
		'catalina/page-hero',
		[
			'categories'  => [ 'catalina-patterns' ],
			'description' => _x( 'A pattern to be use as a header with the page title, page excerpt and feature image', 'Block pattern description', 'catalina' ),
			'content'     => include get_stylesheet_directory() . '/patterns/page-hero.php',
			'title'       => __( 'Page Hero', 'catalina' ),
		]
	);

	register_block_pattern(
		'catalina/blockquote',
		[
			'categories'  => [ 'catalina-patterns' ],
			'description' => _x( 'A fancy blockquote pattern', 'Block pattern description', 'catalina' ),
			'content'     => include get_stylesheet_directory() . '/patterns/blockquote.php',
			'title'       => __( 'Blockquote', 'catalina' ),
		]
	);
}

add_action( 'init', __NAMESPACE__ . '\catalina_block_patterns', 10 );

/**
 * Remove 'core-block-patterns' from theme support to avoid cluttering the editor.
 */
function disable_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\disable_core_block_patterns', 10, 0 );
