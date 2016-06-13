<html lang="en">
  <head>
    <title><?php echo (isset($_SESSION["user_name"]) ? $_SESSION["user_name"] : ''); ?> | Kesler.net</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
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
    <!-- Date picker -->
    <link href="css/datepicker/datepicker.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- Custom styling -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-black" cz-shortcut-listen="true">
    <?php 
      if (!isset($_SESSION["user_name"])) {
        header("Location:index.php");
        die('Access forbidden.');
      }
      $current_page = basename($_SERVER['PHP_SELF']); 
    ?>
    <header class="header">
      <a href="/admin" class="logo">
          <img src="images/logo.png" alt="TrackIt">
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </a>
          <div class="navbar-right">
              <ul class="nav navbar-nav">
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="glyphicon glyphicon-user"></i>
                          <span>Administrator <i class="caret"></i></span>
                      </a>
                      <ul class="dropdown-menu">
                          <!-- User image -->
                          <li class="user-header bg-light-blue">
                              <img src="img/avatar5.png" class="img-circle" alt="User Image">
                              <p>
                                  Kesler.net - Administrator
                              </p>
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer">
                              <div class="pull-left">
                                  <a href="settings.php" class="btn btn-default btn-flat">Settings</a>
                              </div>
                              <div class="pull-right">
                                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </nav>
  </header>
    <div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 309px;">
    <aside class="left-side sidebar-offcanvas" style="min-height: 1855px;">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="img/avatar5.png" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>Hello, Administrator</p>

                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
          </div>
          <!-- search form -->
<!--          <form action="search.php" method="get" class="sidebar-form">
              <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
              </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li <?php if($current_page == 'articles.php'){ echo 'class="active"'; } ?>>
                  <a href="articles.php">
                      <i class="fa fa-tasks"></i> <span>Articles</span>
                  </a>
              </li>
							<li <?php if($current_page == 'whitepapers.php'){ echo 'class="active"'; } ?>>
                  <a href="whitepapers.php">
                      <i class="fa fa-tasks"></i> <span>Whitepapers</span>
                  </a>
              </li>
							<li <?php if($current_page == 'interviews.php'){ echo 'class="active"'; } ?>>
                  <a href="interviews.php">
                      <i class="fa fa-tasks"></i> <span>Interviews</span>
                  </a>
              </li>
              <li <?php if($current_page == 'awards.php'){ echo 'class="active"'; } ?>>
                  <a href="awards.php">
                      <i class="fa fa-tasks"></i> <span>Awards</span>
                  </a>
              </li>
							<li <?php if($current_page == 'quotes.php'){ echo 'class="active"'; } ?>>
                  <a href="quotes.php">
                      <i class="fa fa-tasks"></i> <span>Quotes</span>
                  </a>
              </li>
              <li <?php if($current_page == 'settings.php'){ echo 'class="active"'; } ?>>
                  <a href="settings.php">
                      <i class="fa fa-wrench"></i> <span>Settings</span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>
  <aside class="right-side">