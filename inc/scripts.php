<?php
/**
 * Catalina styles and scripts.
 *
 * @package catalina
 */

namespace catalina\inc;

/**
 * Theme Support.
 */
add_theme_support( 'align-wide' );

/**
 * Enqueue scripts and styles.
 */
function scripts() {

	$asset_file_path = dirname( __DIR__ ) . '/build/index.asset.php';
	$asset_file_time = get_stylesheet_directory() . '/build/index.asset.php';

		$asset_file = [ // phpcs:ignore
			'version'      => filemtime( $asset_file_time ),
			'dependencies' => [ 'wp-polyfill', 'wp-i18n', 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ], // phpcs:ignore
		];

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'catalina', get_template_directory_uri() . '/style.css', [], filemtime( $asset_file_time ) ); // phpcs:ignore

	// Enqueue theme custom styles.
	wp_enqueue_style( 'catalina-styles', get_template_directory_uri() . '/build/index.css', [], filemtime( $asset_file_time ) );

	// Enqueue scripts.
	wp_enqueue_script( 'catalina-scripts', get_template_directory_uri() . '/build/index.js', $asset_file['dependencies'], filemtime( $asset_file_time ), true );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );


/**
 * Enqueue editor styles.
 */
function editor_styles() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'build/index.css' );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\editor_styles' );


function block_assets_scripts_enqueue() {
	$block_asset_dependencies = [ 'wp-i18n', 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ];

	wp_enqueue_script( 'block-variations', get_template_directory_uri() . '/src/js/block-variations.js', $block_asset_dependencies );
	wp_enqueue_script( 'block-styles', get_template_directory_uri() . '/src/js/block-styles.js', $block_asset_dependencies );
	// Enqueue scripts.
	wp_enqueue_script( 'block-advanced-scripts', get_template_directory_uri() . '/build/index.js', $block_asset_dependencies, filemtime( $asset_file_time ), true );
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\block_assets_scripts_enqueue' );
