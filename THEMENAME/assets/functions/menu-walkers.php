<?php 
    function get_wp_menu($wp_menu_name, $current_page_id = null){
        $current_page_id = !is_null($current_page_id) ? $current_page_id : get_the_ID();
        $menu_locations = get_nav_menu_locations();
        $header_menu_id = $menu_locations[$wp_menu_name];
        $wp_menu = wp_get_nav_menu_items($header_menu_id );
        $menu = array();

        if($wp_menu && count($wp_menu)>0 ):
            foreach ($wp_menu as $link):
                $ID = $link->ID;
                $object_id = $link->object_id; 
                $menu_item_parent_id = $link->menu_item_parent;
                $is_current_page = $current_page_id == $object_id  ? true : false;
                $submenu_icon = get_field("specs_submenu_icon",   $ID);

                

                $new_link =  array( 
                    "ID" => $ID, 
                    "Object_ID" => $object_id, 
                    "url" => $link->url, 
                    "title" => $link->title, 
                    "menu_item_parent_id" => $menu_item_parent_id,
                    "is_current_page" => $is_current_page,
                    "submenu_icon" => (is_string($submenu_icon) && $submenu_icon != "" ? $submenu_icon : ""),
                    "submenu" => array()
                ); 

                //add link to submenu
                if (array_key_exists($menu_item_parent_id,$menu)){
                    array_push($menu[$menu_item_parent_id]["submenu"], $new_link);
                }
                else{
                    $menu[$ID] = $new_link;
                }

                //if current page, set parent page also as current
                if($is_current_page && array_key_exists($menu_item_parent_id,$menu)){
                    $menu[$menu_item_parent_id]["is_current_page"] = true;
                }
            endforeach;
        endif;

        return $menu;
    }


    function display_wp_menu($wp_menu_name, $current_page_id = null){
        $wp_menu = get_wp_menu($wp_menu_name, $current_page_id);

        if(is_array($wp_menu) && count($wp_menu) > 0){
            echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
            foreach($wp_menu as $link){
                $icon = $link["submenu_icon"];

                if($link['is_current_page']){
                    echo '<li class="nav-item">';
                        echo "<a class='nav-link active' aria-current='page' href='". $link["url"] ."'>". $icon . $link["title"] ."</a>";
                    echo '</li>';
                }else{
                    echo '<li class="nav-item">';
                        echo "<a class='nav-link' href='". $link["url"] ."'>". $icon .  $link["title"] ."</a>";
                    echo '</li>';
                }
                // <span class="separator">•</span>
            }
            echo '</ul>';
        }
    }
?>