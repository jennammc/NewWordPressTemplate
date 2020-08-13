<?php
// register menus
function juno_nav() {
  $locations = array(
    'top_nav' => __( 'Top Navigation', 'text_domain' ),
    'mobile_nav' => __( 'Mobile Navigation', 'text_domain' ),
    'header_nav' => __( 'Header Navigation', 'text_domain' ),
    'footer_nav' => __( 'Footer Navigation', 'text_domain' ),
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'juno_nav' );
