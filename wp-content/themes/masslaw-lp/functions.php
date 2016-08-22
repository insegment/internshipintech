<?php
/*
*	Functions file
*/

function masslaw_setup() {
	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 130,
		'width'       => 714,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'masslaw_setup' );

function masslaw_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'masslaw-bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'masslaw-style', get_stylesheet_uri() );

	// Font Family

	wp_enqueue_style( 'masslaw_font' , 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i');

	// Font Awesome

	wp_enqueue_script( 'font_awesome',  'https://use.fontawesome.com/63484f725a.js', array( 'jquery' ), null, true );

}
add_action( 'wp_enqueue_scripts', 'masslaw_scripts' );

define( 'ACF_LITE', true );

require_once( 'custom-vc/vc-integration.php');

include_once('inc/advanced-custom-fields/acf.php');

require_once( 'inc/acf-wp-wysiwyg/acf-wp_wysiwyg.php' );
require_once( 'inc/acf-gallery/acf-gallery.php' );
require_once( 'inc/acf-flexible-content/acf-flexible-content.php' );
require_once( 'inc/acf-options-page/acf-options-page.php' );
require_once( 'inc/acf-repeater/acf-repeater.php' );
require_once( 'inc/acf-taxonomy-field/taxonomy-field.php' );


require_once( 'inc/acf-fields.php' );


function malaw_acf_options_page_settings( $settings )
{
  $settings['title'] = 'Site Settings';
  //$settings['pages'] = array('General', 'Scripts', 'Archives', 'Careers', 'Locations', 'Forms');
  $settings['pages'] = array('General');

  return $settings;
}

add_filter('acf/options_page/settings', 'malaw_acf_options_page_settings');



add_action( 'wpcf7_init', 'malaw_schedule_add_shortcode' );
 
function malaw_schedule_add_shortcode() {
    wpcf7_add_shortcode( 'mslaw_schedule', 'mslaw_schedule_shortcode_handler' , true); 
}
 
add_filter( 'wpcf7_special_mail_tags', 'custom_mail_tag', 10, 3 );

function custom_mail_tag( $output, $name, $html ) {
  $name = preg_replace( '/^wpcf7\./', '_', $name ); // for back-compat

  $submission = WPCF7_Submission::get_instance();

  if ( ! $submission ) {
    return $output;
  }

  if ('_mslaw_schedule' == $name) {
    $output = $submission->get_posted_data('mslaw_schedule');
  }

  return $output;
}


function mslaw_schedule_shortcode_handler( $tag ) {
	$tag = new WPCF7_Shortcode( $tag );
	$first['value'] = $tag->values;
	$first['label'] = $tag->labels;
	$class = $tag->get_class_option(  );
	$id = $tag->get_id_option();
	$tagName = $tag->name;
	$output = "";
	if(get_field('mslaw_schedule_list', 'option')):
		$output .= '<span class="wpcf7-form-control-wrap '.$tagName.'"><select id="'.$id.'" name="'.$tagName.'" class="wpcf7-form-control wpcf7-select  '.$class.'">';
		if( isset( $first ) && !empty( $first ) ){
			$output .= '<option selected value="' . htmlentities( $first['value'][0] ) . '">' . $first['label'][0] . '</option>';
		}
		while(has_sub_field('mslaw_schedule_list', 'option')):
			$semester = get_sub_field('mslaw_schedule_list_semester');
			$output .= '<option value="' . $semester . '">'. $semester .'</option>';
		endwhile;
		$output .= "</select></span>";
	endif;
	return $output;
}



  function httpPost($url,$params) {
    $postData = '';
     //create name value pairs seperated by &
     foreach($params as $k => $v) 
     { 
        $postData .= $k . '='.$v.'&'; 
     }
     rtrim($postData, '&');

      $ch = curl_init();  

      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch,CURLOPT_HEADER, false); 
      curl_setopt($ch,CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
      curl_setopt($ch, CURLOPT_POST, count($postData));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

      $output=curl_exec($ch);

      curl_close($ch);
      return $output;

  }



add_action("wp_ajax_sendphp", "masslaw_sendphp");
add_action("wp_ajax_nopriv_sendphp", "masslaw_sendphp");

