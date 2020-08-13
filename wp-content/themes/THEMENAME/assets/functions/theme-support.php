<?php
  
// Adding WP Functions & Theme Support
function juno_theme_support() {

  // Add Menu Support
  add_theme_support('menus');

  // Add WP Thumbnail Support
  add_theme_support( 'post-thumbnails' );

  // Default image sizes
  set_post_thumbnail_size(125, 125, true);
  add_image_size('large', 700, '', true); // Large Thumbnail
  add_image_size('medium', 250, '', true); // Medium Thumbnail
  add_image_size('small', 120, '', true); // Small Thumbnail

  // Custom image sizes
  add_image_size('progressive-loading', 50, '', false); // Image for Progressive Loading
  add_image_size('step-image', 500, 500, false); // Image for Fire Prevention Steps
  add_image_size('hero', 1500, '', false); // Hero Image
  add_image_size('full-width', 1020, '', false); // Image that takes up the full width of a row

  // Add RSS Support
  add_theme_support( 'automatic-feed-links' );

  // Add Support for WP Controlled Title Tag
  add_theme_support( 'title-tag' );

  // Add HTML5 Support
  add_theme_support( 'html5', 
    array( 
      'search-form', 
    ) 
  );

  // Adding post format support
  /* add_theme_support( 'post-formats',
    array(
      'aside',             // title less blurb
      'gallery',           // gallery of images
      'link',              // quick link to other site
      'image',             // an image
      'quote',             // a quick quote
      'status',            // a Facebook like status update
      'video',             // video
      'audio',             // audio
      'chat'               // chat transcript
    )
  ); */

  // Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
  /*
  if ( ! isset( $content_width ) ) {
    $content_width = 1200;
  }
  */

} /* end theme support */
