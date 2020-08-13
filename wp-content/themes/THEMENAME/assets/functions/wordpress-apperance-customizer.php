<?php



/**
* Create Logo Setting and Upload Control
* Can be found under WordPress Dashboard > Appearance > Customize > Site Identity
*/
function customizer_settings($wp_customize) {
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


    //Phone Number
    $wp_customize->add_setting( 'site_phone_number' );
    $wp_customize->add_control( 'site_phone_number',
       array(
            'label' => 'Site Phone Number',
            'section' =>'title_tagline',
            'settings' => 'site_phone_number',
        )
    );


    //Address Line 1
    $wp_customize->add_setting( 'site_address_line_1' );
    $wp_customize->add_control( 'site_address_line_1',
       array(
            'label' => 'Site Address Line 1',
            'section' =>'title_tagline',
            'settings' => 'site_address_line_1',
        )
    );

    //Address Line 2
    $wp_customize->add_setting( 'site_address_line_2' );
    $wp_customize->add_control( 'site_address_line_2',
       array(
            'label' => 'Site Address Line 2',
            'section' =>'title_tagline',
            'settings' => 'site_address_line_2',
        )
    );
}
add_action('customize_register', 'customizer_settings');


?>