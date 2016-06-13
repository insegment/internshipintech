<?php

/* Slider Custom Post Type */

$args = array(
    "label"                         => "Slider Categories", 
    "singular_label"                => "Slider Category", 
    'public'                        => true,
    'hierarchical'                  => true,
    'show_ui'                       => true,
    'show_in_nav_menus'             => false,
    'args'                          => array( 'orderby' => 'term_order' ),
    'rewrite'                       => false,
    'query_var'                     => true
);
add_action('init', 'Theme2035_slider_register');  

function Theme2035_slider_register() {  

    $labels = array(
        'add_new' => __('Add New Slider', 'Slider item', "theme2035-fm"),       	
        'name' => __('Slider', 'Post type general name', "theme2035-fm"),     
        'singular_name' => __('Slider Item', 'post type singular name', "theme2035-fm"),
        'add_new_item' => __('Add New Slider Item', "theme2035-fm"),
        'edit_item' => __('Edit Slider Item', "theme2035-fm"),
        'new_item' => __('New Slider Item', "theme2035-fm"),
        'view_item' => __('View Slider Item', "theme2035-fm"),
        'search_items' => __('Search Slider', "theme2035-fm"),
        'not_found' =>  __('No Slider items have been added yet', "theme2035-fm"),
        'not_found_in_trash' => __('Nothing found in Trash', "theme2035"),
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
        'menu_icon'  => 'dashicons-images-alt',

       );  
  
    register_post_type( 'slider' , $args );  
}  

function Theme2035_slider_edit_slider($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "Slider Item",
            "description" => "Description",
        );  
  
        return $columns;  
}  

add_action("manage_posts_custom_column",  "Theme2035_slider_custom_columns"); 

function Theme2035_slider_custom_columns($column){  
        global $post;  
        switch ($column)  
        {  
            case "description":  
                the_excerpt();  
                break;
        }  
} 

add_filter("manage_edit-slider_columns", "Theme2035_slider_edit_slider");   

?>