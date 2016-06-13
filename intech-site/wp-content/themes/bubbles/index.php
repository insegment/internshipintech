<?php get_header(); ?>
    <?php get_template_part('menu'); ?>
    <div class="blog padt60 padb60 clearfix page fitvids">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-lg-8 col-sm-8" >
                	<?php if (have_posts()) : while(have_posts()) :  the_post(); ?>
                	<?php get_template_part('inc/post-types/content',get_post_format()); ?>
                	<?php endwhile; else : ?>
                	<h1><?php echo __('Your search returned no results. Please try a different keyword!','2035Themes-fm') ?></h1>
                	<?php endif; ?>
                    <?php Theme2035_pagination(); ?>
                </div>
                <div class="col-lg-4 col-sm-4 blog-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>