<?php

/* ********************************************************
 * For updating the theme's custom options.
 * This can be found: WordPress Dashboard > Appearance > Customize > Site Identity
 * For more options: https://developer.wordpress.org/reference/classes/wp_customize_control/__construct/
 * ******************************************************** */

function add_custom_panel($wp_customize){

    $wp_customize->add_panel('custom_panel',array(
        'title'=>'Theme Options',
        'description'=> 'Theme setting options',
        'priority'=> 10,
    ));

    
    //---------------------------------------------------------------------------------
    // Theme Options: Contact
    //---------------------------------------------------------------------------------
    //create interior panel
    $wp_customize->add_section('contact_custom_section',array(
        'title'=>'Contact and Social Media Links',
        'priority'=>10,
        'panel'=>'custom_panel',
    ));


    //Phone Number
    $wp_customize->add_setting( 'site_phone_number' );
    $wp_customize->add_control( 'site_phone_number',
       array(
            'label' => 'Site Phone Number',
            'section' =>'contact_custom_section',
            'settings' => 'site_phone_number',
        )
    );


    //Address Line 1
    $wp_customize->add_setting( 'site_address_line_1' );
    $wp_customize->add_control( 'site_address_line_1',
       array(
            'label' => 'Site Address Line 1',
            'section' =>'contact_custom_section',
            'settings' => 'site_address_line_1',
        )
    );


    //Address Line 2
    $wp_customize->add_setting( 'site_address_line_2' );
    $wp_customize->add_control( 'site_address_line_2',
       array(
            'label' => 'Site Address Line 2',
            'section' =>'contact_custom_section',
            'settings' => 'site_address_line_2',
        )
    );




    //Email
    $wp_customize->add_setting( 'site_email' );
    $wp_customize->add_control( 'site_email',
       array(
            'label' => 'Site Contact Email',
            'section' =>'contact_custom_section',
            'settings' => 'site_email',
        )
    );


    //Site Social: Facebook
    $wp_customize->add_setting( 'site_social_facebook' );
    $wp_customize->add_control( 'site_social_facebook',
       array(
            'label' => 'Facebook URL',
            'section' =>'contact_custom_section',
            'settings' => 'site_social_facebook',
        )
    );


    //Site Social: Twitter
    $wp_customize->add_setting( 'site_social_twitter' );
    $wp_customize->add_control( 'site_social_twitter',
       array(
            'label' => 'Twitter URL',
            'section' =>'contact_custom_section',
            'settings' => 'site_social_twitter',
        )
    );

    //Site Social: LinkedIn
    $wp_customize->add_setting( 'site_social_linkedin' );
    $wp_customize->add_control( 'site_social_linkedin',
       array(
            'label' => 'LinkedIn URL',
            'section' =>'contact_custom_section',
            'settings' => 'site_social_linkedin',
        )
    );



    //Site Social: Instagram
    $wp_customize->add_setting( 'site_social_instagram' );
    $wp_customize->add_control( 'site_social_instagram',
       array(
            'label' => 'Instagram URL',
            'section' =>'contact_custom_section',
            'settings' => 'site_social_instagram',
        )
    );


    //Site Social: Youtube
    $wp_customize->add_setting( 'site_social_youtube' );
    $wp_customize->add_control( 'site_social_youtube',
       array(
            'label' => 'Youtube URL',
            'section' =>'contact_custom_section',
            'settings' => 'site_social_youtube',
        )
    );


    //---------------------------------------------------------------------------------
    // Theme Options: Announcement Bar
    //---------------------------------------------------------------------------------
    //create interior panels
    $wp_customize->add_section('announcement_bar_custom_section',array(
        'title'=>'Announcement Bar',
        'priority'=>10,
        'panel'=>'custom_panel',
    ));
    // show announcement bar
    $wp_customize->add_setting('site_show_announcement_bar');
    $wp_customize->add_control(  'site_show_announcement_bar',
        array(
            'label' => 'Show Announcement Bar',
            'section' =>'announcement_bar_custom_section',
            'settings' => 'site_show_announcement_bar',
            'type' => 'checkbox'
        ) 
    );

    // announcement bar copy
    $wp_customize->add_setting('site_announcement_bar_copy');
    $wp_customize->add_control(  'site_announcement_bar_copy',
        array(
            'label' => 'Announcement Bar Copy',
            'section' =>'announcement_bar_custom_section',
            'settings' => 'site_announcement_bar_copy',
            'type' => 'textarea'
        ) 
    );

    // show announcement bar
    $wp_customize->add_setting('site_show_announcement_bar_link');
    $wp_customize->add_control(  'site_show_announcement_bar_link',
        array(
            'label' => 'Show Announcement Bar Link',
            'description' => 'This will be placed after the Announcement Bar Copy',
            'section' =>'announcement_bar_custom_section',
            'settings' => 'site_show_announcement_bar_link',
            'type' => 'checkbox',
        ) 
    );

    // announcement bar link URL
    $wp_customize->add_setting('site_announcement_bar_link_url');
    $wp_customize->add_control(  'site_announcement_bar_link_url',
        array(
            'label' => 'Announcement Bar Link URL',
            'section' =>'announcement_bar_custom_section',
            'settings' => 'site_announcement_bar_link_url'
        ) 
    );


    // announcement bar link copy
    $wp_customize->add_setting('site_announcement_bar_link_copy');
    $wp_customize->add_control(  'site_announcement_bar_link_copy',
        array(
            'label' => 'Announcement Bar Link Copy',
            'section' =>'announcement_bar_custom_section',
            'settings' => 'site_announcement_bar_link_copy'
        ) 
    );




    //---------------------------------------------------------------------------------
    // Theme Options: Header
    //---------------------------------------------------------------------------------
    //create interior panels
    $wp_customize->add_section('header_custom_section',array(
        'title'=>'Header',
        'priority'=>10,
        'panel'=>'custom_panel',
    ));

    // add a setting for the site header image
    $wp_customize->add_setting('site_header_image');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_header_image',
        array(
            'label' => 'Header Image',
            'section' =>'header_custom_section',
            'settings' => 'site_header_image',
        ) 
    ) );


    // show search bar
    $wp_customize->add_setting('site_show_search_bar');
    $wp_customize->add_control(  'site_show_search_bar',
        array(
            'label' => 'Show Search Bar',
            'section' =>'header_custom_section',
            'settings' => 'site_show_search_bar',
            'type' => 'checkbox',
        ) 
    );


    //---------------------------------------------------------------------------------
    // Theme Options: Login Page
    //---------------------------------------------------------------------------------
    //create interior panel
    $wp_customize->add_section('login_page_custom_section',array(
        'title'=>'Login Page',
        'priority'=>10,
        'panel'=>'custom_panel',
    ));


    //Use Login Page
    $wp_customize->add_setting( 'site_require_user_is_logged_in' );
    $wp_customize->add_control( 'site_require_user_is_logged_in',
       array(
            'label' => 'Use Login Page',
            'section' =>'login_page_custom_section',
            'settings' => 'site_require_user_is_logged_in',
            'description' => 'If this is checked, a login will be required to view all pages of the site.',
            'type' => 'checkbox'
        )
    );

    //Use Login Page
    $wp_customize->add_setting( 'site_login_redirect' );
    $wp_customize->add_control( 'site_login_redirect',
       array(
            'label' => 'Login Redirect',
            'section' =>'login_page_custom_section',
            'settings' => 'site_login_redirect',
            'description' => 'Where to redirect the user after loggin in. If this is empty, it will redirect to the user profile page of WordPress.',
        )
    );



    //---------------------------------------------------------------------------------
    // Theme Options: 404 Page
    //---------------------------------------------------------------------------------
    //create interior panels
    $wp_customize->add_section('404_custom_section',array(
        'title'=>'404 Page',
        'priority'=>10,
        'panel'=>'custom_panel',
    ));

    
    // add a setting for the site 404 main 404 image
    $wp_customize->add_setting('site_404_image');
    // Add a control to upload the 404 image
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_404_image',
        array(
            'label' => 'Upload 404 Image',
            'section' =>'404_custom_section',
            'settings' => 'site_404_image',
        ) 
    ) );


    // add a setting for the site 404 main 404 copy
    $wp_customize->add_setting('site_404_copy_main');
    $wp_customize->add_control(  'site_404_copy_main',
        array(
            'label' => '404 Main Copy',
            'section' =>'404_custom_section',
            'settings' => 'site_404_copy_main',
            'type' => 'textarea'
        ) 
    );

    // add a setting for the site 404 main 404 copy
    $wp_customize->add_setting('site_404_copy_secondary');
    $wp_customize->add_control(  'site_404_copy_secondary',
        array(
            'label' => '404 Secondary Copy',
            'section' =>'404_custom_section',
            'settings' => 'site_404_copy_secondary',
            'type' => 'textarea'
        ) 
    );


    // add a setting for the site 404 main 404 copy
    $wp_customize->add_setting('site_404_home_btn_copy');
    $wp_customize->add_control(  'site_404_home_btn_copy',
        array(
            'label' => 'What the Home Button Will Say',
            'section' =>'404_custom_section',
            'settings' => 'site_404_home_btn_copy'
        ) 
    );


    //---------------------------------------------------------------------------------
    // Theme Options: Search Results Page
    //---------------------------------------------------------------------------------
    //create interior panels
    $wp_customize->add_section('search_custom_section',array(
        'title'=>'Search Results Page',
        'priority'=>10,
        'panel'=>'custom_panel',
    ));

    

    // add a setting for the site 404 main 404 copy
    $wp_customize->add_setting('site_search_items_per_page');
    $wp_customize->add_control(  'site_search_items_per_page',
        array(
            'label' => 'Items Per Page',
            'section' =>'search_custom_section',
            'settings' => 'site_search_items_per_page',
            'type' => 'select',
            'choices' => array("1" => 1, "5" => 5, "10" => 10, "15" => 15, "20" => 20)
        ) 
    );



    //---------------------------------------------------------------------------------
    // Theme Options: Analytics
    //---------------------------------------------------------------------------------
    //create interior panel
    $wp_customize->add_section('analytics_custom_section',array(
        'title'=>'Analytics',
        'priority'=>10,
        'panel'=>'custom_panel',
    ));

    //Google Analytics Code
    $wp_customize->add_setting( 'site_google_analytics_code' );
    $wp_customize->add_control( 'site_google_analytics_code',
       array(
            'label' => 'Google Analytics Code',
            'section' =>'analytics_custom_section',
            'settings' => 'site_google_analytics_code',
            'type' => 'textarea'
        )
    );


    //Pixel Code
    $wp_customize->add_setting( 'site_pixel_code' );
    $wp_customize->add_control( 'site_pixel_code',
       array(
            'label' => 'Pixel Code',
            'section' =>'analytics_custom_section',
            'settings' => 'site_pixel_code',
            'type' => 'textarea'
        )
    );



}   add_action('customize_register','add_custom_panel');









/**
* Create Logo Setting and Upload Control
* Can be found under WordPress Dashboard > Appearance > Customize > Site Identity
* Section Default Options include: title_tagline, colors, nav_menu, widgets, static_front_page, custom_css
*/
function customizer_settings($wp_customize) {
    //---------------------------------------------------------------------------------
    // Site Identity
    //---------------------------------------------------------------------------------

    // add a setting for the site logo
    $wp_customize->add_setting('site_logo');
    // Add a control to upload the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo',
        array(
            'label' => 'Upload Logo',
            'section' =>'title_tagline',
            'settings' => 'site_logo',
        ) 
    ) );


    // add a setting for the site footer logo
    $wp_customize->add_setting('site_footer_logo');
    // Add a control to upload the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_footer_logo',
        array(
            'label' => 'Upload Footer Logo',
            'section' =>'title_tagline',
            'settings' => 'site_footer_logo',
        ) 
    ) );   
}
add_action('customize_register', 'customizer_settings');


?>