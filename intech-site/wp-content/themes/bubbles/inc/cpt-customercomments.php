<?php

/* Customer Comments Custom Post Type */

$args = array(
    "label"                         => "Customer Comments Categories", 
    "singular_label"                => "Customer Comments Category", 
    'public'                        => true,
    'hierarchical'                  => true,
    'show_ui'                       => true,
    'show_in_nav_menus'             => false,
    'args'                          => array( 'orderby' => 'term_order' ),
    'rewrite'                       => false,
    'query_var'                     => true
);
    
add_action('init', 'Theme2035_customer_comments_register');  
  
function Theme2035_customer_comments_register() {  

    $labels = array(
        'add_new' => __('Add New Items', 'Customer Comments item', "theme2035-fm"),       	
        'name' => __('C.Comments', 'Post type general name', "theme2035-fm"),     
        'singular_name' => __('Customer Comments Item', 'post type singular name', "theme2035-fm"),
        'add_new_item' => __('Add New Customer Comments Item', "theme2035-fm"),
        'edit_item' => __('Edit Customer Comments Item', "theme2035-fm"),
        'new_item' => __('New Customer Comments Item', "theme2035-fm"),
        'view_item' => __('View Customer Comments Item', "theme2035-fm"),
        'search_items' => __('Search Customer Comments', "theme2035-fm"),
        'not_found' =>  __('No Customer Comments items have been added yet', "theme2035-fm"),
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
        'menu_icon'  => 'dashicons-format-chat',

       );  
  
    register_post_type( 'customercomments' , $args );  
}  

function Theme2035_customer_comments_edit_columns($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "Customer Comments Item",
            "description" => "Description",

        );  
  
        return $columns;  
}  

add_action("manage_posts_custom_column",  "Theme2035_customer_comments_custom_columns"); 

function Theme2035_customer_comments_custom_columns($column){  
        global $post;  
        switch ($column)  
        {  
            case "description":  
                the_excerpt();  
                break;
        }  
} 

?>