<?php
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup() {
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('custom-header');
  add_theme_support('custom-background');
  add_theme_support('post-formats', ['video', 'audio', 'gallery']);
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  register_nav_menus(['main_menu' => 'Main Menu', 'footer_1' => 'Foooter 1', 'footer_2' => 'Foooter 2']);

  register_post_type('clients', [
    'public' => true,
    'labels' => ['name' => 'Clients','all_items' => 'All Clients','add_new' => 'Add new Clients','add_new_item' => 'Add new Clients','featured_image' => 'Clients Image','set_featured_image' => 'Set Clients Image'],
    'supports' => ['title', 'thumbnail', 'editor'],
    'menu_position' => 5,
    'menu_icon' => 'dashicons-format-aside',
  ]);
}

add_action('wp_enqueue_scripts', 'css_js_connect');
function css_js_connect() {
  wp_enqueue_style('C01', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('C02', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('C03', get_template_directory_uri() . '/assets/css/reset.css');
  wp_enqueue_style('C00', get_stylesheet_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('J02', get_template_directory_uri() . '/assets/js/vendors/popper.min.js');
  wp_enqueue_script('J03', get_template_directory_uri() . '/assets/js/vendors/bootstrap.min.js');
  wp_enqueue_script('J04', get_template_directory_uri() . '/assets/js/vendors/bootstrap-slider.min.js');
  wp_enqueue_script('J05', get_template_directory_uri() . '/assets/js/vendors/jquery.easing.min.js');
  wp_enqueue_script('J06', get_template_directory_uri() . '/assets/js/vendors/owl.carousel.min.js');
  wp_enqueue_script('J07', get_template_directory_uri() . '/assets/js/vendors/countdown.min.js');
  wp_enqueue_script('J08', get_template_directory_uri() . '/assets/js/vendors/jquery.waypoints.min.js');
  wp_enqueue_script('J09', get_template_directory_uri() . '/assets/js/vendors/jquery.rcounterup.js');
  wp_enqueue_script('J10', get_template_directory_uri() . '/assets/js/vendors/magnific-popup.min.js');
  wp_enqueue_script('J11', get_template_directory_uri() . '/assets/js/vendors/validator.min.js');
  wp_enqueue_script('J12', get_template_directory_uri() . '/assets/js/vendors/hs.megamenu.js');
  wp_enqueue_script('J00', get_template_directory_uri() . '/assets/js/app.js');
  wp_enqueue_script('J13', get_template_directory_uri() . '/assets/js/custom.js');
}