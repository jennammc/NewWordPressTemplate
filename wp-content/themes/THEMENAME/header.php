<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_site_icon_url() ; ?>" rel="shortcut icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- :::::::::: Fonts :::::::::: -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto+Slab:700" rel="stylesheet"> 

    <!-- :::::::::: Critical Path CSS :::::::::: -->

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>


    <header class="header" role="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                    wp_nav_menu( array(
                      'theme_location' => 'header_nav', 
                      'container' => '',
                      'menu_class' => 'collapse navbar-collapse',
                      'items_wrap' => '<ul  class="navbar-nav ml-auto">%3$s</ul>',
                    )); 
                ?>
            </div>
        </nav> 
    </header>


    

