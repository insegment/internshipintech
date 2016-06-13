<?php

/*-----------------------------------------------------------------------------------*/
/*	Clearfix
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_clearfix')) {
	function Theme2035_clearfix( $atts, $content = null ) {	
	   return '<div class="clearfix"></div>';
	}
	add_shortcode('clearfix', 'Theme2035_clearfix');
}


/*-----------------------------------------------------------------------------------*/
/*	Columns
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_container')) {
	function Theme2035_container( $atts, $content = null ) {	
	   return '<div class="container"><div class="row">' . do_shortcode($content) . '</div></div>';
	}
	add_shortcode('container', 'Theme2035_container');
}



if (!function_exists('Theme2035_one_half')) {
	function Theme2035_one_half( $atts, $content = null ) {		
	   return '<div class="col-lg-6 col-sm-6">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_half', 'Theme2035_one_half');
}


if (!function_exists('Theme2035_one_third')) {
	function Theme2035_one_third( $atts, $content = null ) {		
	   return '<div class="col-lg-4 col-sm-4">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third', 'Theme2035_one_third');
}

if (!function_exists('Theme2035_two_third')) {
	function Theme2035_two_third( $atts, $content = null ) {		
	   return '<div class="col-lg-8 col-sm-8">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_third', 'Theme2035_two_third');
}


if (!function_exists('Theme2035_one_fourth')) {
	function Theme2035_one_fourth( $atts, $content = null ) {		
	   return '<div class="col-lg-3 col-sm-6 col-xs-6">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fourth', 'Theme2035_one_fourth');
}


if (!function_exists('Theme2035_three_fourths')) {
	function Theme2035_three_fourths( $atts, $content = null ) {		
	   return '<div class="col-lg-9 col-sm-9">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('three_fourths', 'Theme2035_three_fourths');
}


if (!function_exists('Theme2035_one_sixth')) {
	function Theme2035_one_sixth( $atts, $content = null ) {		
	   return '<div class="col-lg-2 col-sm-4">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_sixth', 'Theme2035_one_sixth');
}

if (!function_exists('Theme2035_five_sixths')) {
	function Theme2035_five_sixths( $atts, $content = null ) {		
	   return '<div class="col-lg-10 col-sm-10">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('five_sixths', 'Theme2035_five_sixths');
}

if (!function_exists('Theme2035_one_whole')) {
	function Theme2035_one_whole( $atts, $content = null ) {		
	   return '<div class="col-lg-12 col-sm-12">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_whole', 'Theme2035_one_whole');
}

if (!function_exists('Theme2035_wrapper_div')) {
	function Theme2035_wrapper_div( $atts, $content = null ) {		
	   return '<div class="wrapper-div">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('wrapper_div', 'Theme2035_wrapper_div');
}




/*-----------------------------------------------------------------------------------*/
/*	About Box
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_about_box')) {
	$x = 1;
	function Theme2035_about_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon' => 'star',
			'title' => '',
	    ), $atts));	

		global $x;
	    

		$output = '';
		$output .= '<div class="about-box">';
		$output .= '<div class="col-lg-1 about-box-class col-sm-2">';
		$output .= '<div class="about-icon color'. $x .'">';
		$output .= '<i class="fa fa-'.$icon.'"></i>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '<div class="col-lg-11 about-box-title col-sm-10"><h4 class="margint10">'.$title.'</h4></div>';
		$output .= '<p>'. do_shortcode($content) .'</p>';
		$output .= '</div>';

		$x++;

		return $output;
	}
	add_shortcode('about_box', 'Theme2035_about_box');
}


/*-----------------------------------------------------------------------------------*/
/*	Button
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_button')) {
	function Theme2035_button( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'background' => '',
			'title' => '',
			'color' => '',
			'text_color' => '',
			'url' => '#more'
	    ), $atts));	

		$urla = substr($url,0,1);

		if($urla == "#" ){ $smooth = "smooth";  } else { $smooth = ""; }

		if( $background != "" ) {
		$output  =  '<div class="more-button margint30 clearfix"><a class="'. $smooth .'" style="color:'.$text_color.' !important" href="'. $url .'">'. $title .'</a></div>';
		}else{
		$output  =  '<div class="more-button-alternative margint30 clearfix " style="background: '. $color .'!important;  " ><a class="'.$smooth.'"  style="color:'.$text_color.' !important; " href="'. $url .'">'. $title .'</a></div>';

		}

		return $output;
	}
	add_shortcode('button', 'Theme2035_button');
}

/*-----------------------------------------------------------------------------------*/
/*	Small Title
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_small_title')) {
	function Theme2035_small_title( $atts, $content = null ) {

		$output  =  '';
		$output  .=  '<div class="small-title pos-center">';
		$output  .=   do_shortcode($content);
		$output  .=  '</div>';


		return $output;
	}
	add_shortcode('small_title', 'Theme2035_small_title');
}


/*-----------------------------------------------------------------------------------*/
/*	Skill Box
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_skill_box')) {

	$y=1;

	function Theme2035_skill_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'percent' => '',
			'color' => '',
	    ), $atts));	

		global $y;

		$output  =  '';
		$output  .=  '<div class="chart margint30">';
		$output  .=  '<div class="percentage'.$y.'" data-percent="'.$percent.'"><p>'.$percent.'%</p></div>';
		$output  .=  '<div class="skill-label margint20 pos-center">'. do_shortcode($content) .'</div>';
		$output  .=  '</div>';

		$y++;

		return $output;
	}
	add_shortcode('skill_box', 'Theme2035_skill_box');
}

/*-----------------------------------------------------------------------------------*/
/*	Home Text_Slider
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_home_text_slider')) {
	function Theme2035_home_text_slider( $atts, $content = null ) {

		$output  =  '';
		$output  .=  '<div class="pos-center home-slider">';
		$output  .=  '<ul class="slides">';
		$output  .=  do_shortcode($content);
		$output  .=  '</ul> ';
		$output  .=  '</div> ';


		return $output;
	}
	add_shortcode('home_text_slider', 'Theme2035_home_text_slider');
}

if (!function_exists('Theme2035_text_slider_item')) {
	function Theme2035_text_slider_item( $atts, $content = null ) {

		$output  =  '';
		$output  .=  '<li><h2>';
		$output  .=  do_shortcode( $content );
		$output  .=  '</h2></li>';

		return $output;
	}
	add_shortcode('text_slider_item', 'Theme2035_text_slider_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Text_Slider
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_text_slider')) {
	function Theme2035_text_slider( $atts, $content = null ) {

		$output  =  '';
		$output  .=  '<div class="text-slider pos-center">';
		$output  .=  '<ul class="slides">';
		$output  .=  do_shortcode($content);
		$output  .=  '</ul> ';
		$output  .=  '</div> ';


		return $output;
	}
	add_shortcode('text_slider', 'Theme2035_text_slider');
}



if (!function_exists('Theme2035_text_slider_item')) {
	function Theme2035_text_slider_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'percent' => '',
			'color' => '',
	    ), $atts));	

		$output  =  '';
		$output  .=  '<li><h2>';
		$output  .=  do_shortcode( $content );
		$output  .=  '</h2></li>';

		return $output;
	}
	add_shortcode('text_slider_item', 'Theme2035_text_slider_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Features Tabs
/*-----------------------------------------------------------------------------------*/
 
	               
function Theme2035_tab($atts, $content = null) {
    $GLOBALS['tab_count'] = 0;
	do_shortcode( $content );
	$d=1;
	if( is_array( $GLOBALS['tabs'] ) ){

		foreach( $GLOBALS['tabs'] as $tab ){

			if ( $tab['active']=="active"){ $active="active"; } else{ $active=""; }
			$tabs[] = '<div class="more-details-box '.$active.' "><div class="row"><div class="col-lg-2 col-sm-2 col-xs-2"><a href="#'.$tab['id'].'">
			<div class="colortext'.$d.'"> <i class="fa fa-'. $tab['icon'] .' font-color-2"></i></div> </a></div><div class="col-lg-10 col-sm-10 col-xs-10"><a href="#'.$tab['id'].'"><h3 class="font-Montserrat">'. $tab['title'] .'</h3></a><a href="#'.$tab['id'].'"><p class="margint10">'. $tab['desc'] .'</p></a></div></div></div>';

			if ( $tab['active']=="active"){
			$panes[] = '<div class="tab-pane tab-info fade in active" id="'.$tab['id'].'">'. $tab['content'] . '</div>';
			}else {  $panes[] = '<div class="tab-pane fade" id="'.$tab['id'].'">'. $tab['content'] . '</div>'; }
			$d++;
		}

		$return = '<div class="tab-content col-lg-6 col-sm-6">'.implode($panes).'</div><div class="features-tab col-lg-6 col-sm-6"><div class="tabbed-area tab-style1 margint30">'.implode( $tabs ).'</div></div>';
	}
	return $return;
}

add_shortcode('tab', 'Theme2035_tab');


function Theme2035_tab_item( $atts, $content ){
	extract(shortcode_atts(array( 'title' => '%d', 'id' => '%d', 'active' => '%d', 'icon' => '%d', 'color' => '%d', 'desc' => '%d'), $atts));
	
	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array(
		'title' => sprintf( $title, $GLOBALS['tab_count'] ),
		'content' =>  do_shortcode($content),
		'id' =>  $id,
		'active' =>  $active,
		'icon' =>  $icon,
		'desc' =>  $desc,
		 );
	
	$GLOBALS['tab_count']++;
}

add_shortcode( 'tab_item', 'Theme2035_tab_item' );

/*-----------------------------------------------------------------------------------*/
/*	Background Color
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_bcolor')) {
	function Theme2035_bcolor( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'color' => '#f5f5f5',
	    ), $atts));	

	   return  '<div style="background-color:'.$color.';" class="bcolor">'. do_shortcode($content) .'</div>';
	}
	add_shortcode('bcolor', 'Theme2035_bcolor');
}

/*-----------------------------------------------------------------------------------*/
/*	Image Box
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_image_box')) {
	function Theme2035_image_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'image' => '',
			'title' => '',
			'desc' => '',
	    ), $atts));	

		$output = '';
		$output .= '<div class="image-box pos-center">';
		$output .= '<img alt="" src="'.$image.'" class="img-responsive rsp-img-center" />';
		$output .= '<h3 class="margint20">'.$title.'</h3>';
		$output .= '<p class="margint10">'.$desc.'</p>';
		$output .= '</div>';


		return $output;
	}
	add_shortcode('image_box', 'Theme2035_image_box');
}

/*-----------------------------------------------------------------------------------*/
/*	Hire Us Text
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_hire_us_text')) {
	function Theme2035_hire_us_text( $atts, $content = null ) {

	   return  '<div class="title-hire">'. do_shortcode($content) .'</div>';

	}
	add_shortcode('hire_text', 'Theme2035_hire_us_text');
}

/*-----------------------------------------------------------------------------------*/
/*	Twitter
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_twitter')) {
	function Theme2035_twitter( $atts, $content = null ) {

	   return  Theme2035_tweet_out();

	}
	add_shortcode('twitter', 'Theme2035_twitter');
}            

/*-----------------------------------------------------------------------------------*/
/*	Price List
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_price_list')) {
	$e=1;
	$f=1;
	function Theme2035_price_list( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title' => 'Amazing Parallax',
			'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum odit dignissimos nam vero at?',
			'price' => '68$',
			'period' => '/ months',
			'button' => 'SELECT',
			'url' => '#',
	    ), $atts));	

		global $e;
		global $f;


		$urla = substr($url,0,1);

		if($urla == "#" ){ $smooth = "smooth";  } else { $smooth = ""; }		

		$output = '';

		$output .= '<div class="price-box pos-center margint40">';
		$output .= '<div class="price-list prc-bx-1 padb30 padt30">';
		$output .= '<h2>'. $title .'</h2>';
		$output .= '<div class="price-circle margint10">';
		$output .= '<p class="price colortext'.$e.'">'. $price .'</p>';
		$output .= '<p class="month">'. $period .'</p>';
		$output .= '</div>';
		$output .= '<ul class="margint10">';
		$output .= do_shortcode($content);
		$output .= '</ul>';
		$output .= '<a class="'. $smooth .' color'. $f .'" href="'.$url.'" data-original-title="" title="">'.$button.'</a>';
		$output .= '</div>';
		$output .= '</div>';

		$e++;
		$f++;

		return $output;

	}
	add_shortcode('price_list', 'Theme2035_price_list');
}



/*-----------------------------------------------------------------------------------*/
/*	Social Icon
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_social_icon')) {
	function Theme2035_social_icon( $atts, $content = null ) {
	   
	   return'<div class="social_icon_cont"><div class="social_icon pos-center"><ul class="margint20 marginb40">' . do_shortcode($content) . '</ul></div></div>';
	   
	}
	add_shortcode('social_icon', 'Theme2035_social_icon');
}

if (!function_exists('Theme2035_social_icon_item')) {
	function Theme2035_social_icon_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'social' => '',
			'username' => '',
	    ), $atts));

		if($social == "google-plus"){	
	   		return'<li class="pos-center"><div class="social-box '.$social.'-box"><a href="'.$username.'"><i class="fa fa-'.$social.'"></i><p>/'.$username.'</p></a></div></li>';
		}else{
			return'<li class="pos-center"><div class="social-box '.$social.'-box"><a href="http://'.$social.'.com/'.$username.'"><i class="fa fa-'.$social.'"></i><p>/'.$username.'</p></a></div></li>';
		}

	   
	}
	add_shortcode('social_icon_item', 'Theme2035_social_icon_item');
}

/*-----------------------------------------------------------------------------------*/
/*	Maps
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_map')) {
	function Theme2035_map( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon' => 'expand',
			'text' => 'EXPAND MAP'	
	    ), $atts));	

		$output  = '';

		$output .= '<div  class="map-wrapper">';
		$output .= '<div id="map" class="margint30"></div>';
		$output .= '<div class="expand-map"><a href="#"><i class="fa fa-'. $icon .'"></i> '. $text .' </a></div>';
		$output .= '</div>';

		return $output;
	}
	add_shortcode('map', 'Theme2035_map');
}


/*-----------------------------------------------------------------------------------*/
/*	Contact Icon
/*-----------------------------------------------------------------------------------*/

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

		$output  .= '<div class="contact-box pos-center margint40">';
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


/*-----------------------------------------------------------------------------------*/
/*	Right Icon
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_right_icon')) {
	function Theme2035_right_icon( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title' => '',	
			'desc' => ''	
	    ), $atts));	

		$output  = '';

		$output  .= '<div class="products-sample margint40">';
		$output  .= '<div class="container">';
		$output  .= '<div class="row">';
		$output  .= '<div class="col-lg-6 col-sm-6 margint20">';
		$output  .= '<h2>'. $title .'</h2>';
		$output  .= '<p>'.$desc.'</p>';
		$output  .= '</div>';       
		$output  .= '<div class="col-lg-6 col-sm-6 pos-center products-sample-icon">';
		$output  .= '<ul>';
		$output  .= do_shortcode( $content);      
		$output  .= '</ul>';      
		$output  .= '</div>';
		$output  .= '</div>';
		$output  .= '</div>';

		return $output;
	}
	add_shortcode('right_icon', 'Theme2035_right_icon');
}


/*-----------------------------------------------------------------------------------*/
/*	Right Icon Item
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_right_icon_item')) {

	$b=1;

	function Theme2035_right_icon_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon' => '',	
			'text' => ''	
	    ), $atts));	

		global $b;

		$output  = '';

		$output  .= '<li>';
		$output  .= '<div class="products-sample-gen color'.$b.'"><i class="fa fa-'. $icon .'"></i></div>';
		$output  .= '<h3>'. $text .'</h3>';
		$output  .= '</li>';

		$b++;

		return $output;
	}
	add_shortcode('right_icon_item', 'Theme2035_right_icon_item');
}





/*-----------------------------------------------------------------------------------*/
/*	Services Without icon
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_services_without_icon')) {
	function Theme2035_services_without_icon( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title' => '',		
			'button' => '',	
			'url' => ''	
	    ), $atts));	

		$output  = '';

		$urla = substr($url,0,1);

		if($urla == "#" ){ $smooth = "smooth";  } else { $smooth = ""; }

		$output  .= '<div class="services-withut-icn pos-center margint40">';
		$output  .= '<h2>'.$title.'</h2>';
		$output  .= '<p class="pos-center">'. do_shortcode( $content) .'</p>';
		$output  .= '<a class="'. $smooth .'" href="'. $url .'">'.$button.'</a>';
		$output  .= '</div>';



		return $output;
	}
	add_shortcode('services_without_icon', 'Theme2035_services_without_icon');
}



/*-----------------------------------------------------------------------------------*/
/*	Stats
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_stats')) {
	function Theme2035_stats( $atts, $content = null ) {

		$output  = '';


		$output  .= '<div class="some-stats animated-area margint20">';
		$output  .= '<ul>';
		$output  .= do_shortcode( $content );
		$output  .= '</ul>';
		$output  .= '</div>';


		return $output;
	}
	add_shortcode('stats', 'Theme2035_stats');
}


/*-----------------------------------------------------------------------------------*/
/*	Stats Item
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_stats_item')) {
	$r = 1;
	function Theme2035_stats_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon' => '',			
			'number' => '',	
			'targetnumber' => '',
			'text' => ''	
	    ), $atts));	

		global $r;

		$output  = '';


		$output  .= '<li>';
		$output  .= '<div class="some-stats-box color'.$r.'">';
		$output  .= '<i class="fa fa-'.$icon.'"></i>';
		$output  .= '</div>';
		$output  .= '<div class="stats-font"><span class="animated-numbers" target-number="'. $targetnumber .'"><span class="number-color">' .$number . '</span>  </span> '. $text  .'</div>';
		$output  .= '</li>';

		$r++;

		return $output;
	}
	add_shortcode('stats_item', 'Theme2035_stats_item');
}


/*-----------------------------------------------------------------------------------*/
/*	Numbers
/*-----------------------------------------------------------------------------------*/

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

		$output  .= '<div class="row mobile-numbers"><div class="stats-icon col-lg-4 col-sm-4"> <i class="fa fa-'. $icon .'"></i> </div><div class="stats-font col-lg-8 col-sm-8"><div class="animated-numbers big-numbers" target-number="'. $targetnumber .'"><span class="number-color">' .$number . '</span> </div> <div class="numbers-text">' . $text .'</div> </div></div>';


		return $output;
	}
	add_shortcode('numbers', 'Theme2035_numbers');
}

