<?php 

/* Add theme support */
add_action( 'after_setup_theme', function () {
    // Add support for block styles.
    add_theme_support( 'custom-spacing' );
    add_editor_style( get_theme_file_uri('assets/styles/app.css' ) );
} );

add_action( 'wp_enqueue_scripts', function () {
    $theme_data = wp_get_theme(); 
    $theme_version = $theme_data->get( 'Version' );

    wp_enqueue_style( 'theme-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'theme-styles', get_theme_file_uri() . '/assets/styles/app.css', array( 'theme-fonts-poppins' ), $theme_version, 'all' );
    wp_enqueue_script( 'theme-scripts', get_theme_file_uri() . '/assets/scripts/app.js', array(), $theme_version, false );
    wp_enqueue_style( 'theme-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'theme-fonts-bevietnampro', 'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null );
    $wp_script_data = array(
        'homeurl' => home_url(),
        'ajaxurl' => admin_url('admin-ajax.php' ),
        'themeurl' => get_theme_file_uri(),
    );
    
    wp_localize_script( 'theme-scripts', 'wp_vars', $wp_script_data );
} );