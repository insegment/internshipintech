<?php
$output = $el_class = $style = '';
extract(shortcode_atts(array(
	'fullwidth' => 'false',
	'id' => '',
	'visibility' => '',
	'css' => '',
	'background_color' => '',
    'el_class' => '',
    'border_activate' => '',
    'border_color' => '#000', 
    'border_size' => '0'
), $atts));

//wp_enqueue_script( 'wpb_composer_front_js' );

if( $background_color || $border_activate ){
	$style .= " style= '";

	if( !empty($background_color) ){
		$style .= "background-color: ". $background_color."; ";
	}
	if( !empty($border_activate) ){
		$style .= "border-style: solid; ";
		$style .= "border-color: ".$border_color."; ";
		$style .= "border-width: ".$border_size."px; ";
		$style .= "border-left: none; ";
		$style .= "border-right: none; ";

	}

	$style .= "'";

}
//$background_color = !empty($background_color) ? ( 'style="background-color:'.$background_color.'"' ) : '';
$fullwidth_start = $output = $fullwidth_end = '';

$id = !empty($id) ? (' id="'.$id.'"') : '';


if($fullwidth != 'true') {
	$el_class = !empty($el_class) ? ( "class = '".$el_class."'" ) : "";
	$fullwidth_start = '<div '.$style.' '.$el_class.' ><div class="container" >';
		
	$fullwidth_end = "</div></div>";	
}else{

	$fullwidth_start = '<div class="container-fluid '.$el_class.'" '.$style.'>';
		
	$fullwidth_end = "</div>";	
}

$output .= $fullwidth_start . '<div'.$id.' class="wpb_row vc_row  vc_row-fluid '.$visibility.' mk-fullwidth-'.$fullwidth.'  '. get_row_css_class(). vc_shortcode_custom_css_class( $css, ' ' ).'">';
$output .= wpb_js_remove_wpautop($content);
$output .= '</div>'.$fullwidth_end . $this->endBlockComment('row');
echo $output;