/*-----------------------------------------------------------------------------------*/
/*	Features Tabs
/*-----------------------------------------------------------------------------------*/

function Theme2035_big_tabs($atts, $content = null) {
    $GLOBALS['tab_countbig'] = 0;
	do_shortcode( $content );
	
	if( is_array( $GLOBALS['tabsbig'] ) ){

		foreach( $GLOBALS['tabsbig'] as $tab ){

			if ( $tab['active']=="active"){ $active="active"; } else{ $active=""; }
			$tabs[] = '<li class="'.$active.'"><a href="#'.$tab['id'].'">'.$tab['title'].'</a></li>';

			if ( $tab['active']=="active"){
			$panes[] = '<div class="tab-pane tab-info fade in active" id="'.$tab['id'].'">'. $tab['content'] . '</div>';
			}else {  $panes[] = '<div class="tab-pane fade" id="'.$tab['id'].'">'. $tab['content'] . '</div>'; }
		}

		$return = '<div class="features-tab"><div class="big-tabs pos-center tab-style1 margint30"><ul>'.implode( $tabs ).'</ul></div></div><div class="clearfix"></div><div class="tab-content big-tab-content margint20">'.implode($panes).'</div>';
	}

	return $return;
}


add_shortcode('big_tabs', 'Theme2035_big_tabs');


