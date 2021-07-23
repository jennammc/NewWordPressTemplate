<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  // JQuery
  wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/min/jquery.min.js', array( 'jquery' ), '', true );

  // Bootstrap
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array( 'jquery' ), '', true );

  // Modernizr
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr.flexbox.js', array(), '2.7.1');

  // Hamburger Menu
  wp_enqueue_script( 'hamburger-js', get_template_directory_uri() . '/assets/js/hamburgers.js');

  // Adding scripts file in the footer
  wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

  





  // ===== montserrat font =====
  wp_register_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700', array(), '', 'all');
  wp_enqueue_style('montserrat');


  // Register bootstrap stylesheet
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), '', 'all' );

  // icomoon
  wp_enqueue_style( 'icomoon-css', get_template_directory_uri() . '/assets/images/icons/icomoon/style.css', array(), '', 'all' );

  // Register main stylesheet
  wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/main.css', array(), '', 'all' );

  // Comment reply script for threaded comments
  if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);


