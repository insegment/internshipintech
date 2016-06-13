<!DOCTYPE html>
<!--[if IE 6]><html class="ie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<?php global $theme_prefix; ?>
	
	<!-- *********	PAGE TITLE	*********  -->
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>


	<!-- *********	PAGE TOOLS	*********  -->

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="author" content="">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- *********	WORDPRESS TOOLS	*********  -->
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<!-- *********	MOBILE TOOLS	*********  -->

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

	<!-- *********	FAVICON TOOLS	*********  -->
	
	<?php 

    if(empty($theme_prefix['favicon']['url'])){
	$theme_prefix['favicon']['url'] = "";
	}

	if(empty($theme_prefix['ipad_retina_icon']['url'])){
	$theme_prefix['ipad_retina_icon']['url'] = "";
	}

	if(empty($theme_prefix['iphone_icon_retina']['url'])){
	$theme_prefix['iphone_icon_retina']['url'] = "";
	}	

	if(empty($theme_prefix['ipad_icon']['url'])){
	$theme_prefix['ipad_icon']['url'] = "";
	}		

	if(empty($theme_prefix['iphone_icon']['url'])){
	$theme_prefix['iphone_icon']['url'] = "";
	}			

	if($theme_prefix['favicon']['url'] != "") { ?> <link rel="shortcut icon" href="<?php echo $theme_prefix['favicon']['url']; ?>" /><?php } 
			else { ?> <link rel="shortcut icon" href="<?php echo THEMEROOT."/images/favicon.ico"; ?>" /> <?php } ?>
	
	<?php if($theme_prefix['ipad_retina_icon']['url'] != "")  { ?> <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $theme_prefix['ipad_retina_icon']['url']; ?>" /> <?php } ?>
	
	<?php if($theme_prefix['iphone_icon_retina']['url'] != "")  { ?> <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $theme_prefix['iphone_icon_retina']['url']; ?>" /> <?php } ?>
	
	<?php if($theme_prefix['ipad_icon']['url'] != "")  { ?> <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $theme_prefix['ipad_icon']['url']; ?>" /> <?php } ?>
	
	<?php if($theme_prefix['iphone_icon']['url'] != "")  { ?> <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $theme_prefix['iphone_icon']['url']; ?>" /> <?php } ?>



	<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KXBKT5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KXBKT5');</script>
<!-- End Google Tag Manager -->


	<!-- *********	Loading	*********  -->

<?php get_template_part('inc/loading'); ?>


<div id="wrapper" class="fitvids">
