<?php  
  include 'functions.php';

  $handler = (isset($_POST['method']) ? $_POST['method'] : '');
  switch ($handler) {
    case 'deleteArticle':
      deleteArticle();
      break;
    case 'addArticle':
      addArticle();
      break;
		case 'deleteWhitepaper':
      deleteWhitepaper();
      break;
    case 'addWhitepaper':
      addWhitepaper();
      break;
		case 'deleteQuote':
      deleteQuote();
      break;
    case 'addQuote':
      addQuote();
      break;
		case 'deleteInterviews':
      deleteInterviews();
      break;
    case 'addInterview':
      addInterview();
      break;
    case 'deleteAwards':
      deleteAwards();
      break;
    case 'addAward':
      addAward();
      break;
  }
  
  function escape_string($string){
    $tmp = str_replace("'", "\'", $string);
    
    return $tmp;
  }
  

		
	function addInterview() {
    require_once 'config.php';
		$sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
		$targetPath = $_SERVER['DOCUMENT_ROOT']."/img/uploads/".$_FILES['image']['name']; // Target path where file is to be stored
		move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
    
		$date = (isset($_POST['date']) ? strtotime($_POST['date']) : '');
    $name = (isset($_POST['name']) ? $_POST['name'] : '');
    $name = mysql_escape_mimic($name);
    $url = (isset($_POST['url']) ? $_POST['url'] : '');
    $url = mysql_escape_mimic($url);
		$img = "img/uploads/".$_FILES['image']['name'];
   


		if (($date != '') && ($name != '') && ($url != '') ) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      mysqli_query($con, "INSERT INTO interviews(interview_date,name,url,a_source) VALUES ('$date','$name','$url','$img')");
      mysqli_close($con);
      
    }
  }  
		  // Add Articles

	
  function addArticle() {
    require_once 'config.php';
    
    $date = (isset($_POST['date']) ? strtotime($_POST['date']) : '');
    $name = (isset($_POST['name']) ? $_POST['name'] : '');
    $name = mysql_escape_mimic($name);
    $url = (isset($_POST['url']) ? $_POST['url'] : '');
    $url = mysql_escape_mimic($url);
    $source = (isset($_POST['source']) ? $_POST['source'] : '');
    $source = mysql_escape_mimic($source);
    
    if (($date != '') && ($name != '') && ($url != '') && ($source != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      mysqli_query($con, "INSERT INTO articles(article_date,name,url,a_source) VALUES ('$date','$name','$url','$source')");
      mysqli_close($con);
      
    }
  }  
	  
		
		  // Add Whitepapers

	
	function addWhitepaper() {
    require_once 'config.php';
    
    $date = (isset($_POST['date']) ? strtotime($_POST['date']) : '');
    $name = (isset($_POST['name']) ? $_POST['name'] : '');
    $name = mysql_escape_mimic($name);
    $url = (isset($_POST['url']) ? $_POST['url'] : '');
    $url = mysql_escape_mimic($url);
    $source = (isset($_POST['source']) ? $_POST['source'] : '');
    $source = mysql_escape_mimic($source);
    
    if (($date != '') && ($name != '') && ($url != '') && ($source != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      mysqli_query($con, "INSERT INTO whitepapers(whitepaper_date,name,url,a_source) VALUES ('$date','$name','$url','$source')");
      mysqli_close($con);
      
    }
  }
 	  // Add Quotes

	function addQuote() {
    require_once 'config.php';
    
    $date = (isset($_POST['date']) ? strtotime($_POST['date']) : '');
    $name = (isset($_POST['name']) ? $_POST['name'] : '');
    $name = mysql_escape_mimic($name);
   /*  $url = (isset($_POST['url']) ? $_POST['url'] : '');
    $url = mysql_escape_mimic($url); */
    $source = (isset($_POST['source']) ? $_POST['source'] : '');
    $source = mysql_escape_mimic($source);
    
    if (($date != '') && ($name != '')  && ($source != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      mysqli_query($con, "INSERT INTO quotes(quote_date,name,a_source) VALUES ('$date','$name','$source')");
      mysqli_close($con);
      
    }
  }

  // Add Awards
    function addAward() {
    require_once 'config.php';
    
    $date = (isset($_POST['date']) ? strtotime($_POST['date']) : '');
    $name = (isset($_POST['name']) ? $_POST['name'] : '');
    $name = mysql_escape_mimic($name);
    $url = (isset($_POST['url']) ? $_POST['url'] : '');
    $url = mysql_escape_mimic($url);
    $source = (isset($_POST['source']) ? $_POST['source'] : '');
    $source = mysql_escape_mimic($source);
    
    if (($date != '') && ($name != '') && ($url != '') && ($source != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      mysqli_query($con, "INSERT INTO awards(award_date,name,url,a_source) VALUES ('$date','$name','$url','$source')");
      mysqli_close($con);
      
    }
  }  
      // Delete Articles

  function deleteArticle() {
    require_once 'config.php';
    
    $id = (isset($_POST['post_id']) ? ($_POST['post_id']) : '');
    
    if (($id != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      // delete article from db
      $sql = "DELETE FROM articles WHERE article_id='$id'";
      if ($con->query($sql) === TRUE) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . $con->error;
      }
      
      $con->close();
      
    }
    
  }
    // Delete Quotes

  function deleteQuote() {
    require_once 'config.php';
    
    $id = (isset($_POST['post_id']) ? ($_POST['post_id']) : '');
    
    if (($id != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      // delete article from db
      $sql = "DELETE FROM quotes WHERE quote_id='$id'";
      if ($con->query($sql) === TRUE) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . $con->error;
      }
      
      $con->close();
      
    }
    
  }
  // Delete Whitepapers

	function deleteWhitepaper() {
    require_once 'config.php';
    $id = (isset($_POST['post_id']) ? ($_POST['post_id']) : '');

    if (($id != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      // delete article from db
      $sql = "DELETE FROM whitepapers WHERE whitepaper_id='$id'";
      if ($con->query($sql) === TRUE) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . $con->error;
      }
      
      $con->close();
      
    }
    
  }

  // Delete Interviews

  function deleteInterviews() {
    require_once 'config.php';
    
    $id = (isset($_POST['post_id']) ? ($_POST['post_id']) : '');
    
    if (($id != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      // delete article from db
      $sql = "DELETE FROM interviews WHERE interview_id='$id'";
      if ($con->query($sql) === TRUE) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . $con->error;
      }
      
      $con->close();
      
    }
    
  }


  // Delete Award
   function deleteAwards() {
    require_once 'config.php';
    
    $id = (isset($_POST['post_id']) ? ($_POST['post_id']) : '');
    
    if (($id != '')) {
      
      $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      if (mysqli_connect_errno()) {
             echo 'Failed to connect to database: ' . mysqli_connect_error();
      }

      // delete article from db
      $sql = "DELETE FROM awards WHERE award_id='$id'";
      if ($con->query($sql) === TRUE) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . $con->error;
      }
      
      $con->close();
      
    }
    
  }

  
  function compare() {
    require_once 'config.php';
    
    $list_name = ($_POST['list_name'] ? $_POST['list_name'] : '');
//    $compare_to = ($_POST['compare_to'] ? $_POST['compare_to'] : '');
    $comparison = array();
    
    $conn = mysql_connect($db_host, $db_user, $db_pass);
    mysql_select_db($db_name, $conn);
    
    $all_lists = mysql_query("SELECT list_name FROM active_lists");
    $output = "<tr>
                  <th>List</th>
                  <th></th>
                  <th>Compared to</th>
                  <th># Common Entries</th>
                  <th>Actions</th>
              </tr>";
    
    if ($all_lists) {
      while($row = mysql_fetch_array($all_lists)) {
        $current_list = $row['list_name'];
        if ($current_list != $list_name) {
//          SELECT *
//          FROM (select * from test group by email) as t1
//          INNER JOIN (select * from testme group by email) as t2
//          ON t1.email=t2.email;
//          $compare_q = mysql_query("SELECT COUNT(*)
//                                    FROM $list_name 
//                                    WHERE email in (SELECT email FROM $current_list)");
          $compare_q = mysql_query("SELECT COUNT(*)
                                    FROM (select * from $list_name group by email) as t1
                                    INNER JOIN (select * from $current_list group by email) as t2
                                    ON t1.email=t2.email;");
          if (mysql_num_rows($compare_q)) {
            $row_comp = mysql_fetch_array($compare_q);
            $comparison[$current_list] = $row_comp["COUNT(*)"];
            $output .= "<tr>";
            $output .= "<td>$list_name</td>";
            $output .= "<td><i class='fa fa-arrows-h'></i></td>";
            $output .= "<td>$current_list</td>";
            $output .= "<td>$comparison[$current_list]</td>";
            $output .= "<td>@todo</td>";
            $output .= "</tr>";
          }
        }
      }
    }
    
    echo json_encode($output);
//    echo $output;
  }
  
?>
