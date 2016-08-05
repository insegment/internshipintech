<?php

extract( shortcode_atts( array(
			'el_class' => '',
			'style' => 'true',
			'color' => '#141414',
			"size" => '30',
			'font_weight' => 'normal',
			'margin_bottom' => '20',
			'txt_transform' => '',
			'letter_spacing' => '',
			'margin_top' => '0',
			"align" => 'left',
			'tag_name' => 'h1',
			'font_style' => 'inherit',
			'visibility' => ''
), $atts ) );
$id = uniqid();
$output = '';
$span_padding = '';
$force_responsive = ($size > 35) ? ' mk-force-responsive' : '';

$echo_output = wpb_js_remove_wpautop( $content );

$letter_spacing = ($letter_spacing != '') ? ('letter-spacing:'.$letter_spacing.'px;') : '';
$txt_transform = ($txt_transform != '') ? ('text-transform:'.$txt_transform.';') : '';
$output .= '<'.$tag_name.' style="font-size: '.$size.'px;text-align:'.$align.';color: '.$color.';font-style:'.$font_style.';font-weight:'.$font_weight.';padding-top:'.$margin_top.'px;padding-bottom:'.$margin_bottom.'px; '.$txt_transform.$letter_spacing.'" id="fancy-title-'.$id.'" class="mk-shortcode '.$visibility.' mk-fancy-title fancy-title-align-'.$align.$force_responsive.' '.$el_class.'"><span style="'.$span_padding.'">';
$output .= $echo_output;
$output .= '</span></'.$tag_name.'><div class="clearboth"></div>';

echo $output;
