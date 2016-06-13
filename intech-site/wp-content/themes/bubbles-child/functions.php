<?php
	
	/*
	*
	*	Bubbles - Child Theme
	*
	*/

if (!function_exists('Theme2035_numbers')) {
	function Theme2035_numbers( $atts, $content = null ) {
		extract(shortcode_atts(array(		
			'number' => '',	
			'targetnumber' => '',
			'text' => '',	
			'icon' => ''	
	    ), $atts));	

		global $r;

		$output  = '';

		$output  .= '<div class="row mobile-numbers"><div class="stats-icon col-lg-offset-2 col-lg-4 col-sm-4"> <i class="fa fa-'. $icon .'"></i> </div><div class="stats-font col-lg-4 col-sm-4"><div class="animated-numbers big-numbers" target-number="'. $targetnumber .'"><span class="number-color">' .$number . '</span> </div> <div class="numbers-text">' . $text .'</div> </div></div>';


		return $output;
	}
	add_shortcode('numbers', 'Theme2035_numbers');
}

function bubbles_child_scripts() {
	/* wp_enqueue_style( 'style-name', get_stylesheet_uri() ); */
	wp_enqueue_script( 'script-name', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'bubbles_child_scripts' );


if (!function_exists('Theme2035_one_whole_mobile')) {
	function Theme2035_one_whole( $atts, $content = null ) {		
	   return '<div class="col-lg-3 col-sm-6 col-xs-12 no-padding-bottom">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_whole_mobile', 'Theme2035_one_whole');
}


if (!function_exists('Theme2035_contact_icon')) {

	$c=1;

	function Theme2035_contact_icon( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon' => '',
			'title' => '',	
			'text' => ''	
	    ), $atts));	

		global $c;

		$output  = '';

		$output  .= '<div class="contact-box pos-center">';
		$output  .= '<div class="contact-icon color'.$c.' contact-icon">';
		$output  .= '<i class="fa fa-'.$icon.'"></i>';
		$output  .= '</div>';
		$output  .= '<h4 class="margint20">'.$title.'</h4>';
		$output  .= '<p>'.do_shortcode( $content).'</p>';
		$output  .= '</div>';       

		$c++;

		return $output;
	}
	add_shortcode('contact_icon', 'Theme2035_contact_icon');
}


?>