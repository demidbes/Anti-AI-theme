<?php

add_action('wp_enqueue_scripts', function () {

  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/assets/css/main.css' // Основной css 
  );

  wp_enqueue_script(
    'script',
    get_template_directory_uri() . '/assets/js/main.js', // Основной js
    [],
    null,
    true
  );
});
