<?php 
  require 'admin/include/config.php';
  require 'admin/include/functions.php';
  
  $conn = mysql_connect($db_host, $db_user, $db_pass);
  mysql_select_db($db_name, $conn);
  $articles = get_all_quotes();
  $settings = get_settings();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="/favicon.ico" />

	<title>Quotes</title>

	 <!-- GA Code -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67015914-1', 'auto');
  ga('send', 'pageview');

  </script>
   <!-- GA Code -->

</head>
<body class="quotes">
		<div class="container">
			<div class="col-md-6">
				<a href="/" class="logo"><h1>Alexander Kesler</h1></a>
				<h3>Quotes</h3>
			</div>
			<div class="col-md-6">
				<ul class="menu clearfix">
				 	<li class="col-xs-12"><a class="hvr-float-shadow" href="/ovidiu-test-m1/whitepapers.php">Whitepapers</a></li>
					<li class="col-xs-12"><a class="hvr-float-shadow" href="/ovidiu-test-m1/articles.php">Articles</a></li>
					<li class="col-xs-12"><a class="hvr-float-shadow" href="/ovidiu-test-m1/interviews.php">Interviews</a></li>
					<li class="col-xs-12"><a class="hvr-float-shadow" href="/ovidiu-test-m1/awards.php">Awards</a></li>
					<li class="col-xs-12"><a class="hvr-float-shadow active" href="/ovidiu-test-m1/quotes.php">Quotes</a></li>
				</ul>
			</div>

			<div class="col-md-12">
				<div class="row">
					<div class="col-lg-12">
						
						<?php foreach ($articles as $article): ?>
							<div class="quote">
								<q><?php echo $article['name']; ?></q>
								<p><?php echo $article['a_source']; ?></p>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			
		</div>
		      

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>