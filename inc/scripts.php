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
add_theme_support('align-wide');
add_post_type_support('page', 'excerpt');

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function scripts() {
    $asset_file_time = get_stylesheet_directory() . '/build/index.asset.php';

    $asset_file = [
        'version'      => filemtime($asset_file_time),
        'dependencies' => [
            'wp-dom-ready',
        ],
    ];

    // Enqueue theme stylesheet.
    wp_enqueue_style(
        'catalina',
        get_template_directory_uri() . '/style.css',
        [],
        $asset_file['version']
    );

    // Enqueue theme custom styles.
    wp_enqueue_style(
        'catalina-styles',
        get_template_directory_uri() . '/build/index.css',
        [],
        $asset_file['version']
    );

    // Enqueue scripts.
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\scripts');


/**
 * Enqueue editor styles.
 *
 * @return void
 */
function editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style('build/index.css');
}

add_action('after_setup_theme', __NAMESPACE__ . '\editor_styles');

/**
 * Enqueue block assets for backend editor.
 *
 * @return void
 */
function block_assets_scripts_enqueue() {

    $asset_file_time = get_stylesheet_directory() . '/build/index.asset.php';

    $asset_file = [
        'version'      => filemtime($asset_file_time),
        'dependencies' => [
            'wp-polyfill',
            'wp-i18n',
            'wp-blocks',
            'wp-dom-ready',
            'wp-edit-post'
        ],
    ];

    do_action('qm/debug', $asset_file['version']);

    wp_enqueue_script(
        'block-variations',
        get_template_directory_uri() . '/src/js/block-variations.js',
        $asset_file['dependencies'],
        $asset_file['version'],
        true
    );

    wp_enqueue_script(
        'block-styles',
        get_template_directory_uri() . '/src/js/block-styles.js',
        $asset_file['dependencies'],
        $asset_file['version'],
        true
    );

    wp_enqueue_script(
        'block-advanced-scripts',
        get_template_directory_uri() . '/build/index.js',
        $asset_file['dependencies'],
        $asset_file['version'],
        true
    );
}

add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\block_assets_scripts_enqueue');
