<?php
/**
 * Catalina styles and scripts.
 *
 * @package catalina
 */

namespace catalina\inc;

/**
 * Enqueue scripts and styles.
 */
function scripts() {

	$asset_file_path = dirname( __DIR__ ) . '/build/index.asset.php';
	$asset_file_time = get_stylesheet_directory() . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [ // phpcs:ignore
			'version'      => filemtime( $asset_file_time ),
			'dependencies' => [ 'wp-polyfill' ], // phpcs:ignore
		];
	}

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'catalina', get_template_directory_uri() . '/style.css', [], filemtime( $asset_file_time ) ); // phpcs:ignore

	// Enqueue theme custom styles.
	wp_enqueue_style( 'catalina-styles', get_template_directory_uri() . '/build/index.css', $asset_file['dependencies'], filemtime( $asset_file_time ) );

	// Enqueue scripts.
	wp_enqueue_script( 'catalina-scripts', get_template_directory_uri() . '/build/index.js', $asset_file['dependencies'], filemtime( $asset_file_time ), true );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );
