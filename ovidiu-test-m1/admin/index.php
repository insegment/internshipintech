<?php
  require_once 'include/config.php';
 
  session_start();
  $message = "";
  if (count($_POST) > 0) {
    $conn = mysql_connect($db_host, $db_user, $db_pass);
    mysql_select_db($db_name, $conn);
    $result = mysql_query("SELECT * FROM users WHERE user_name='" . $_POST["user_name"] . "' and password = '" . $_POST["password"] . "'");
    $row = mysql_fetch_array($result);
    if (is_array($row)) {
      $_SESSION["user_id"] = $row[user_id];
      $_SESSION["user_name"] = $row[user_name];
    } else {
      $message = "Invalid Username or Password!";
    }
  }
  if (isset($_SESSION["user_id"])) {
    header("Location:articles.php");
  }
?>
<html>
  <head>
    <title>User Login | Kesler.net</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login bg-black">
    <?php if ($message != ""): ?>
      <div class="messages error">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>
        
        <div class="form-box" id="login-box">
          <div class="header bg-blue"><img src="images/logo.png" alt="TrackIT"></div>
          <form action="" method="post">
            <div class="body bg-white">
                <div class="form-group">
                  <input type="text" name="user_name" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>          
            </div>
            <div class="footer">                                                               
              <button type="submit" class="btn bg-blue btn-block">Sign me in</button>  
            </div>
          </form>
        </div>
    
     <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- jQuery UI 1.10.3 -->
    <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

    <!-- AdminLTE App -->
    <script src="js/AdminLTE/app.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>
    <script src="js/global.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <!--<script src="js/AdminLTE/demo.js" type="text/javascript"></script>-->
  </body>
</html>