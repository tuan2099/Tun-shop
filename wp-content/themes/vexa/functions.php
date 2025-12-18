<?php 

// Disable licenses ACF plugin
add_action('init', function() {
    @ini_set("display_errors", 0);

    if (!defined("ABSPATH")) {
    exit(); // Exit if accessed directly.
    }

    $lic_data = base64_encode(
    maybe_serialize([
    "key" => "********",
    "url" => home_url(),
    ])
    );
    update_option("acf_pro_license", $lic_data);
    update_option("acf_pro_license_status", [
    "status" => "active",
    "next_check" => time() * 9,
    ]);
});

function vexatheme_scripts () {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awsome/all.min.css', array(), '6.4');
    wp_enqueue_script('font-awesome', get_template_directory_uri() . '/assets/font-awsome/all.min.js', array(), '6.4');
    wp_enqueue_script('tailwindcss','https://cdn.tailwindcss.com', array(), null, false);
}
add_action('wp_enqueue_scripts', 'vexatheme_scripts');

// Register All Menu
function tuan_register_menus() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'vexa'),
        'footer_menu' => __('Footer Menu', 'vexa'),
    ]);
}
add_action('after_setup_theme', 'tuan_register_menus');

function tuan_theme_supports() {
    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'service', 'pricing' ) );
}
add_action( 'after_setup_theme', 'tuan_theme_supports' );

function tuan_footer_menu_link_classes( $atts, $item, $args ) {
    if ( $args->theme_location === 'footer_menu' ) {
        $existing_class = isset($atts['class']) ? $atts['class'] . ' ' : '';
        $atts['class']  = $existing_class . 'text-gray-400 hover:text-lime-400 transition';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'tuan_footer_menu_link_classes', 10, 3);

function tuan_admin_add_thumbnail_column( $columns ) {
    $new_columns = array();

    foreach ( $columns as $key => $value ) {
        if ( $key === 'title' ) {
            $new_columns['tuan_thumbnail'] = 'Ảnh';
        }
        $new_columns[ $key ] = $value;
    }

    if ( ! isset( $new_columns['tuan_thumbnail'] ) ) {
        $new_columns['tuan_thumbnail'] = 'Ảnh';
    }

    return $new_columns;
}

function tuan_admin_render_thumbnail_column( $column, $post_id ) {
    if ( $column !== 'tuan_thumbnail' ) {
        return;
    }

    if ( has_post_thumbnail( $post_id ) ) {
        echo get_the_post_thumbnail( $post_id, array( 60, 60 ), array( 'style' => 'width:60px;height:60px;object-fit:cover;border-radius:6px;' ) );
    } else {
        echo '<span style="color:#b91c1c;font-weight:600;">No image</span>';
    }
}

function tuan_admin_thumbnail_column_css() {
    $screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
    if ( empty( $screen ) ) {
        return;
    }

    if ( ! in_array( $screen->id, array( 'edit-post', 'edit-page', 'edit-service', 'edit-pricing' ), true ) ) {
        return;
    }
    echo '<style>.column-tuan_thumbnail{width:80px;text-align:center;}</style>';
}
add_action( 'admin_head', 'tuan_admin_thumbnail_column_css' );

add_filter( 'manage_post_posts_columns', 'tuan_admin_add_thumbnail_column', 10, 1 );
add_filter( 'manage_page_posts_columns', 'tuan_admin_add_thumbnail_column', 10, 1 );
add_filter( 'manage_service_posts_columns', 'tuan_admin_add_thumbnail_column', 10, 1 );
add_filter( 'manage_pricing_posts_columns', 'tuan_admin_add_thumbnail_column', 10, 1 );

add_action( 'manage_post_posts_custom_column', 'tuan_admin_render_thumbnail_column', 10, 2 );
add_action( 'manage_page_posts_custom_column', 'tuan_admin_render_thumbnail_column', 10, 2 );
add_action( 'manage_service_posts_custom_column', 'tuan_admin_render_thumbnail_column', 10, 2 );
add_action( 'manage_pricing_posts_custom_column', 'tuan_admin_render_thumbnail_column', 10, 2 );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require_once get_template_directory() . '/inc/class-vexa-nav-walker.php';