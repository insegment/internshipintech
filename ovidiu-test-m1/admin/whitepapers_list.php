<?php 

  if (!isset($_SESSION["user_name"])) {
    die('Access forbidden.');
  } 
  require_once 'include/config.php';
  
  $conn = mysql_connect($db_host, $db_user, $db_pass);
  mysql_select_db($db_name, $conn);

  $result = mysql_query("SELECT * FROM whitepapers ORDER BY whitepaper_date DESC");
  
  while($row = mysql_fetch_array($result)) {
    
    echo "<tr data-id=" . $row['whitepaper_id'] . " class='whitepapers'>";
    echo "<td class='date'>" . date('m/d/Y', $row['whitepaper_date']) . "</td>";
    echo "<td class='article'><a href='" . $row['url'] . "' target='_blank'>" . $row['name'] . "</td>";
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