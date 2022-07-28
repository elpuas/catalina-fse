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
 * Remove 'core-block-patterns' from theme support to avoid cluttering the editor.
 */
function disable_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\disable_core_block_patterns', 10, 0 );