function masslaw_sendphp( ){

  $address = $_POST['q8_address8'];
  $work_number = $_POST['q10_workNumber'];
  $home_number = $_POST['q13_homeNumber13'];
  
  $params = array(
      "q1_firstName" => $_POST['q1_firstName'],
      "q3_middleInitial" => $_POST['q3_middleInitial'],
      "q4_lastName" => $_POST['q4_lastName'],
      "q5_title" => $_POST['q5_title'],
      "q8_address8[addr_line1]" => $address['addr_line1'],
      "q8_address8[addr_line2]" => $address['addr_line2'],
      "q8_address8[city]" => $address['city'],
      "q8_address8[state]" => $address['state'],
      "q8_address8[postal]" => $address['postal'],
      "q8_address8[country]" => $address['country'],
      "q10_workNumber[area]" => $work_number['area'],
      "q10_workNumber[phone]" => $work_number['phone'],
      "q13_homeNumber13[area]" => $home_number['area'],
      "q13_homeNumber13[phone]" => $home_number['phone'],
      "q17_email17" => $_POST['q17_email17'],
      "q12_semesterOf" => $_POST['q12_semesterOf'],
      "q14_openHouse" => $_POST['q14_openHouse'],
      "q16_ifOther" => $_POST['q16_ifOther'],
      "simple_spc" => $_POST['simple_spc'],
      "q32_clickTo" => $_POST['q32_clickTo'],
  );

 // echo httpPost("http://submit.jotformpro.com/submit/43066178792969/", $params);

  // set mail headers
  $headers = 'From: <no-reply@mslaw.com>' . "\r\n";
  
  $headers_different = 'From: <no-reply@mslaw.com>' . "\r\n";
  
  // get form values
  $fname = ($_POST['q1_firstName'] ? $_POST['q1_firstName'] : '');
  $minitial = ($_POST['q3_middleInitial'] ? $_POST['q3_middleInitial'] : '');
  $lname = ($_POST['q4_lastName'] ? $_POST['q4_lastName'] : '');
  $title = ($_POST['q5_title'] ? $_POST['q5_title'] : '');
  $addr1 = $address['addr_line1'];
  $addr2 = $address['addr_line2'];
  $city = $address['city'];
  $state = $address['state'];
  $postal = $address['postal'];
  $country = $address['country'];
  $wnumber = $work_number['area'] . " " . $work_number['phone'];
  $hnumber = $home_number['area'] . " " . $home_number['phone'];
  $email = ($_POST['q17_email17'] ? $_POST['q17_email17'] : '');
  $semester = ($_POST['q12_semesterOf'] ? $_POST['q12_semesterOf'] : '');
  $attendace = ($_POST['q14_openHouse'] ? $_POST['q14_openHouse'] : '');
  $other = ($_POST['q16_ifOther'] ? $_POST['q16_ifOther'] : '');
  $lead_source = ($_POST['lead-source'] ? $_POST['lead-source'] : "");
  
  // set timezone
  date_default_timezone_set('America/Detroit');
  
  // finally check if email is not empty and send it
  if ($email != '') {
    $mailBody = "First Name: " . $fname . "\n";
    $mailBody .= "Middle Initial: " . $minitial . "\n";
    $mailBody .= "Last Name: " . $lname . "\n";
    $mailBody .= "Title: " . $title . "\n\n";
    $mailBody .= "Address \n";
    $mailBody .= "Street Address: " . $addr1 . "\n";
    $mailBody .= "Street Address Line 2: " . $addr2 . "\n";
    $mailBody .= "City: " . $city ."\n";
    $mailBody .= "State: " . $state ."\n";
    $mailBody .= "Postal / Zip Code: " . $postal ."\n";
    $mailBody .= "Country: " . $country ."\n\n";
    $mailBody .= "Work Number: " . $wnumber ."\n";
    $mailBody .= "Home Number: " . $hnumber ."\n";
    $mailBody .= "Email: " . $email ."\n";
    $mailBody .= "Semester of desired enrollment: " . $semester ."\n";
    $mailBody .= "Open House Attendance Dates: " . $attendace . "\n";
    $mailBody .= "If Other: " . $other . "\n\n";
    $mailBody .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
    $mailBody .= "Submission Date: ";
    $mailBody .= date("F j, Y, g:i a"); 
	$mailBody .= "\n Lead Source: ". $lead_source;
    
    wp_mail('developer.insegment@gmail.com', 'MASS Difference LP - Open House Lead', $mailBody, $headers);
    wp_mail('leadgen@insegment.com', 'MASS Difference LP - Open House Lead', $mailBody, $headers);
    wp_mail('backupleads.insegment@gmail.com', 'MASS LP - Difference Lead', $mailBody, $headers);

//    mail('mslaw@mslaw.edu', 'MASS LP - Difference Lead', $mailBody, $headers_different);
  }
  die();
}


if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_schedule',
    'title' => 'Schedule',
    'fields' => array (
      array (
        'key' => 'field_57b717a94c478',
        'label' => 'Schedule list',
        'name' => 'mslaw_schedule_list',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_57b717b24c479',
            'label' => 'Semester',
            'name' => 'mslaw_schedule_list_semester',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_57b718034c47a',
            'label' => 'Schedule Dates List',
            'name' => 'mslaw_schedule_dates_list',
            'type' => 'repeater',
            'column_width' => '',
            'sub_fields' => array (
              array (
                'key' => 'field_57b718684c47b',
                'label' => 'Schedule Date',
                'name' => 'mslaw_schedule_date',
                'type' => 'text',
                'column_width' => '',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
              ),
            ),
            'row_min' => '',
            'row_limit' => '',
            'layout' => 'table',
            'button_label' => 'Add New Date',
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'table',
        'button_label' => 'Add New Semester',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-general',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
