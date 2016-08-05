<?php /*
*	Header file
*/

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T3J7F3"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T3J7F3');</script>
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>
<body>
	<header class="header-section">
		<div class="container header-container">
			<div class="row header-row">
				<div class="col-xs-12 col-md-7 header-logo">
					<?php
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
					?>
				</div>
				<div class="call-us">
					CALL US: <a id="call-us-number" href="tel:8889236984"><span class="underline-animation">888-923-6984</span></a>
				</div>
			</div>
		</div>
	</header>