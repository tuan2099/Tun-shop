<?php
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/assets/style.css',
    [],
    filemtime(get_template_directory() . '/assets/style.css')
  );
});
