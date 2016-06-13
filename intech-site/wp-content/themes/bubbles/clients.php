<div class="clearfix animated-area">
    <div class="clients-page padt60 pos-center clearfix">
       <div class="title">CLIENTS</div>
       <hr class="underline pos-center margint5">
        <div class="container margint20 clientstwo">
            <ul id="clients-id" class=" client-logos">
              <?php
               global $wp_query;
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;
              $port_args = array(
                    'post_type'     => 'clients',
                    'posts_per_page'  => '-1',
                    'post_status'     => 'publish',
                    'paged'       => $paged
                );
              
                $wp_port_query = new WP_Query($port_args);
                if( have_posts() ) : 

                while ( $wp_port_query->have_posts() ) : $wp_port_query->the_post(); ?>
             
                <?php 
                  global $post;
                  $post_id = get_the_ID(); 
                  $web = get_post_meta( get_the_ID(), 'theme2035_clients_web_site', true );
                  $urls = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                 ?>
                <li><a href="<?php echo $web; ?>"> <img class="grayscale" src="<?php  echo $urls; ?>"> </a></li>

                <?php endwhile; endif; 
               wp_reset_query();?> 
              </ul>
              <div class="carousel-buttons">
                  <a id="cprevtwo"><img src="<?php echo THEMEROOT; ?>/images/left_dark.png" alt="" /></a>
                  <a id="cnexttwo"><img src="<?php echo THEMEROOT; ?>/images/right_dark.png" alt="" /></a>
              </div>
          </div>
      </div>    
  </div>
