<?php

function style_script_includes() {
  $template_uri = get_template_directory_uri();
  $stylesheet_uri = get_stylesheet_uri();

  wp_enqueue_script('jquery');
  wp_register_style('theme_style', $stylesheet_uri);
  wp_enqueue_style('theme_style');
  wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', '', '', false);
  wp_enqueue_style('font-awesome');
}
add_action('wp_enqueue_scripts', 'style_script_includes');

add_theme_support('post-thumbnails');
