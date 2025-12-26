<?php

add_action('wp_enqueue_scripts', function () {

  wp_enqueue_style(
    'theme-main-style',
    get_template_directory_uri() . '/assets/dist/css/main.css' // Основной css 
  );

  wp_enqueue_script(
    'theme-main-script',
    get_template_directory_uri() . '/assets/dist/js/main.js', // Основной js
    [],
    null,
    true
  );
});

function theme_register_menus()
{
  register_nav_menus([
    'header_menu' => 'Header menu',
    'footer_menu' => 'Footer menu',
  ]);
}
add_action('after_setup_theme', 'theme_register_menus');
