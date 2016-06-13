<?php
  session_start();
  include 'header.php';
  include 'include/config.php';
  include 'include/functions.php';
  
  $conn = mysql_connect($db_host, $db_user, $db_pass);
  mysql_select_db($db_name, $conn);
  
  if (count($_POST) > 0) {
    
    if (!empty($_POST['change-password'])) {
      
      //handle password changes
      if ((isset($_POST['password']) && $_POST['password'] != "") || (isset($_POST['confirm_password']) && $_POST['confirm_password'] != "")) {

        $p = (isset($_POST['password']) ? $_POST['password'] : '');
        $cp = (isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '');
        $uid = $_SESSION['user_id'];

        if ($p != '' && $cp == $p) {
          mysql_query("UPDATE users SET password='$p' WHERE user_id='$uid'");
          $alert['message'] = "Successfully changed password.";
          $alert['type'] = "success";
        } else {
          $alert['message'] = "Password is invalid or does not match.";
          $alert['type'] = "danger";
        }

      } else {
        $alert['message'] = "Password is empty. Dough! Don't worry it's not saved!";
        $alert['type'] = "danger";
      }
      
    }
    
    if (!empty($_POST['save-preferences'])) {
      
      //handle site general settings
      if (isset($_POST['intro'])) {

        $home_meta_title = (isset($_POST['title']) ? mysql_escape_string($_POST['title']) : '');
        $home_title = (isset($_POST['htitle']) ? mysql_escape_string($_POST['htitle']) : '');
        $intro = (isset($_POST['intro']) ? mysql_escape_string($_POST['intro']) : '');
        $goodbye = (isset($_POST['goodbye']) ? mysql_escape_string($_POST['goodbye']) : '');
        $social_intro = (isset($_POST['social_intro']) ? mysql_escape_string($_POST['social_intro']) : '');
        $recipients = (isset($_POST['recipients']) ? $_POST['recipients'] : '');
        $article_meta_title = (isset($_POST['article_title']) ? mysql_escape_string($_POST['article_title']) : '');
        $article_title = (isset($_POST['atitle']) ? mysql_escape_string($_POST['atitle']) : '');

        if ($home_meta_title != '' && $home_title != '' && $intro != '') {
          set_setting('site_title',$home_meta_title);
          set_setting('title',$home_title);
          set_setting('description',$intro);
          set_setting('goodbye',$goodbye);
          set_setting('social_intro',$social_intro);
          set_setting('email_to',$recipients);
          set_setting('article_page_meta_title',$article_meta_title);
          set_setting('article_page_title',$article_title);

          $alert['message'] = "Successfully updated preferences.";
          $alert['type'] = "success";
        } else {
          $alert['message'] = "Errors occured. Please make sure all fields are filled in.";
          $alert['type'] = "danger";
        }

      } else {
        $alert['message'] = "Empty values detected. Preferences were not updated.";
        $alert['type'] = "danger";
      }
      
    }
      
  } 
  $settings = get_settings();
   
  
?>
<section class="content-header">
    <h1>
        Control Panel
        <small>Settings</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Settings</li>
    </ol>
</section>

<section class="content page-settings">
  <div class="row">
    <?php if (isset($alert) && sizeof($alert) > 0) :?>
      <div class="col-md-12">
        <div class="alert alert-dismissable alert-<?php echo $alert["type"]; ?>">
          <i class="fa fa-check"></i>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <?php echo $alert["message"]; ?>
        </div>
      </div>
    <?php endif; ?>
    
    <div class="col-md-6">
        <div class="box box-primary">
          <form method="post" action="" id="settings-form">
            <div class="box-body">
              <h4>Change Administration Password</h4>
              <div class="form-item item-password form-group">
                <input type="password" name="password" placeholder="New password" class="form-control">
              </div>
              <div class="form-item item-confirm-password form-group">
                <input type="password" name="confirm_password" placeholder="Confirm password" class="form-control">
              </div>
            </div><!-- /.box-body -->
            <div class="form-actions box-footer">
              <input class="btn btn-primary" name="change-password" type="submit" value="Save">
            </div>
          </form>
      </div><!-- /.box -->
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header">
              <h3 class="box-title">General settings</h3>
          </div>
          <form method="post" action="" id="general-settings">
            <div class="box-body">
              <div class="row">
                
                <div class="col-xs-6">
                  <div class="form-group">
                      <label for="title">Homepage Meta Title</label>
                      <input type="text" name="title" class="form-control required" id="title" value="<?php echo $settings['site_title']; ?>" placeholder="Your site title">
                  </div>
                </div>
                
                <div class="col-xs-6">
                  <div class="form-group">
                      <label for="htitle">Homepage Title</label>
                      <input type="text" name="htitle" class="form-control required" id="htitle" value="<?php echo $settings['title']; ?>" placeholder="Page title">
                  </div>
                </div>
                
                <div class="col-xs-12">
                  <div class="form-group">
                      <label for="intro">Homepage Intro</label>
                      <textarea type="text" name="intro" rows="5" class="form-control required" id="intro" placeholder="This is my introduction..."><?php echo $settings['description']; ?></textarea>
                  </div>
                </div>
                
                <div class="col-xs-12">
                  <div class="form-group">
                      <label for="goodbye">Homepage Goodbye</label>
                      <input type="text" name="goodbye" class="form-control required" value="<?php echo $settings['goodbye']; ?>" id="goodbye" placeholder="Goodbye">
                  </div>
                </div>
                
                <div class="col-xs-12">
                  <div class="form-group">
                      <label for="social_intro">Social Block Intro</label>
                      <input type="text" name="social_intro" class="form-control required" value="<?php echo $settings['social_intro']; ?>" id="social_intro" placeholder="Connect with me...">
                  </div>
                </div>
                
                <div class="col-xs-12">
                  <div class="form-group">
                      <label for="recipients">Form Email Recipients</label>
                      <input type="text" name="recipients" class="form-control required" id="recipients" value="<?php echo $settings['email_to']; ?>" placeholder="email@example.com">
                      <p class="help-block">Separate multiple email addresses with <em>comma</em>. Eg.: <em>john_doe@example.com, jane_doe@example.com</em></p>
                  </div>
                </div>
                
                <div class="col-xs-6">
                  <div class="form-group">
                      <label for="article_title">Article Page Meta Title</label>
                      <input type="text" name="article_title" class="form-control required" value="<?php echo $settings['article_page_meta_title']; ?>" id="article_title" placeholder="Your page title">
                  </div>
                </div>
                
                <div class="col-xs-6">
                  <div class="form-group">
                      <label for="atitle">Article Page Title</label>
                      <input type="text" name="atitle" class="form-control required" value="<?php echo $settings['article_page_title']; ?>" id="atitle" placeholder="Page title">
                  </div>
                </div>
                
              </div><!-- end row -->
              
              
            </div><!-- /.box-body -->
            <div class="form-actions box-footer">
              <input class="btn btn-success btn-lg" type="submit" name="save-preferences" value="Save preferences">
            </div>
          </form>
      </div><!-- /.box -->
    </div>
    
  </div>
</section>

<?php
  include 'footer.php';
?>