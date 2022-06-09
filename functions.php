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
  wp_enqueue_style('C04', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style('C05', get_template_directory_uri() . '/assets/css/Icons-Webfont/simple-line-icons.css');
  wp_enqueue_style('C06', get_template_directory_uri() . '/assets/css/et-line-font/et-line-font.css');
  wp_enqueue_style('C07', get_template_directory_uri() . '/assets/css/responsive-leyouts.css');
  wp_enqueue_style('C08', get_template_directory_uri() . '/assets/js/mainmenu/menu.css');
  wp_enqueue_style('C09', get_template_directory_uri() . '/assets/js/masterslider/style/masterslider.css');
  wp_enqueue_style('C10', get_template_directory_uri() . '/assets/js/masterslider/skins/default/style.css');
  wp_enqueue_style('C11', get_template_directory_uri() . '/assets/js/masterslider/style/style.css');
  wp_enqueue_style('C12', get_template_directory_uri() . '/assets/js/cubeportf/css/cubeportfolio.min.css');
  wp_enqueue_style('C13', get_template_directory_uri() . '/assets/js/form/css/sky-forms.css');
  wp_enqueue_style('C14', get_template_directory_uri() . '/assets/js/animations/css/animations.min.css');
  wp_enqueue_style('C00', get_stylesheet_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('J01', get_template_directory_uri() . '/assets/js/jquery.min.js');
  wp_enqueue_script('J02', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
  wp_enqueue_script('J03', get_template_directory_uri() . '/assets/js/masterslider/jquery.easing.min.js');
  wp_enqueue_script('J04', get_template_directory_uri() . '/assets/js/masterslider/masterslider.min.js');
  wp_enqueue_script('J05', get_template_directory_uri() . '/assets/js/customjs1.js');
  wp_enqueue_script('J06', get_template_directory_uri() . '/assets/js/cubeportf/jquery-latest.min.js');
  wp_enqueue_script('J07', get_template_directory_uri() . '/assets/js/cubeportf/jquery.cubeportfolio.min.js');
  wp_enqueue_script('J08', get_template_directory_uri() . '/assets/js/cubeportf/main4.js');
  wp_enqueue_script('J09', get_template_directory_uri() . '/assets/js/form/jquery-ui.min.js');
  wp_enqueue_script('J10', get_template_directory_uri() . '/assets/js/form/jquery.form.min.js');
  wp_enqueue_script('J11', get_template_directory_uri() . '/assets/js/form/jquery.validate.min.js');
  wp_enqueue_script('J12', get_template_directory_uri() . '/assets/js/mainmenu/sticky.js');
  wp_enqueue_script('J13', get_template_directory_uri() . '/assets/js/scrolltotop/totop.js');
  wp_enqueue_script('J14', get_template_directory_uri() . '/assets/js/animations/animations.min.js');
  wp_enqueue_script('J00', get_template_directory_uri() . '/assets/js/customjs2.js');
}
