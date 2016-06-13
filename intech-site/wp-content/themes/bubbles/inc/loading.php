<?php global $theme_prefix;  
if(empty($theme_prefix['loading_type'])){
	$theme_prefix['loading_type'] = "loading";
}
?>

<?php if($theme_prefix['loading_type'] == "Off" ) { } ?>

<?php if($theme_prefix['loading_type'] == "loading" ) { ?>
                <div id="loading-area">
					<div class="container loading_container">
					  <h1><?php echo __("Loading...","theme2035-fm") ?></h1>
					  <div class="dot"></div>
					  <div class="dot"></div>
					  <div class="dot"></div>
					  <div class="dot"></div>
					</div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading1" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="timer"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading2" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="typing_loader"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading3" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="location_indicator"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading4" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="battery"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading5" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="help"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading6" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="cloud"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading7" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="eye"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading8" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="coffee_cup"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading9" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="square"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading10" ) { ?>
                <div id="loading-area">
                	<div class="position">
		                <div class="span">
		                    <div class="circle"></div>
		                </div>
	                </div>
                </div>
<?php } ?>
<?php if($theme_prefix['loading_type'] == "loading11" ) { ?>
                <div id="loading-area">
                	<div class="gif-pos">
                		<img src="<?php echo THEMEROOT; ?>/images/loading.gif">
                	</div>
                </div>
<?php } ?>