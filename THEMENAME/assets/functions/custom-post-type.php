<?php
/* This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.
*/


// let's create the function for the custom type


    /*
    |----------------------------------------------------------
    | Custom Post Type: Colors
    |----------------------------------------------------------
    */
    function create_posttype_colors() {
        register_post_type( 'colors',
        // CPT Options
            array(
                'labels' => array(
                    'name' => __( 'Colors' ),
                    'singular_name' => __( 'Color' )
                ),
                'public'        => true,
                'has_archive'   => true,
                'show_in_nav_menus'  => true,
                'rewrite'       => array('slug' => 'colors'),
                'menu_icon'     => 'dashicons-database',
                'supports' => array(
                    'title',

                )
            )
        );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'create_posttype_colors' );





    /*create admin columns*/
    function colors_admin_columns($columns){
        $columns = array(
            'cb'                => '<input type="checkbox" />',
            'image'             => 'Image',
            'title'             => 'Title',
            'has_description'   => 'Has Description',
            'is_coating'        => 'Is Coating',
            'colors_display'    => 'Display',
            'colors_order_by'   => 'Order',
            'date'              => 'Date',
        );
        return $columns;
    }

    function colors_admin_custom_columns($column){
        global $post;
        $post_id = $post->ID;

        if ($column == 'image') {
            $image = get_field( "colors_image", $post_id);
            echo create_image($image, "", "width: 150px;");
        }
        if ($column == 'has_description') {
            $colors_description = get_field( "colors_description", $post_id);

            if( is_string($colors_description) && trim($colors_description) != ""){
                echo "Yes";
            }
        }
        if ($column == 'is_coating') {
            $is_coating =  get_field( "colors_is_coating", $post_id);
            var_dump($is_coating);
        }
        if ($column == 'colors_display') {
            $colors_display =  get_field( "colors_display", $post_id);
            echo isset($colors_display["label"]) ? $colors_display["label"] : "";
        }
        if ($column == 'colors_order_by') {
            echo get_field( "colors_order_by", $post_id);
        }
    }


    add_action("manage_colors_posts_custom_column", "colors_admin_custom_columns");
    add_filter("manage_colors_posts_columns", "colors_admin_columns");



?>