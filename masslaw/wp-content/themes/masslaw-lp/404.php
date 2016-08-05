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
					<h2><i>Page not found.</i></h2>
					<p>Click <a class="error-link-homepage" href="#"><span class="underline-animation"><i>here</i></span></a> to see the homepage.</p>
				</div>
			</div>
		</section>
<?php get_footer(); ?>