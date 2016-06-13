<?php 
function Theme2035_custom_style_import() {
global $theme_prefix;
?>
<style type="text/css">

/* Background Color */

.body, .clients-page,  .page{ background: <?php echo $theme_prefix['background-color']; ?> !important; }

/* Main Color Background */

.underline, .next-post, .try-button, .load-more-button a, .prev-post, .contact-hover input[type=submit], .dropcap-style:first-letter ,  .contact input[type=submit], .blog-sidebar hr, .searchform input[type="submit"], .cllpse-active, .click-to-buy a, .services-withut-icn:hover a, .some-stats-box:hover, .color1, .color5, .color11, .slirevbutton1 { background: <?php echo $theme_prefix['main-color']; ?> !important; }

<?php if($theme_prefix['loading_type'] != "loading" ) { ?>

#loading-area{ background: <?php echo $theme_prefix['main-color']; ?> !important; }

<?php } ?>

/* Main Color */

.colortext1, .project-info-box a, .colortext7, .view .mask p, .colortext11, a:hover, .blog-post i, .more-link a, cite, .featured-image .mask i, .com-info a, .comments-blog-post-top a, .comment-content a, .comments-blog-post-top a, .author, .comment-content a, .comment-content a, .team-box h4, .portfolio-filters ul li a.active, #menu ul li.current a, .personal-social-media i,.big-tabs ul li.active a, .alt-seperator i, .blog-posts a { color: <?php echo $theme_prefix['main-color']; ?> !important; }

/* Main Color Border */

.portfolio-filters ul li a.active { border : solid 1px <?php echo $theme_prefix['main-color']; ?>;  }

/* Second Color Background */

.color2, .color9, .color10, .try-button { background : <?php echo $theme_prefix['second-color']; ?>;  }

/* Second Color */

.colortext2, .colortext9, .colortext10{ color : <?php echo $theme_prefix['second-color']; ?> !important;  }

/* Third Color Background */

.color3, .color7 { background : <?php echo $theme_prefix['third-color']; ?> !important;  }

/* Third Color */

.colortext3, .colortext8, .colortext6 { color : <?php echo $theme_prefix['third-color']; ?> !important;  }


/* Fourth Color Background */

.color4, .color6, .color8 { background : <?php echo $theme_prefix['fourth-color']; ?> !important;  }

/* Fourth Color */

.colortext4, .colortext6, .colortext8 { color : <?php echo $theme_prefix['fourth-color']; ?> !important;  }


/* Menu Typography And Background Color */


<?php if(!empty($theme_prefix['menu-background-color'])) { ?>.menu-container{ background: <?php echo $theme_prefix['menu-background-color']; ?> !important; }<?php }?>


		<?php 
		
	    if(empty($theme_prefix['menu-typography']['font-family'])){
		$theme_prefix['menu-typography']['font-family'] = "";
		}

	    if(empty($theme_prefix['menu-typography']['font-weight'])){
		$theme_prefix['menu-typography']['font-weight'] = "";
		}		

	    if(empty($theme_prefix['menu-typography']['font-style'])){
		$theme_prefix['menu-typography']['font-style'] = "";
		}		

		?>

.menu-container ul li a{ font-family: <?php echo $theme_prefix['menu-typography']['font-family']; ?> !important ; font-weight: <?php echo $theme_prefix['title-two-typography']['font-weight']; ?> !important ; color : <?php echo $theme_prefix['menu-typography']['color']; ?> !important ;  font-style: <?php echo $theme_prefix['menu-typography']['font-style']; ?> !important ; font-size: <?php echo $theme_prefix['menu-typography']['font-size']; ?> !important ;line-height: font-style: <?php echo $theme_prefix['menu-typography']['line-height']; ?> !important  ;}

/* Site Typography */



<?php if($theme_prefix['fontselect'] == "customfont") { ?>

<?php if($theme_prefix['custom-font-name'] != "") { ?>

@font-face {
    <?php if($theme_prefix['custom-font-name'] != "") { ?> font-family: '<?php echo $theme_prefix['custom-font-name']; ?>';<?php } ?> 
    <?php if($theme_prefix['eot'] != "") { ?> src: url('<?php echo $theme_prefix['eot']; ?>'); <?php } ?> 
    <?php if($theme_prefix['iefix'] != "") { ?> src: url('<?php echo $theme_prefix['iefix']; ?>') format('embedded-opentype'), <?php  } ?> 
         <?php if($theme_prefix['woff'] != "") { ?> url('<?php echo $theme_prefix['woff']; ?>') format('woff'), <?php  } ?> 
         <?php if($theme_prefix['ttf'] != "") { ?>  url('<?php echo $theme_prefix['ttf']; ?>') format('truetype'), <?php } ?> 
         <?php if($theme_prefix['svg'] != "") { ?> url('<?php echo $theme_prefix['svg']; ?>') format('svg'); <?php } ?> 
    font-weight: normal;
    font-style: normal;
}

body, body p, .more-details-box p{
	font-family: <?php echo $theme_prefix['custom-font-name']; ?> !important;
}

<?php } }else { ?>


	<?php 

	    if(empty($theme_prefix['site-typography']['font-family'])){
		$theme_prefix['site-typography']['font-family'] = "";
		}

	    if(empty($theme_prefix['site-typography']['font-weight'])){
		$theme_prefix['site-typography']['font-weight'] = "";
		}
	    if(empty($theme_prefix['site-typography']['font-style'])){
		$theme_prefix['site-typography']['font-style'] = "";
		}				


		?>


body, body p, .more-details-box p{ font-family: <?php echo $theme_prefix['site-typography']['font-family']; ?> !important ; font-weight: <?php echo $theme_prefix['site-typography']['font-weight']; ?> !important ; color : <?php echo $theme_prefix['site-typography']['color']; ?> !important ;  font-style: <?php echo $theme_prefix['site-typography']['font-style']; ?> ; font-size: <?php echo $theme_prefix['site-typography']['font-size']; ?> !important ;line-height: font-style: <?php echo $theme_prefix['site-typography']['line-height']; ?> !important  ;}



<?php } ?>


	





<?php if($theme_prefix['fontselect'] == "customfont") { ?>

<?php if($theme_prefix['custom-font-name'] != "") { ?>

@font-face {
    <?php if($theme_prefix['custom-font-name'] != "") { ?> font-family: '<?php echo $theme_prefix['custom-font-name']; ?>';<?php } ?> 
    <?php if($theme_prefix['eot'] != "") { ?> src: url('<?php echo $theme_prefix['eot']; ?>'); <?php } ?> 
    <?php if($theme_prefix['iefix'] != "") { ?> src: url('<?php echo $theme_prefix['iefix']; ?>') format('embedded-opentype'), <?php  } ?> 
         <?php if($theme_prefix['woff'] != "") { ?> url('<?php echo $theme_prefix['woff']; ?>') format('woff'), <?php  } ?> 
         <?php if($theme_prefix['ttf'] != "") { ?>  url('<?php echo $theme_prefix['ttf']; ?>') format('truetype'), <?php } ?> 
         <?php if($theme_prefix['svg'] != "") { ?> url('<?php echo $theme_prefix['svg']; ?>') format('svg'); <?php } ?> 
    font-weight: normal;
    font-style: normal;
}

h1,h2,h3,h4,h5,h6, .title, .home-slider ul li h2, .load-more-button a, .blog .post-password-form input[type="submit"], .animated-numbers p, .stats-font, .pagination a, cite, .searchform input[type="submit"], .blog-sidebar h3, .contact-form-style-1 input[type=submit], .author, .comment-content a, .small-title, .about-box h4, .more-button, .more-button-alternative a, .more-details-box h3, .view .mask h3, .projects h2, .project-info-box h3, .portfolio-filters ul li a, .price-box a, .click-to-buy a, .contact-box h4, .expand-map a, .services-withut-icn h2, .services-withut-icn a, .big-tabs ul li a, .big-tabs ul li.active a, a.button-style-1, a.button-style-2, .bar-box, .panel-style1 a, .contact input[type=submit], .big-numbers {
  font-family: <?php echo $theme_prefix['custom-font-name']; ?> !important;
}

<?php } }else { ?>


/* Title Typography */

    <?php 

      if(empty($theme_prefix['title-typography']['font-family'])){
    $theme_prefix['title-typography']['font-family'] = "";
    }

      if(empty($theme_prefix['title-typography']['font-style'])){
    $theme_prefix['title-typography']['font-style'] = "";
    }   

    ?>

h1,h2,h3,h4,h5,h6, .title, .home-slider ul li h2, .load-more-button a, .blog .post-password-form input[type="submit"], .animated-numbers p, .stats-font, .pagination a, cite, .searchform input[type="submit"], .blog-sidebar h3, .contact-form-style-1 input[type=submit], .author, .comment-content a, .small-title, .about-box h4, .more-button, .more-button-alternative a, .more-details-box h3, .view .mask h3, .projects h2, .project-info-box h3, .portfolio-filters ul li a, .price-box a, .click-to-buy a, .contact-box h4, .expand-map a, .services-withut-icn h2, .services-withut-icn a, .big-tabs ul li a, .big-tabs ul li.active a, a.button-style-1, a.button-style-2, .bar-box, .panel-style1 a, .contact input[type=submit], .big-numbers { font-family: <?php echo $theme_prefix['title-typography']['font-family']; ?> !important ; font-weight: <?php echo $theme_prefix['title-typography']['font-weight']; ?> !important ;  font-style: <?php echo $theme_prefix['title-typography']['font-style']; ?> ;}




<?php } ?>



/* Title Two Typography */



<?php if($theme_prefix['fontselect'] == "customfont-two") { ?>

<?php if($theme_prefix['custom-font-name-two'] != "") { ?>

@font-face {
    <?php if($theme_prefix['custom-font-name-two'] != "") { ?> font-family: '<?php echo $theme_prefix['custom-font-name-two']; ?>';<?php } ?> 
    <?php if($theme_prefix['eot-two'] != "") { ?> src: url('<?php echo $theme_prefix['eot-two']; ?>'); <?php } ?> 
    <?php if($theme_prefix['iefix-two'] != "") { ?> src: url('<?php echo $theme_prefix['iefix-two']; ?>') format('embedded-opentype'), <?php  } ?> 
         <?php if($theme_prefix['woff-two'] != "") { ?> url('<?php echo $theme_prefix['woff-two']; ?>') format('woff'), <?php  } ?> 
         <?php if($theme_prefix['ttf-two'] != "") { ?>  url('<?php echo $theme_prefix['ttf-two']; ?>') format('truetype'), <?php } ?> 
         <?php if($theme_prefix['svg-two'] != "") { ?> url('<?php echo $theme_prefix['svg-two']; ?>') format('svg'); <?php } ?> 
    font-weight: normal;
    font-style: normal;
}

.title-two{
  font-family: <?php echo $theme_prefix['custom-font-name-two']; ?> !important;
}

<?php } }else { ?>


/* Title Typography */

    <?php 

      if(empty($theme_prefix['title-typography-two']['font-family'])){
    $theme_prefix['title-typography-two']['font-family'] = "";
    }

      if(empty($theme_prefix['title-typography-two']['font-style'])){
    $theme_prefix['title-typography-two']['font-style'] = "";
    }   

    ?>

.title-two{ font-family: <?php echo $theme_prefix['title-typography-two']['font-family']; ?> !important; font-weight: <?php echo $theme_prefix['title-typography-two']['font-weight']; ?> !important ;  font-style: <?php echo $theme_prefix['title-typography-two']['font-style']; ?> ;}




<?php } ?>




blockquote, q{ border-left: solid 3px <?php echo $theme_prefix['main-color']; ?> !important; }


<?php if (!empty($theme_prefix['custom-css-area'])){ echo $theme_prefix['custom-css-area']; }?>


/* Loading */

.dot{
  background: <?php echo $theme_prefix['main-color']; ?>; ?>
  float: left;
  height: 7px;
  width: 7px;
  border-radius: 15px;

  position: relative;
  top: -1px;
  -webkit-animation: cool 4s cubic-bezier(.92, .08, .41, .88) 3s infinite;
}
.dot:nth-child(2){
  background: <?php echo $theme_prefix['second-color']; ?>; ?>;
  float: left;
  height: 7px;
  width: 7px;
  border-radius: 15px;
  
  position: relative;
  top: -1px;
  -webkit-animation: cool 4s cubic-bezier(.92, .08, .41, .88) 3.5s infinite;
}
.dot:nth-child(3){
  background: <?php echo $theme_prefix['third-color']; ?>; ?>;
  float: left;
  height: 7px;
  width: 7px;
  border-radius: 15px;

  position: relative;
  top: -1px;
  -webkit-animation: cool 4s cubic-bezier(.92, .08, .41, .88) 4.0s infinite;
}
.dot:nth-child(4){
  background: <?php echo $theme_prefix['fourth-color']; ?>; ?>;
  float: left;
  height: 7px;
  width: 7px;
  border-radius: 15px;

  position: relative;
  top: -1px;
  -webkit-animation: cool 4s cubic-bezier(.92, .08, .41, .88) 4.5s infinite;
}


</style>

<?php 
}
add_action('wp_head', 'Theme2035_custom_style_import');
?>