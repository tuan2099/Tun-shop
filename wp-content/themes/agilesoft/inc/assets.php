<?php
if ( ! defined('ABSPATH') ) exit;

/**
 * Enqueue styles & scripts
 */
add_action( 'wp_enqueue_scripts', function () {

  $theme_data    = wp_get_theme();
  $theme_version = $theme_data->get( 'Version' );

  // CSS
  wp_enqueue_style(
    'theme-styles',
    get_theme_file_uri( '/assets/styles/app.css' ),
    array(),
    $theme_version
  );

  wp_enqueue_style(
    'theme-fonts-poppins',
    'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap',
    array(),
    null
  );

  // JS
  wp_enqueue_script(
    'theme-scripts',
    get_theme_file_uri( '/assets/scripts/app.js' ),
    array(),
    $theme_version,
    true
  );

  // Localize
  wp_localize_script( 'theme-scripts', 'wp_vars', array(
    'homeurl' => home_url(),
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    'themeurl'=> get_theme_file_uri(),
  ));

});
