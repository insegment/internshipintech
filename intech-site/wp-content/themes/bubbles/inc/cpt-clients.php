<?php

/* Clients Custom Post Type */

$args = array(
    "label"                         => "Clients Categories", 
    "singular_label"                => "Clients Category", 
    'public'                        => true,
    'hierarchical'                  => true,
    'show_ui'                       => true,
    'show_in_nav_menus'             => false,
    'args'                          => array( 'orderby' => 'term_order' ),
    'rewrite'                       => false,
    'query_var'                     => true
);
    
add_action('init', 'Theme2035_clients_register');  
  
function Theme2035_clients_register() {  

    $labels = array(
        'add_new' => __('Add New Items', 'Clients item', "theme2035-fm"),       	
        'name' => __('Clients', 'Post type general name', "theme2035-fm"),     
        'singular_name' => __('Clients Item', 'post type singular name', "theme2035-fm"),
        'add_new_item' => __('Add New Clients Item', "theme2035-fm"),
        'edit_item' => __('Edit Clients Item', "theme2035-fm"),
        'new_item' => __('New Clients Item', "theme2035-fm"),
        'view_item' => __('View Clients Item', "theme2035-fm"),
        'search_items' => __('Search Clients', "theme2035-fm"),
        'not_found' =>  __('No Clients items have been added yet', "theme2035-fm"),
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
        'menu_icon'  => 'dashicons-portfolio',

       );  
  
    register_post_type( 'Clients' , $args );  
}  

function Theme2035_clients_edit_columns($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "Clients Item",
            "description" => "Description",

        );  
  
        return $columns;  
}  

add_action("manage_posts_custom_column",  "Theme2035_clients_custom_columns"); 

function Theme2035_clients_custom_columns($column){  
        global $post;  
        switch ($column)  
        {  
            case "description":  
                the_excerpt();  
                break;
        }  
} 

?>