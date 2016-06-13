<?php

  function mysql_escape_mimic($inp) { 
      if(is_array($inp)) 
          return array_map(__METHOD__, $inp); 

      if(!empty($inp) && is_string($inp)) { 
          return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp); 
      } 

      return $inp; 
  } 
  
  /*
   * Function to get all articles
   */
  function get_all_articles() {

    $articles = array();
    $result = mysql_query("SELECT * FROM articles ORDER BY article_date DESC");

    while($row = mysql_fetch_array($result)) {
      
      $articles[] = $row;
      
    }
    
    return $articles;
  
  }
  /*
   * Function to get all articles
   */
  function get_all_whitepapers() {

    $articles = array();
    $result = mysql_query("SELECT * FROM whitepapers ORDER BY whitepaper_date DESC");

    while($row = mysql_fetch_array($result)) {
      
      $articles[] = $row;
      
    }
    
    return $articles;
  
  }   
  /*
   * Function to get all awards
   */

    function get_all_awards() {

    $awards = array();
    $result = mysql_query("SELECT * FROM awards ORDER BY award_date DESC");

    while($row = mysql_fetch_array($result)) {
      
      $awards[] = $row;
      
    }
    
    return $awards;
  
  }  


	/*
   * Function to get all articles
   */
  function get_all_quotes() {

    $articles = array();
    $result = mysql_query("SELECT * FROM quotes ORDER BY quote_date DESC");

    while($row = mysql_fetch_array($result)) {
      
      $articles[] = $row;
      
    }
    
    return $articles;
  
  }

	/*
   * Function to get all interviews
   */
  function get_all_interviews() {

    $articles = array();
    $result = mysql_query("SELECT * FROM interviews ORDER BY interview_date DESC");

    while($row = mysql_fetch_array($result)) {
      
      $articles[] = $row;
      
    }
    
    return $articles;
  
  }    



  /*
   * Getter for site settings
   * @string - string sent to be cleaned
   */
  function clean($string) {
    $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

    return preg_replace('/_+/', '_', $string); // Replaces multiple hyphens with single one.
  }
  
  /*
   * Getter for site settings
   * @name - parameter for setting name
   */
  function get_setting($name) {
    
    $value = '';
    
    $result = mysql_query("SELECT * from settings WHERE setting='$name'");
    if ($result === false) {
      
    } else {
      if (mysql_num_rows($result)) {
        $row = mysql_fetch_array($result);
        $value = $row['value'];
      }
    }
    
    return $value;
  }
  
  /*
   * Setter for site settings
   * @name - parameter for setting name
   * @value - parameter for setting value
   */
  function set_setting($name,$value) {
    mysql_query("UPDATE general_settings SET $name='$value'");
  }
  
  function get_settings() {
    
    $result = mysql_query("SELECT * FROM general_settings");
    $settings = mysql_fetch_array($result);
    
    return $settings;
  }
  
  
  
  
  
  
  
  
  
?>