function Theme2035_big_tabs_item( $atts, $content ){
	extract(shortcode_atts(array( 'title' => '%d', 'id' => '%d', 'active' => '%d'), $atts));
	
	$x = $GLOBALS['tab_countbig'];
	$GLOBALS['tabsbig'][$x] = array(
		'title' => sprintf( $title, $GLOBALS['tab_countbig'] ),
		'content' =>  do_shortcode($content),
		'id' =>  $id,
		'active' =>  $active,
		 );
	
	$GLOBALS['tab_countbig']++;
}
add_shortcode( 'big_tabs_item', 'Theme2035_big_tabs_item' );


/*-----------------------------------------------------------------------------------*/
/*	Button
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_button_style')) {
	function Theme2035_button_style( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'color' => '',		
			'style' => '',		
			'icon' => '',
			'url' => '',
	    ), $atts));	

		$output  = '';

		$urla = substr($url,0,1);
	    if($urla == "#" ){ $smooth = "smooth";  } else { $smooth = ""; }


		if($icon != "" ){
		$output  .= '<a class="'. $smooth .'button-style-'. $style .'" style="background: '. $color .' !important;" href="'. $url .'"><i class="fa fa-'. $icon .'"></i>'. do_shortcode( $content) .'</a>';
		}else{

		$output  .= '<a class="'. $smooth .'button-style-'. $style .'" style="background: '. $color .' !important;" href="'. $url .'">'. do_shortcode( $content) .'</a>';

		}

		return $output;
	}
	add_shortcode('button_style', 'Theme2035_button_style');
}


/*-----------------------------------------------------------------------------------*/
/*	List
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_list_container')) {
	function Theme2035_list_container( $atts, $content = null ) {

		$output  = '';

		$output  .= '<div clas="list_styles"><ul>'. do_shortcode( $content ) .'</ul></div>';
		

		return $output;
	}
	add_shortcode('list', 'Theme2035_list_container');
}


/*-----------------------------------------------------------------------------------*/
/*	list item
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_list_item')) {
	function Theme2035_list_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon' => '',		
			'text' => '',
			'color' => '',
	    ), $atts));	

		$output  = '';

		$output  .= '<li><i style="color: '.$color.'" class="fa fa-'. $icon .'"></i><span style="margin-left:10px; margin-bottom:15px; display: inline-block;">'.$text.'</span></li>';
		

		return $output;
	}
	add_shortcode('list_item', 'Theme2035_list_item');
}


/*-----------------------------------------------------------------------------------*/
/*	Quotes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_quotes')) {
	function Theme2035_quotes( $atts, $content = null ) {

		$output  = '';

		$output  .= '<div class="quote-style margint40"><p>'. do_shortcode( $content ) .'</p></div> ';
		

		return $output;
	}
	add_shortcode('quotes', 'Theme2035_quotes');
}


/*-----------------------------------------------------------------------------------*/
/*	Dropcap
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_dropcap')) {
	function Theme2035_dropcap( $atts, $content = null ) {

		$output  = '';

		$output  .= '<p class="dropcap-style margint40">'. do_shortcode( $content ) .'</p>';
		

		return $output;
	}
	add_shortcode('dropcap', 'Theme2035_dropcap');
}


/*-----------------------------------------------------------------------------------*/
/*	Skills Bar
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_skill_bar')) {
	$a=1;
	function Theme2035_skill_bar( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title' => '',
			'percent' => '50',
	    ), $atts));	

		global $a;

		$output = '';
		$output .= '<div class="bar-box">';
		$output .= '<p>'.$title.'</p>';
		$output .= '<div class="progress margint5 ">';
		$output .= '<div class="progress-bar color'.$a.' animated-skills" style="width:'.$percent.'%;"></div>';
		$output .= '</div>';
		$output .= '</div>';

		$a++;

		return $output;

	}
	add_shortcode('skill_bar', 'Theme2035_skill_bar');
}

/*-----------------------------------------------------------------------------------*/
/*	Accordions
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_accordion')) {
	function Theme2035_accordion( $atts, $content = null ) {
		
		$output = '';
		$output .= '<div class="about-tabs">';
		$output .= '<div id="accordion">';
		$output .= do_shortcode($content);
		$output .= '</div>';
		$output .= '</div>';

		return $output;

	}
	add_shortcode('accordion', 'Theme2035_accordion');
}

/* Accordions Item */

