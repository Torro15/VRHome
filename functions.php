<?php
// Добавить действие
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_features');
add_action('after_setup_theme', 'add_menu');
add_theme_support('custom-logo');

function add_scripts_and_styles()
//Скрипты
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', false, null, true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('materialize', get_template_directory_uri() . '/assets/js/materialize.min.js', null, null, 'footer');
  wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', false, null, 'footer');
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'swiper-script'), null, 'footer');

  //Стили
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
  wp_enqueue_style('materialize', get_template_directory_uri() . '/assets/css/materialize.css');
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
  wp_enqueue_style('main', get_stylesheet_uri());
}

function add_menu()
{
  register_nav_menu('top', 'Главное меню');
}

function add_features()
{
  add_theme_support('post-thumbnails', array('post'));
  add_image_size('adv_thumbnail', 47, 47, true);
}

?>