<div class="clearfix customercommentsarea animated-area">
  <div class="pos-center margint60">
      <div class="title"><?php echo the_title();  ?></div>
      <hr class="underline pos-center margint5"/>
      <?php $title = get_post_meta( get_the_ID(), 'theme2035_page_title', true ); if( $title != "" ){ ?>
      <div class="title-two margint20"> <?php echo $title; ?> </div>
      <?php } ?>
      <?php $desc = get_post_meta( get_the_ID(), 'theme2035_page_desc', true ); if( $title != "" ){ ?>
      <p class="title-info margint20 pos-center"> <?php echo $desc; ?> </p>
      <?php } ?>
  </div>

    <div id="comments" class="customer-comments clearfix">
        <div class="container margint20">
            <div class="container">
                <div class="row">
                  <ul>
    <?php
       global $wp_query;
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $port_args = array(
            'post_type'     => 'customercomments',
            'posts_per_page'  => '-1',
            'post_status'     => 'publish',
            'paged'       => $paged
        );
        $wp_port_query = new WP_Query($port_args);
        if( have_posts() ) : 
        while ( $wp_port_query->have_posts() ) : $wp_port_query->the_post(); ?>
        <li class="customers-col">
            <div class="customer-box clearfix margint60">
              <a href="<?php  echo get_post_meta( get_the_ID(), 'theme2035_customer_web_site', true); ?>" data-toggle="tooltip" title=" <?php echo get_post_meta( get_the_ID(), 'theme2035_customer_desc', true); ?> ">
                  <div class="col-lg-4 col-sm-4 col-xs-4 customer-image">
                      <?php the_post_thumbnail('customer-image'); ?>
                  </div>
                  <div class="col-lg-8 col-sm-8 col-xs-8">
                      <h3><?php the_title(); ?></h3>
                      <p><?php echo get_post_meta( get_the_ID(), 'theme2035_customer_position', true); ?></p>
                  </div>
                </a>
            </div>
        </li>
        <?php endwhile; endif; 
       wp_reset_query();?> 
                    </ul>
                </div>
            </div>
        </div>     
    </div>
  </div>

