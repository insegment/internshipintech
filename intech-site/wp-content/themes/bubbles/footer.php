<?php global $theme_prefix; ?>
	<div class="footer-ghost"></div>
</div><!-- .Wrapper End -->
    <div class="footer pos-center animated-area">
	    <?php
	    if(empty($theme_prefix['logo']['url'])){
		$theme_prefix['logo']['url'] = "";
		}
	    if($theme_prefix['logo']['url'] != "" ){ ?>
		<div class="animated" data-animation="pulse" data-animation-delay="0.6s"><a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo $theme_prefix['logo']['url']; ?>"></a></div>
		<?php } else { ?>
	    <div class="animated own_logo" data-animation="pulse" data-animation-delay="0.6s"><a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo THEMEROOT."/images/logo.png";?>" ></a></div>
	    <?php } ?>
    </div>
<?php wp_footer(); ?>
<?php if(!empty($theme_prefix['track_code'])) { echo $theme_prefix['track_code']; } ?>
</body>
</html>
