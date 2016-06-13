<?php 
  require 'admin/include/config.php';
  require 'admin/include/functions.php';
  
  $conn = mysql_connect($db_host, $db_user, $db_pass);
  mysql_select_db($db_name, $conn);
  
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
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="/favicon.ico" />
	<title>Alexander Kesler</title>

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
<body>
	<div class="bgkesler"></div>
		<div class="container homepage">
		<div class="col-xs-12 col-md-9 col-lg-9">
			<a class="logo" href="/"><h1><?php echo $settings['title']; ?></h1></a>
			<p class="subtitle">15+ years of success building companies</p>
			<div class="mobile-line"></div>
				<ul class="icons col-lg-12 col-md-12 clearfix">
					<li class="whitepapers col-xs-6 col-md-3 col-lg-3">
						<a href="/whitepapers.php"><i class="fa fa-file-text"></i></a>
						<a href="/whitepapers.php"><p>Whitepapers</p></a>
					</li>
					<li class="articles col-xs-6 col-md-3 col-lg-3">
						<a href="/articles.php"><i class="fa fa-newspaper-o"></i></a>
						<a href="/articles.php"><p>Articles</p></a>
					</li>
					<li class="interviews col-xs-6 col-md-3 col-lg-3">
						<a href="/interviews.php"><i class="fa fa-microphone"></i></a>
						<a href="/interviews.php"><p>Interviews</p></a>
					</li>
					<li class="quotes-icon col-xs-6 col-md-3 col-lg-3">
						<a href="/quotes.php"><i class="fa fa-quote-left"></i></a>
						<a href="/quotes.php"><p>Quotes</p></a>
					</li>
				</ul>
			

			
			<div class="description"><?php echo $settings['description']; ?></div>
		  <div class="form-wrap clearfix row">
	          <form action="send.php" method="post">
	          	<h3 class="form-title">HAVE A QUESTION?</h3>
	          <div class="left-part wow bounceInRight">
		            <input type='text' name="full_name" placeholder='Name*' />
		            <input type='email' name="email" placeholder='Email*'/>
		            <input type='text' name="subject" placeholder='Subject*'/>
		       </div>
		      <div class="right-part wow bounceInLeft">
		            <textarea name="message" placeholder='Leave me a message*'></textarea>
		            <input type='submit' value='Send'/>
		            <span class="linkedin">Connect with me on <a target="_blank" href="http://www.linkedin.com/in/kesler"><i class="fa fa-linkedin"></a></i></span>
		          </form> 
		      </div>
		   </div>
		      
			  
		</div>
		
	</div>
		      
		
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>