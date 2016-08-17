<?php
/*
*
*/
 get_header(); ?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php the_content(); ?>
				
			<?php endwhile; ?>
		<?php endif; ?>
		<section class="page-not-found">
			<div class="container">
				<div class="text-error">
					<img src="<?php echo get_template_directory_uri();?>/img/logo-m.jpg">
					<h2><i>Page not found.</i></h2>
					<p>Click <a class="error-link-homepage" href="<?php echo site_url(); ?>"><span class="underline-animation"><i>here</i></span></a> to see the homepage.</p>
				</div>
			</div>
		</section>
<?php get_footer(); ?>