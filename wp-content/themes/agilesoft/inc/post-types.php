<?php
if (!defined('ABSPATH'))
  exit;

add_action('init', function () {

  // ===== Products =====
  register_post_type('product', [
    'labels' => [
      'name' => __('Products', 'toka'),
      'singular_name' => __('Product', 'toka'),
      'menu_name' => __('Products', 'toka'),
      'add_new_item' => __('Add New Product', 'toka'),
    ],
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'rest_base' => 'products',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => ['slug' => 'products'],
    'menu_icon' => 'dashicons-cart',
  ]);

  // ===== Services =====
  register_post_type('service', [
    'labels' => [
      'name' => __('Services', 'toka'),
      'singular_name' => __('Service', 'toka'),
      'menu_name' => __('Services', 'toka'),
      'add_new_item' => __('Add New Service', 'toka'),
    ],
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'rest_base' => 'services',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => ['slug' => 'services'],
    'menu_icon' => 'dashicons-hammer',
  ]);

  // ===== Technologies =====
  register_post_type('technology', [
    'labels' => [
      'name' => __('Technologies', 'toka'),
      'singular_name' => __('Technology', 'toka'),
      'menu_name' => __('Technologies', 'toka'),
      'add_new_item' => __('Add New Technology', 'toka'),
    ],
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'rest_base' => 'technologies',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => ['slug' => 'technologies'],
    'menu_icon' => 'dashicons-admin-generic',
  ]);

  // ===== Industries (Ngành nghề) =====
  register_post_type('industry', [
    'labels' => [
      'name' => __('Industries', 'toka'),
      'singular_name' => __('Industry', 'toka'),
      'menu_name' => __('Industries', 'toka'),
      'add_new_item' => __('Add New Industry', 'toka'),
    ],
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'rest_base' => 'industries',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => ['slug' => 'industries'],
    'menu_icon' => 'dashicons-networking',
  ]);

}, 0);
