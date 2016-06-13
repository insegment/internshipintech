    <?php
    /**
     * Template Name: Home - Front Page
     */
    global $theme_prefix;
    get_header();
    $current_page_id = get_option('page_on_front');
    ?>
    <?php 

    $type = 'page';
    $args = array (
     'post_type' => $type,
     'post_status' => 'publish',
     'paged' => $paged,
     'posts_per_page' => 50,
     'ignore_sticky_posts'=> 1,
    );


       get_template_part('home_section');
       get_template_part('menu');

    $main_query = new WP_Query($args); 
    if( have_posts() ) :  
        while ($main_query->have_posts()) : $main_query->the_post();
        global $post;
        $post_id = get_the_ID();


 
        if($post_id != $current_page_id && get_post_meta($post_id, "theme2035_pagetype", true) != "homesec" && get_post_meta($post_id, "theme2035_pagetype", true) != "blog"){
            $post_section_name = get_post_meta( get_the_ID(), 'theme2035_section_name', true );
        ?>

        <div<?php if($post_section_name != "" ){ ?> id="<?php echo $post_section_name; ?>" class="clearfix" <?php } ?> style="background: <?php echo $theme_prefix['background-color']; ?> !important" >
        
            <?php  $full_screen = get_post_meta( get_the_ID(), 'theme2035_full_screen', true ); 
            if( $full_screen != "1" ){
            ?>
            <div class="container">
                <div class="row">
            <?php }
                    if(get_post_meta($post_id, "theme2035_pagetype", true) == "team" ){
                        get_template_part('team');
                    }

                    else if(get_post_meta($post_id, "theme2035_pagetype", true) == "portfolio" ){ 
                        get_template_part('portfolio'); 
                    }

                    else if(get_post_meta($post_id, "theme2035_pagetype", true) == "customercomments" ){ 
                        get_template_part('customercomments'); 
                    }

                    else if(get_post_meta($post_id, "theme2035_pagetype", true) == "video" ){ 
 
                    ?><div class="video_sections"><?php

                    $videourl = get_post_meta($post_id, "theme2035_video_url", true);
                    $video_height = get_post_meta($post_id, "theme2035_video_height", true);


                    $files = get_post_meta( get_the_ID(), 'theme2035_video_mobile', false );
                    foreach ( $files as $att )
                    {
                        $src = wp_get_attachment_image_src( $att, 'full' );
                        $videoimg = $src[0];

                    }
               
                   
                    $youtube = "youtube";
                    $vimeo = "vimeo";

                    if (strlen(strstr($videourl,$youtube))>0) {
                      $videotype = "youtube";
                      parse_str( parse_url( $videourl, PHP_URL_QUERY ), $videoid );
                      $videopath = $videoid['v'];  
                    }elseif(strlen(strstr($videourl,$vimeo))>0){
                      $videotype = "vimeo";
                      sscanf(parse_url($videourl, PHP_URL_PATH), '/%d', $videoid);
                      $videopath = $videoid;
                    }else{
                      $videotype = "mp4";
                      $videopath = $videourl;
                    }


                    if($videotype == "youtube"){
                    $randomKey = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                    ?>
                    <div class="video-area">
                      <div class="video-section" data-video-height="<?php echo $video_height; ?>">
                        <div class="video-wrapper">
                          <div id="youtube-bg<?php echo $randomKey; ?>" class="youtube-bg" data-video-url="<?php echo $videopath; ?>" data-video-uid="<?php echo $randomKey; ?>"></div>
                        </div>
                        <div class="video-content"><div class="video-child"> <?php the_content(); ?> </div></div>
                      </div>
                    </div>
                    <?php
                    }elseif($videotype == "vimeo"){
                    $randomKey = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                    ?>
                    <div class="video-area">
                      <div class="video-section" data-video-height="<?php echo $video_height; ?>">
                        <div class="video-wrapper">
                          <iframe id="player<?php echo $randomKey; ?>" class="vimeo-bg" src="http://player.vimeo.com/video/<?php echo $videopath; ?>?portrait=0&byline=0&player_id=player<?php echo $randomKey; ?>&title=0&badge=0&loop=1&autopause=0&api=1&rel=0&autoplay=1" frameborder="0"></iframe>
                        </div>
                        <div class="video-content"> <div class="video-child"> <?php the_content(); ?> </div> </div>
                      </div>
                    </div>
                    <?php
                    }else{
                    $videoPathHtml = substr($videopath, 0, -4);
                    ?>
                    <div class="video-area">
                      <div class="video-section" data-video-height="<?php echo $video_height; ?>">
                        <div class="video-wrapper">
                          <video class="mediaElement" preload="false" loop="true" autoPlay="true" muted>
                            <source type="video/mp4" src="<?php echo $videoPathHtml; ?>.mp4">
                            <source type="video/webm" src="<?php echo $videoPathHtml; ?>.webm">
                            <source type="video/ogg" src="<?php echo $videoPathHtml; ?>.ogg">
                          </video>
                          <div class="video-cover"><img src="<?php echo $videoimg; ?>" /></div>
                        </div>
                        <div class="video-content"><div class="video-child"> <?php the_content(); ?> </div></div>
                      </div>
                    </div>
                    <?php
                    }
                    ?></div><?php
                    }

                    else if(get_post_meta($post_id, "theme2035_pagetype", true) == "clients" ){ 
                        get_template_part('clients'); 
                    }

                    else if(get_post_meta($post_id, "theme2035_pagetype", true) == "parallax" ){ 
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post_id, 'thumbnail_size') ); ?>
                        <div class="parallax-s pos-center" style="background:  url('<?php echo $url; ?>') 50% 0 no-repeat fixed;background-size:cover !important;"><?php
                    the_content();

                    ?>
                    </div>
                    
                    <?php } else { ?>
                      <div class="pos-center padt60 animated-area">
                          <div class="animated" data-animation="fadeInDown" data-animation-delay="0.3s"><div class="title"><?php echo the_title();  ?></div></div>
                          <?php if($theme_prefix['title_underline'] == "1" ){ ?>
                          <div class="animated" data-animation="fadeInDown" data-animation-delay="0.4s">
                            <hr class="underline pos-center margint5" />
                          </div>
                          <?php } else { ?>
                          <div class="animated" data-animation="fadeInDown" data-animation-delay="0.4s">
                             <div class="alt-seperator margint20 clearfix">
                             <hr class="pull-left alt-line-one" />
                             <i class="pull-left fa fa-star"></i>
                             <hr class="pull-left alt-line-one" />
                             </div>
                           </div>
                          <?php } ?>
                          <?php $title = get_post_meta( get_the_ID(), 'theme2035_page_title', true ); if( $title != "" ){ ?>
                          <div class="animated" data-animation="fadeInDown" data-animation-delay="0.4s"><div class="title-two margint20"> <?php echo $title; ?> </div></div>
                          <?php } ?>
                          <?php $desc = get_post_meta( get_the_ID(), 'theme2035_page_desc', true ); if( $title != "" ){ ?>
                          <div class="animated" data-animation="fadeInDown" data-animation-delay="0.5s"><p class="title-info margint20 pos-center"> <?php echo $desc; ?> </p></div>
                          <?php } ?>
                      </div>
                    <?php  the_content(); 
                    } ?>

                <?php if( $full_screen != "1" ){ ?>
            </div>
         </div>
        <?php  } ?> </div> <?php  } ?>
    
    <?php
    endwhile;
    endif; 
    wp_reset_query();
    get_footer();
    ?>