if (!function_exists('Theme2035_accordion_item')) {
	$colid = 1;
	$panid = 1;
	function Theme2035_accordion_item( $atts, $content = null ) {
		extract(shortcode_atts(array(
		 'title' => '',
		 'active' => '',
		    ), $atts));	
		global $colid;
		global $panid;
		$output = '';

		$active = strtolower($active);
		if( $active == "yes" ){ $in="in cllpse-active"; $active = "cllpse-active";  } else { $in="collapse"; }


		$output .= '<div class="panel panel-bubbles '.$active.'">';
		$output .= '<div class="panel-style1">';
		$output .= '<div class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$colid++.'"><i class="fa fa-angle-down"></i><span style="padding-left:10px;">'.$title.'</span></a></div>';
		$output .= '</div>';
		$output .= '<div id="collapse'.$panid++.'" class="collapse-bubbles '.$in.'">';
		$output .= '<div class="pad5">';	
		$output .=  do_shortcode($content);
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';

		return $output;

	}
	add_shortcode('accordion_item', 'Theme2035_accordion_item');
}


/*-----------------------------------------------------------------------------------*/
/*	Contact Form Area
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_contact_form')) {
	function Theme2035_contact_form( $atts, $content = null ) {
		$output = '';


		$output .= "<div class='contact'>";
		$output .= do_shortcode($content);
		$output .= "</div>";

		return $output;

	}
	add_shortcode('contact_form', 'Theme2035_contact_form');
}


/*-----------------------------------------------------------------------------------*/
/*	Space
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_space')) {
	function Theme2035_space( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'space' => '',
	    ), $atts));	

	   return  '<div style="padding-top:'.$space.'%;" class="mobile-hide"></div>';
	}
	add_shortcode('space', 'Theme2035_space');
}

/*-----------------------------------------------------------------------------------*/
/*	Space
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_parallax')) {
	function Theme2035_parallax( $atts, $content = null ) {
	   return  '<div style="padding-top:30px; padding-bottom:30px;"></div>';
	}
	add_shortcode('parallax', 'Theme2035_parallax');
}

/*-----------------------------------------------------------------------------------*/
/*	Title Underline
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_underline')) {
	function Theme2035_underline( $atts, $content = null ) {	
		extract(shortcode_atts(array(
			'title' => 'title',
			'icon' => 'star',
	    ), $atts));	

	   $output = "";
	   	        
	   $output .= '<div class="title-underline clearfix">';
	   $output .= '<h2 class="pos-center">'. $title .'</h2>';
	   $output .= '</div>';
	   $output .= '<div class="alt-seperator margint20 clearfix">';
	   $output .= '<hr class="pull-left alt-line-one" />';
	   $output .= '<i class="pull-left fa fa-'. $icon .'"></i>';
	   $output .= '<hr class="pull-left alt-line-one" />';
	   $output .= '</div>';

	   return $output;
	}
	add_shortcode('underline', 'Theme2035_underline');
}

/*-----------------------------------------------------------------------------------*/
/*	Call-to-action
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_call_to_action')) {
	function Theme2035_call_to_action( $atts, $content = null ) {	
		extract(shortcode_atts(array(
			'button_text' => 'Buy Now Bubbles',
			'url' => '#',
	    ), $atts));	

		$urla = substr($url,0,1);
	    if($urla == "#" ){ $smooth = "smooth";  } else { $smooth = ""; }

	   $output = "";
	   	        
	   $output .= '<div class="container margint40 ctb animated-area">';
	   $output .= '<div class="row click-to-buy">';
	   $output .= '<div class="col-lg-6 col-sm-6 col-xs-12 click-to-buy-text">';
	   $output .= '<p class="margint40 marginb40">'. do_shortcode( $content ) .'</p> ';
	   $output .= '</div>';
	   $output .= '<div class="col-lg-6 col-sm-6 col-xs-12 ctb_button">';
	   $output .= '<div class="animated" data-animation="pulse" data-animation-delay="1.6s"> <a class="'.$smooth.'" href="'.$url.'">'. $button_text .'</a></div>';
	   $output .= '</div>';
	   $output .= '</div>';
	   $output .= '</div>';

	   return $output;
	}
	add_shortcode('call_to_action', 'Theme2035_call_to_action');
}



/*-----------------------------------------------------------------------------------*/
/*	Animation
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_animation_container')) {
	function Theme2035_animation_container( $atts, $content = null ) {

		$output = '';
		$output .= '<div class="animated-area">'. do_shortcode($content) .'</div>';


		return $output;
	}
	add_shortcode('animation_container', 'Theme2035_animation_container');
}


/*-----------------------------------------------------------------------------------*/
/*	Animation Type
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_animation')) {
	function Theme2035_animation( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'type' => 'fadeInDown',
			'delay' => '0.6s',
	    ), $atts));	

		$output = '';
		$output .= '<div class="animated" data-animation="'. $type .'" data-animation-delay="'. $delay .'"> '. do_shortcode($content) .'</div>';


		return $output;
	}
	add_shortcode('animation', 'Theme2035_animation');
}





/*-----------------------------------------------------------------------------------*/
/*	Home Splash
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_home_splash')) {
	function Theme2035_home_splash( $atts, $content = null ) {

		$output = '';
		$output .= '<p class="home-splash">' . do_shortcode( $content ) . '</p>';



		return $output;
	}
	add_shortcode('home_splash', 'Theme2035_home_splash');
}


/*-----------------------------------------------------------------------------------*/
/*	Home Splash
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Theme2035_home_button')) {
	function Theme2035_home_button( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'buttontext' => 'Try Us',
			'buttonlink' => '#about',
			'alternative_text' => 'learn more',
			'alternative_link' => '#more',
	    ), $atts));	

		$urla = substr($alternative_link,0,1);
	    if($urla == "#" ){ $smooth = "smooth";  } else { $smooth = ""; }
		
		$furla = substr($alternative_link,0,1);
	    if($furla == "#" ){ $fsmooth = "smooth";  } else { $fsmooth = ""; }	    

		$output = '';
   		$output .= '<p class="margint80"><a class="try-button '. $smooth .'" href="'. $buttonlink .'">'. $buttontext .'</a></p>';
		$output .= '<p class="l-more">or <a href="'. $alternative_link .'" class="'.$fsmooth.'">'. $alternative_text .'</a></p>';



		return $output;
	}
	add_shortcode('home_button', 'Theme2035_home_button');
}


   


                             
                     

?>