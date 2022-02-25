<?php
/**
 * Catalina styles and scripts.
 */

/**
 * Enqueue scripts and styles.
 */
function catalina_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'catalina-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue theme custom styles.
	wp_enqueue_style( 'catalina-style-index', get_template_directory_uri() . '/build/style-index.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue scripts.
	wp_enqueue_script( 'catalina-script-index', get_template_directory_uri() . '/build/index.js', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'catalina_scripts' );
