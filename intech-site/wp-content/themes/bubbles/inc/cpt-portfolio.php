<?php

/* Portfolio Custom Post Type */

$args = array(
    "label"                         => "Portfolio Categories", 
    "singular_label"                => "Portfolio Category", 
    'public'                        => true,
    'hierarchical'                  => true,
    'show_ui'                       => true,
    'show_in_nav_menus'             => false,
    'args'                          => array( 'orderby' => 'term_order' ),
    'rewrite'                       => false,
    'query_var'                     => true
);
add_action('init', 'Theme2035_portfolio_register');  

function theme2035_taxonomy() {
    register_taxonomy("portfolio_filter", array("portfolio"), array("hierarchical" => true, "label" => "Portfolio Filter", "singular_label" => "Project Filter", "rewrite" => true));
}  

add_action( 'init', 'theme2035_taxonomy', 0 );
  
function Theme2035_portfolio_register() {  

    $labels = array(
        'add_new' => __('Add New Items', 'portfolio item', "theme2035-fm"),       	
        'name' => __('Portfolio', 'post type general name', "theme2035-fm"),     
        'singular_name' => __('Portfolio Item', 'post type singular name', "theme2035-fm"),
        'add_new_item' => __('Add New Portfolio Item', "theme2035-fm"),
        'edit_item' => __('Edit Portfolio Item', "theme2035-fm"),
        'new_item' => __('New Portfolio Item', "theme2035-fm"),
        'view_item' => __('View Portfolio Item', "theme2035-fm"),
        'search_items' => __('Search Portfolio', "theme2035-fm"),
        'not_found' =>  __('No portfolio items have been added yet', "theme2035-fm"),
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
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'taxonomies' => array('post_tag'),
        'menu_icon'  => 'dashicons-portfolio',

       );  
  
    register_post_type( 'portfolio' , $args );  
}  

function wpa_cpt_tags( $query ) {
    if ( $query->is_tag() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'portfolio', 'object' ) );
    }
}
add_action( 'pre_get_posts', 'wpa_cpt_tags' );

function Theme2035_portfolio_edit_columns($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "Portfolio Item",
            "description" => "Description",
            "portfolio-category" => "Category",

        );  
  
        return $columns;  
}  

add_action("manage_posts_custom_column",  "Theme2035_portfolio_custom_columns"); 

function Theme2035_portfolio_custom_columns($column){  
        global $post;  
        switch ($column)  
        {  
            case "description":  
                the_excerpt();  
                break;
            case "portfolio-category":
                echo get_the_term_list($post->ID, 'portfolio_filter', '', ', ','');
                break;
        }  
} 

?>