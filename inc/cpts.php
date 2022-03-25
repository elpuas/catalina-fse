<?php
/**
 * Catalina CPTs.
 *
 * @package catalina
 */

namespace catalina\inc;

/**
 * Register CPTs.
 *
 * @return void
 */
function news_post_type() {
	register_post_type(
		'news',
		// CPT Options.
		[
			'labels'      => [
				'name'          => __( 'news' ),
				'singular_name' => __( 'News ' ),
			],
			'public'      => true,
			'has_archive' => false,
			'rewrite'     => [
				'slug' => 'news',
			],
		]
	);
}

add_action( 'init', __NAMESPACE__ . '\news_post_type' );

/**
 * CPTs Options.
 *
 * @return void
 */
function post_type_news() {

	$supports = [
		'title', // post title.
		'editor', // post content.
		'author', // post author.
		'thumbnail', // featured images.
		'excerpt', // post excerpt.
		'custom-fields', // custom fields.
		'comments', // post comments.
		'revisions', // post revisions.
		'post-formats', // post formats.
	];

	$labels = [
		'name'           => _x( 'News', 'plural' ),
		'singular_name'  => _x( 'News', 'singular' ),
		'menu_name'      => _x( 'News', 'admin menu' ),
		'name_admin_bar' => _x( 'News', 'admin bar' ),
		'add_new'        => _x( 'Add New', 'add new' ),
		'add_new_item'   => __( 'Add New news' ),
		'new_item'       => __( 'New news' ),
		'edit_item'      => __( 'Edit news' ),
		'view_item'      => __( 'View news' ),
		'all_items'      => __( 'All news' ),
		'search_items'   => __( 'Search news' ),
		'not_found'      => __( 'No news found.' ),
	];

	$args = [
		'supports'     => $supports,
		'labels'       => $labels,
		'public'       => true,
		'show_in_rest' => true,
		'query_var'    => true,
		'rewrite'      => [
			'slug' => 'news'
		],
		'has_archive'  => true,
		'hierarchical' => false,
	];

	register_post_type( 'news', $args );
}

add_action( 'init', __NAMESPACE__ . '\post_type_news' );
