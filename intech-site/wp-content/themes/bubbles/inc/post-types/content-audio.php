<?php 

    global $smof_data;

?>                  

<!--**************************************************************************************************/
/* Audio Post Format 
************************************************************************************************** -->

    <article <?php post_class('clearfix'); ?> id="post-<?php the_ID(); ?>">
    <div class="blog-post fitvids clearfix">
        <div class="marginb20"><?php  echo get_post_meta( get_the_ID(), 'theme2035_audio', true ) ?></div>
        <div class="title-post-blog"><h4><a href="<?php the_permalink(); ?>"><?php $title = get_the_title(); if($title != "" ) { echo $title; }  else { echo $post_date = get_the_date(); }  ?></a></h4></div>
        <div class="post-materials clearfix">
            <?php if (is_sticky()) { ?> <span class="sticky-post"><i class="fa fa-star"></i> <?php echo  __("STICKY POST","theme2035-fm"); ?> </span> <?php } ?>
            <span class="post-date"><i class="fa fa-calendar"></i><a href="<?php the_permalink(); ?>"><?php echo $post_date = get_the_date();  ?></a></span>
            <span class="blog-post-author"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></span> 
            <?php if(comments_open() && !post_password_required()){
                ?> <span class="blog-post-comments"><i class="fa fa-comments"></i> <?php
                comments_popup_link( __('No comments yet','2035Themes-fm'), __('1 Comment','2035Themes-fm'), __('% Comments','2035Themes-fm'), 'comments-link', __('Comments are off for this post','2035Themes-fm'));
                ?></span>  <?php
                } 
             ?>
            <span class="blog-post-category"><i class="fa fa-tags"></i><?php the_category(', '); ?></span>  
        </div>
        <div class="post-content-full">
            <div class="margint20 clearfix">
                <div class="post-content-blog">
                <?php  if(is_single()){ ?>
                    <div class="excerpt">
                        <?php the_content(); ?>
                    </div>
                <?php } else {  the_excerpt();  } ?>

                </div>
            </div>

            <?php 
            if(!is_single()){
            ?>
            <div class="more-link">
                <a href="<?php the_permalink(); ?>"><span class="continue-reading"><?php echo __("Read More","theme2035-fm"); ?></span></a>
            </div>
            <?php
            }else {  
                ?>

            <div class="blog-post-tag margint20 clearfix">
                
                <?php
                    if( has_tag() ) {  
                    echo '<span><i class="fa fa-tags"></i></span>'; 
                    the_tags('  ',' - ','  ');
                    echo '<div class="clear"></div>';
                    }
                    ?>
            </div>
            <div class="margint10 post-paginate"> <?php  wp_link_pages(); ?></div>
            <?php comments_template();  } ?>
        </div>
    </div>
    </article>


      
          