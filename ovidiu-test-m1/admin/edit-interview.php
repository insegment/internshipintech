<?php
  require_once 'include/config.php';
  require_once 'include/functions.php';
  session_start();
  include 'header.php';
  if (!isset($_SESSION["user_name"])) {
    die('Access forbidden.');
  } 
  
  if (count($_GET) > 0) {
    $id = (isset($_GET['id']) ? $_GET['id'] : '');

    $conn = mysql_connect($db_host, $db_user, $db_pass);
    mysql_select_db($db_name, $conn);

    if (count($_POST) > 0) {
      $date = strtotime($_POST['date']);
      $name = mysql_escape_mimic($_POST['name']);
      $url = $_POST['url'];
      
      
      if ($date != '' && $name != '' && $url != '' ) {
				$sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = $_SERVER['DOCUMENT_ROOT']."/img/uploads/".$_FILES['image']['name']; // Target path where file is to be stored
				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
				$img = "img/uploads/".$_FILES['image']['name'];
        mysql_query("UPDATE interviews SET interview_date='$date',name='" . $name ."',url='$url',a_source='" . $img . "' WHERE interview_id='$id'");
        $alert['message'] = "Successfully edited entry <em>" . $_POST['name'] . "</em>.";
        $alert['type'] = "success";
      } else {
        $alert['message'] = "Could not edit. Please insert valid values.";
        $alert['type'] = "danger";
      }
      
    }
    
    $result = mysql_query("SELECT * FROM interviews WHERE interview_id='$id'");
    $row = mysql_fetch_array($result);
  }
?>

<section class="content-header">
    <h1>
        Article
        <small>Edit <?php echo $row['name']; ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="articles.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Articles List</li>
    </ol>
</section>

<section class="content">
  <div class="row first-row">
    <?php if (isset($alert) && sizeof($alert) > 0) :?>
      <div class="col-md-12">
        <div class="alert alert-dismissable alert-<?php echo $alert["type"]; ?>">
          <i class="fa fa-check"></i>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <?php echo $alert["message"]; ?>
        </div>
      </div>
    <?php endif; ?>
  </div><!-- end row -->
  <div class="row">
    <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header">
              <h3 class="box-title">Edit article: <em><?php echo $row['name']; ?></em></h3>
          </div>
          <form method="post" action="" id="edit-interview"  enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-item item-article-date form-group">
                <label for="add_date">Article Date</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" id="add_date" name="date" class="form-control" value="<?php echo date("m/d/Y",$row['interview_date']); ?>" data-provide="datepicker">
                </div>
              </div>
              <div class="form-item item-article-name form-group">
                <label for="add_name">Article Name</label>
                <input type="text" id="add_name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" class="form-control">
              </div>
              <div class="form-item item-article-url form-group">
                <label for="add_url">Article URL</label>
                <input type="text" id="add_url" name="url" value="<?php echo $row['url']; ?>" class="form-control">
                <p class="help-block">Include http://.</p>
              </div>
							<div>
								<span>Old image</span>
								 <img src="/<?php echo $row['a_source']; ?>" width='269' height='161'>
							</div>
              <div class="form-item item-article-url form-group">
								<input type="file" name="image" id="image">
               
              </div>
            </div><!-- /.box-body -->
            <div class="form-actions box-footer">
              <input class="btn btn-primary" type="submit" value="Save Changes">
            </div>
          </form>
      </div><!-- /.box -->
    </div>
    
  </div>
  
  
</section>
<?php 
  include 'footer.php';
?>