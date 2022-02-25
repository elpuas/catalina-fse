<?php
/**
 * Catalina Theme Patterns
 */

/**
 * Register Catalina Pattern Category.
 *
 * @return void
 */
function catalina_register_pattern_categories() {
	register_block_pattern_category(
		'catalina-patterns',
		array('label' => __('Catalina Patterns', 'catalina'))
	);
}

add_action('init', 'catalina_register_pattern_categories');

/**
 * Register Block Patterns.
 *
 * @return void
 */
function catalina_block_patterns() {
	register_block_pattern(
		'catalina/recent-posts',
		[
			'categories'  => ['catalina-patterns'],
			'description' => _x('Custom Query Block Pattern.', 'Block pattern description', 'catalina'),
			'content'     => include get_stylesheet_directory() . '/patterns/query-post.php',
			'title'       => __('Recent Posts', 'catalina'),
		]
	);
}

add_action( 'init', 'catalina_block_patterns' );
