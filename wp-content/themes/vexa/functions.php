<?php 

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

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';