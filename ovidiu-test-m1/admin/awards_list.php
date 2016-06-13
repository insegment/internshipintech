<?php 

  if (!isset($_SESSION["user_name"])) {
    die('Access forbidden.');
  } 
  require_once 'include/config.php';
  
  $conn = mysql_connect($db_host, $db_user, $db_pass);
  mysql_select_db($db_name, $conn);

  $result = mysql_query("SELECT * FROM awards ORDER BY award_date DESC");
  
  while($row = mysql_fetch_array($result)) {
    
    echo "<tr data-id=" . $row['award_id'] . " class='awards'>";
    echo "<td class='date'>" . date('m/d/Y', $row['award_date']) . "</td>";
    echo "<td class='award'><a href='" . $row['url'] . "' target='_blank'>" . $row['name'] . "</td>";
    echo "<td class='source'>" . $row['a_source'] . "</td>";
    echo "<td class='actions'>
            <select id='actions' name='actions' class='form-control'>
              <option value='none'>-- Actions --</option>
              <option value='edit'>Edit</option>
              <option value='delete'>Delete</option>
            </select>
          </td>";
    
    echo "</tr>";
  }
?>