<?php



///////////////////////////////////////////////////////////////////////////

function wpNatives_setup() {
  // Nav Menus
  register_nav_menus(array(
    'primary' => __( 'Primary Menu' ),
    'footer' => __( 'Footer Menu' )
  ));
  // Add featured images
  add_theme_support('post-thumbnails');
  add_image_size('big-article', 430, 430, true);
  add_image_size('small-article', 175, 135, false);
  add_image_size('feat-article', 240, 150, false);
  add_image_size('pub-article', 180, 400, false);
  add_image_size('foot-img', 75, 75, false);

  // Add format support
  add_theme_support('post-formats', array('aside'));
}

add_action('after_setup_theme', 'wpNatives_setup');

function import_ressources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'import_ressources');


 ?>
