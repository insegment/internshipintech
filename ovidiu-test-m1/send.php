<?php

  require 'admin/include/config.php';
  require 'admin/include/functions.php';
  
  $conn = mysql_connect($db_host, $db_user, $db_pass);
  mysql_select_db($db_name, $conn);
  
  $settings = get_settings();

  $headers = 'From: <no-reply@kesler.net>' . "\r\n";

  $name = ($_POST['full_name'] ? $_POST['full_name'] : '');
  $subject = ($_POST['subject'] ? $_POST['subject'] : '');
  $email = ($_POST['email'] ? $_POST['email'] : '');
  $message = ($_POST['message'] ? $_POST['message'] : '');
  date_default_timezone_set('America/Detroit');

  
  if ($email != '') {
    $mailBody = "Name: " . $name . "\n";
		$mailBody .= "Email: " . $email . "\n";
    $mailBody .= "Subject: " . $subject . "\n";
    $mailBody .= "Message: " . $message . "\n";
    $mailBody .= "Submission Date: ";
    $mailBody .= date("F j, Y, g:i a") . "\n"; 
    $mailBody .= "IP address: " . $_SERVER['REMOTE_ADDR']; 

    //mail('kesler@kesler.net,kesler@insegment.com,backupleads.insegment@gmail.com', 'Kesler.net - Contact Form Submission', $mailBody, $headers);
		mail($settings['email_to'], 'Kesler.net - Contact Form Submission', $mailBody, $headers);
  }
  
  Header("Location: thank-you.php");







	
	


	
?>
