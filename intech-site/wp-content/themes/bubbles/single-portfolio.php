
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="container padt20 pos-center projects marginb30">
		<h2 class=""><?php the_title();  ?></h2>
		<p class="margint5">
			<?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>
	        <?php if($terms) : foreach ($terms as $term) { echo $term->slug.' '; } endif; ?>
	    </p>
		<div class="container margint40">
			<div class="row">
		        <?php if( get_post_meta( get_the_ID(), 'theme2035_portfolio_embed_video', true ) == "" ){
				global $wpdb;
				$images = get_post_meta( get_the_ID(), 'theme2035_blogslides', false );
				$images = implode( ',' , $images );
				// Re-arrange images with 'menu_order'
				$images = $wpdb->get_col("
				    SELECT ID FROM {$wpdb->posts}
				    WHERE post_type = 'attachment'
				    AND ID in ({$images})
				    ORDER BY menu_order ASC
				" );
		 		?>

					<div class="col-lg-8 col-sm-8 pull-left">
					    <div class="featured-image-job">
							<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>

						</div>
						<?php Tracy\Debugger::barDump(get_post_meta( get_the_ID(), 'theme2035_clients_name', true )); ?>
                                            <!-- custom form -->
                                            <div class="job-form">
                                                <div class="custom-form" lang="en-US" dir="ltr">
                                                    <form name="custom-form" data-action="/custom-form.php" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" value="<?php echo get_post_meta( get_the_ID(), 'theme2035_clients_name', true ); ?>" name="job_type">
                                                        <div class="first-part">
                                                            <p>Your Name (required)<br>
                                                                <span class="your-name">
                                                                    <input type="text" name="your-name" value="" size="40">
                                                                </span>
                                                            </p>
                                                            <p>Your Email (required)<br>
                                                                <span class="your-email">
                                                                    <input type="email" name="your-email" value="" size="40">
                                                                </span>
                                                            </p>
                                                            <p>Upload CV <br>
                                                                <span class="file-4">
                                                                    <input type="file" name="cv" value="1" size="40">
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="second-part">
                                                            <p>Subject<br>
                                                                <span class="your-subject">
                                                                    <input type="text" name="your-subject" value="" size="40">
                                                                </span>
                                                            </p>
                                                            <p>Your Message<br>
                                                                <span class="your-message">
                                                                    <textarea name="your-message" cols="40" rows="10"></textarea>
                                                                </span>
                                                            </p>
                                                            <p><input type="submit" value="Send"></p>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /custom form -->
					</div>
					<div class="col-lg-4 col-sm-4 pos-left project-info-box pull-right">
						<div>
							<h3 class="font-Montserrat"><?php echo __('ABOUT PROJECT','theme2035-fm'); ?></h3>
							<p class="margint20"><?php echo get_post_meta( get_the_ID(), 'theme2035_portfolio_desc', true ); ?></p>
						</div>

					</div>



<?php }
else {
				?>
					<div class="col-lg-8 col-sm-8">
						<div class='video fitvids'>
	    					<?php echo get_post_meta( get_the_ID(), 'theme2035_portfolio_embed_video', true ); ?>
	    				</div>
					</div>
					<div class="col-lg-4 col-sm-4 pos-left project-info-box">
						<div>
							<h3 class="font-Montserrat"><?php echo __('JOB DESCRIPTION','theme2035-fm'); ?></h3>
							<p class="margint20"><?php echo get_post_meta( get_the_ID(), 'theme2035_portfolio_desc_video', true ); ?></p>
						</div>
						<div class="margint40">
							<h3 class="font-Montserrat"><?php echo __('PROJECT DETAILS','theme2035-fm'); ?></h3>
							<ul class="project-det margint10">
								<li class="clearfix">
									<div class="pull-left font-Montserrat list-title"><?php echo __('CATEGORY','theme2035-fm'); ?></div>
									<div class="pull-right list-desc">
										<?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>
	        							<?php if($terms) : foreach ($terms as $term) { echo $term->slug.' '; } endif; ?>
									</div>
								</li>
								<li class="clearfix">
									<div class="pull-left font-Montserrat list-title"><?php echo __('CLIENTS','theme2035-fm'); ?></div>
									<div class="pull-right list-desc"><?php echo get_post_meta( get_the_ID(), 'theme2035_clients_name_video', true ); ?></div>
								</li>
								<li class="clearfix">
									<div class="pull-left font-Montserrat list-title"><?php echo __('DATE','theme2035-fm'); ?></div>
									<div class="pull-right list-desc"><time datetime="<?php echo date(DATE_W3C); ?>" class="updated"><?php the_time(get_option('date_format')); ?></time></div>
								</li>
							</ul>
						</div>
						<div class="margint40">
							<h3 class="font-Montserrat"><?php echo __('PROJECT WEBSITE','theme2035-fm'); ?></h3>
							<a href="<?php echo get_post_meta( get_the_ID(), 'theme2035_project_web_site_video', true ); ?>"><?php echo get_post_meta( get_the_ID(), 'theme2035_project_web_site_video', true ); ?> <i class="icon-external-link"></i></a>
						</div>
					</div>


<?php } ?>
	</div>
<?php endwhile; endif;
wp_reset_query();  ?>

			</div>
		</div>


