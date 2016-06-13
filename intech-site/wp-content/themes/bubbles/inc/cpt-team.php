<?php

/* Team Custom Post Type */

$args = array(
    "label"                         => "Team Categories", 
    "singular_label"                => "Team Category", 
    'public'                        => true,
    'hierarchical'                  => true,
    'show_ui'                       => true,
    'show_in_nav_menus'             => false,
    'args'                          => array( 'orderby' => 'term_order' ),
    'rewrite'                       => false,
    'query_var'                     => true
);
    
add_action('init', 'Theme2035_team_register');  
  
function Theme2035_team_register() {  

    $labels = array(
        'add_new' => __('Add New Items', 'Team item', "theme2035-fm"),       	
        'name' => __('Team', 'Post type general name', "theme2035-fm"),     
        'singular_name' => __('Team Item', 'post type singular name', "theme2035-fm"),
        'add_new_item' => __('Add New Team Item', "theme2035-fm"),
        'edit_item' => __('Edit Team Item', "theme2035-fm"),
        'new_item' => __('New Team Item', "theme2035-fm"),
        'view_item' => __('View Team Item', "theme2035-fm"),
        'search_items' => __('Search Team', "theme2035-fm"),
        'not_found' =>  __('No Team items have been added yet', "theme2035-fm"),
        'not_found_in_trash' => __('Nothing found in Trash', "theme2035-fm"),
        'parent_item_colon' => ''
    );

    $args = array(  
        'labels' => $labels,  
        'public' => true,  
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,        
        'rewrite' => false,
        'supports' => array('title','thumbnail'),
        'has_archive' => true,
        'menu_icon'  => 'dashicons-businessman',

       );  
  
    register_post_type( 'team' , $args );  
}  

function Theme2035_team_edit_columns($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "team Item",
            "description" => "Description",

        );  
  
        return $columns;  
}  

add_action("manage_posts_custom_column",  "Theme2035_team_custom_columns"); 

function Theme2035_team_custom_columns($column){  
        global $post;  
        switch ($column)  
        {  
            case "description":  
                the_excerpt();  
                break;
        }  
} 

?>