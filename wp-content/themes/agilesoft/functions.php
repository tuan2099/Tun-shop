<?php 

/* Add theme support */
add_action( 'after_setup_theme', function () {
    // Add support for block styles.
    add_theme_support( 'custom-spacing' );
    add_editor_style( get_theme_file_uri('assets/styles/app.css' ) );
} );

/**
 * Load theme files
 */
require_once get_template_directory() . '/inc/assets.php';
require_once get_template_directory() . '/inc/post-types.php';
