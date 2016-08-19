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


require_once( 'custom-vc/vc-integration.php');
require_once( 'inc/acf-wp-wysiwyg/acf-wp_wysiwyg.php' );
require_once( 'inc/acf-gallery/acf-gallery.php' );
require_once( 'inc/acf-flexible-content/acf-flexible-content.php' );
require_once( 'inc/acf-options-page/acf-options-page.php' );
require_once( 'inc/acf-repeater/acf-repeater.php' );
require_once( 'inc/acf-taxonomy-field/taxonomy-field.php' );


add_action( 'wpcf7_init', 'malaw_schedule_add_shortcode' );
 
function malaw_schedule_add_shortcode() {
    wpcf7_add_shortcode( 'mslaw_schedule', 'mslaw_schedule_shortcode_handler' ); // "clock" is the type of the form-tag
}
 
function mslaw_schedule_shortcode_handler( $tag ) {
    $output = "";
    $output .= "<ul>";

    for ($i=0; $i < 6; $i++) { 
      $output .= "<li>test ".$i . "</li>"; 
    }
    $output .= "</ul>";

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