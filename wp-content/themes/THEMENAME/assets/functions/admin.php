<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/
// Disable default dashboard widgets
function disable_default_dashboard_widgets() {
  // Remove_meta_box('dashboard_right_now', 'dashboard', 'core');    // Right Now Widget
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
  remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

  // Remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  // Quick Press Widget
  remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
  remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
  remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //

  // Removing plugin dashboard boxes
  remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget
}

/*
For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/

// Calling all custom dashboard widgets
function juno_custom_dashboard_widgets() {
  /*
  Be sure to drop any other created Dashboard Widgets
  in this function and they will all load.
  */
}
// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');
// adding any custom widgets
add_action('wp_dashboard_setup', 'juno_custom_dashboard_widgets');

/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function custom_admin_footer() {
  _e('<span id="footer-thankyou">Developed with &#10084; at <a href="https://dhxadv.com/" alt="DHX Advertising" target="_blank">DHX</a></span>.', '');
}

// adding it to the admin area
add_filter('admin_footer_text', 'custom_admin_footer');
