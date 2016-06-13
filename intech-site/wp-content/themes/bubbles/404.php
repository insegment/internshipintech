<?php get_header(); ?>
<?php get_template_part('menu');  ?>
    <div class="container padt60 pos-center" >
        <header class="page-header clearfix">
            <div class="error_title margint60"><?php echo __("404","theme2035-fm"); ?></div>
        </header>
        <div class="page-wrapper clearfix">
            <div class="page-content">
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>