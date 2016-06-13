<?php global $theme_prefix; ?>
<div id="home">



    <?php if($theme_prefix['home-page-type'] == "video" ){ 
                    $videourl = $theme_prefix['video-background-home'];
                    
                    if(empty($theme_prefix['video-background-image']['url'])){
                      $theme_prefix['video-background-image']['url'] = "http://www.2035themes.com/bubbles/wp/wp-content/uploads/2014/03/18088769_l.jpg";
                    }

                    $videoimg = $theme_prefix['video-background-image']['url'];

                    
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
                      <div class="video-section-home">
                        <div class="video-wrapper">
                          <div id="youtube-bg<?php echo $randomKey; ?>" class="youtube-bg" data-video-url="<?php echo $videopath; ?>" data-video-uid="<?php echo $randomKey; ?>"></div>
                        </div>
                        <div class="video-content">
                            <div class="pos-center scroll-fade-effect">
                            <?php 
                            $type = 'page';
                            $args = array (
                             'post_type' => $type,
                             'post_status' => 'publish',
                             'paged' => $paged,
                             'posts_per_page' => 50,
                             'ignore_sticky_posts'=> 1,
                            );



                            $main_query = new WP_Query($args); 
                            if( have_posts() ) :  
                                while ($main_query->have_posts()) : $main_query->the_post();
                                global $post;

                            $post_id = get_the_ID();
                            if(get_post_meta($post_id, "theme2035_pagetype", true) == "homesec" ){
                                    the_content();
                                }


                            endwhile;
                            endif; 
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    }elseif($videotype == "vimeo"){
                    $randomKey = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                    ?>
                    <div class="video-area">
                      <div class="video-section-home">
                        <div class="video-wrapper">
                          <iframe id="player<?php echo $randomKey; ?>" class="vimeo-bg" src="http://player.vimeo.com/video/<?php echo $videopath; ?>?portrait=0&byline=0&player_id=player<?php echo $randomKey; ?>&title=0&badge=0&loop=1&autopause=0&api=1&rel=0&autoplay=1" frameborder="0"></iframe>
                        </div>
                        <div class="video-content">
                            <div class="pos-center scroll-fade-effect">
                            <?php 
                            $type = 'page';
                            $args = array (
                             'post_type' => $type,
                             'post_status' => 'publish',
                             'paged' => $paged,
                             'posts_per_page' => 50,
                             'ignore_sticky_posts'=> 1,
                            );

                            $main_query = new WP_Query($args); 
                            if( have_posts() ) :  
                                while ($main_query->have_posts()) : $main_query->the_post();
                                global $post;

                            $post_id = get_the_ID();
                            if(get_post_meta($post_id, "theme2035_pagetype", true) == "homesec" ){
                                    the_content();
                                }
                            endwhile;
                            endif; 
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    }else{
                    $videoPathHtml = substr($videopath, 0, -4);
                    ?>
                    <div class="video-area">
                      <div class="video-section-home">
                        <div class="video-wrapper">
                          <video class="mediaElement" preload="false" loop="true" autoPlay="true" muted>
                            <source type="video/mp4" src="<?php echo $videoPathHtml; ?>.mp4">
                            <source type="video/webm" src="<?php echo $videoPathHtml; ?>.webm">
                            <source type="video/ogg" src="<?php echo $videoPathHtml; ?>.ogg">
                          </video>
                          <div class="video-cover" style="background:url('<?php echo $videoimg; ?>') no-repeat;"></div>
                        </div>
                        <div class="video-content">
                          <div class="pos-center scroll-fade-effect">
                            <?php 
                            $type = 'page';
                            $args = array (
                             'post_type' => $type,
                             'post_status' => 'publish',
                             'paged' => $paged,
                             'posts_per_page' => 50,
                             'ignore_sticky_posts'=> 1,
                            );
                            $main_query = new WP_Query($args); 
                            if( have_posts() ) :  
                                while ($main_query->have_posts()) : $main_query->the_post();
                                global $post;

                            $post_id = get_the_ID();
                            if(get_post_meta($post_id, "theme2035_pagetype", true) == "homesec" ){
                                    the_content();
                                }
                            endwhile;
                            endif; 
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    }}else if($theme_prefix['home-page-type'] == "sliderrev" ){ ?>

                         
                            <?php 
                            $type = 'page';
                            $args = array (
                             'post_type' => $type,
                             'post_status' => 'publish',
                             'paged' => $paged,
                             'posts_per_page' => 50,
                             'ignore_sticky_posts'=> 1,
                            );
                            $main_query = new WP_Query($args); 
                            if( have_posts() ) :  
                                while ($main_query->have_posts()) : $main_query->the_post();
                                global $post;

                            $post_id = get_the_ID();
                            if(get_post_meta($post_id, "theme2035_pagetype", true) == "homesec" ){
                                    the_content();
                                }
                            endwhile;
                            endif; 
                            ?>
                        

                    <?php }else { ?>


                          <div class="pos-center scroll-fade-effect">
                            <?php 
                            $type = 'page';
                            $args = array (
                             'post_type' => $type,
                             'post_status' => 'publish',
                             'paged' => $paged,
                             'posts_per_page' => 50,
                             'ignore_sticky_posts'=> 1,
                            );
                            $main_query = new WP_Query($args); 
                            if( have_posts() ) :  
                                while ($main_query->have_posts()) : $main_query->the_post();
                                global $post;

                            $post_id = get_the_ID();
                            if(get_post_meta($post_id, "theme2035_pagetype", true) == "homesec" ){
                                    the_content();
                                }
                            endwhile;
                            endif; 
                            ?>
                            <?php     $count_posts = wp_count_posts('slider');
                                  $sliderc = $count_posts->publish; //
                               if($sliderc > 1){ ?>
                            <div class="right-wrapper">
                                <a id="nexta"></a>
                            </div>
                            <div class="left-wrapper">
                                <a id="preva"></a>
                            </div>
                            <?php } ?>
                          </div>
<?php } ?>
</div>  