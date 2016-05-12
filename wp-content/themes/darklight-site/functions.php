<?php

function style_script_includes() {
  $template_uri = get_template_directory_uri();
  $stylesheet_uri = get_stylesheet_uri();

  wp_enqueue_script('jquery');
  wp_register_style('theme_style', $stylesheet_uri);
  wp_enqueue_style('theme_style');
}
add_action('wp_enqueue_scripts', 'style_script_includes');

add_theme_support('post-thumbnails');
