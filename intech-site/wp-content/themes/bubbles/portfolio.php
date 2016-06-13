<?php global $theme_prefix; ?> 
<?php get_header(); ?>
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

  <!-- PORTFOLIO -->

  <div class="portfolio-top"></div>
  <div class="container portfolio-wrapper">
    <div class="row">
      <div id="portfolio-content">     
          <div id="portfolio-details-box"></div>
      </div>
      <a id="portfolio-close" href="#"></a>
    </div>
    <div class="portfolio-loading"></div>
  </div>

<div class="portfolio pos-center clearfix">

    <?php  if($theme_prefix['portfolio-filter'] == "1"  )  { ?>     

    <div class="portfolio-filters pos-center clearfix">
      <?php $portfolio_filters = get_terms('portfolio_filter');
        if($portfolio_filters): ?>
            <ul>
              <li><a href="#" data-filter="*" class="active"><?php echo __('All', 'theme2035-fm'); ?></a></li>  
              <?php foreach($portfolio_filters as $portfolio_filter): ?>
                <?php if(get_post_meta(get_the_ID(), 'portfoliofilter', false)  && !in_array('0', get_post_meta(get_the_ID(), 'portfoliofilter', false))): ?>
                  <?php if(in_array($portfolio_filter->term_id, get_post_meta(get_the_ID(), 'portfoliofilter', false))): ?>
                    <li><a href="#" data-filter=".<?php echo $portfolio_filter->slug; ?>"><?php echo $portfolio_filter->name; ?></a></li>
                  <?php endif; ?>
                <?php else: ?>
                  <li><a href="#" data-filter=".<?php echo $portfolio_filter->slug; ?>"><?php echo $portfolio_filter->name; ?></a></li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    <?php } else {} ?>  
    <div class="work-list portfolio-list">
      <ul id="container_portfolio" class="portfolio-box clearfix">
      <?php $count_posts = wp_count_posts( 'portfolio' )->publish; if($count_posts < 6){ $count_posts = 3; }else{ $count_posts = 6; };
          if(get_query_var('page')){$paged = get_query_var('page');}else if(get_query_var('paged')){$paged = get_query_var('paged');}
          $portfolioQuery = new WP_Query(array( 
            'post_type' => 'portfolio',
            'paged'=>$paged,
            'post_status'     => 'publish',
            'posts_per_page' => $count_posts
          ));
        if($portfolioQuery->have_posts()) : while($portfolioQuery->have_posts()) : $portfolioQuery->the_post();  ?>
          <li class="col-lg-4 col-sm-4 view item <?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?><?php if($terms) : foreach ($terms as $term) { echo $term->slug.' '; } endif; ?>">
              <?php the_post_thumbnail("portfolio-image"); ?>
              <div class="mask pos-center">  
                  <div class="inner-mask pos-center">
                    <a class="portfolio-details" href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <div class="tags-portfolio"><?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>      
                    <?php if($terms) : foreach ($terms as $term) { echo '<p>'.$term->slug.'</p>'; } endif; ?> </div>
                    </a>
                  </div>
              </div>
          </li> 
        <?php endwhile; ?>
              </ul>
        <?php 
          Theme2035_portfolio_pagination($portfolioQuery->max_num_pages); 
          endif;
          wp_reset_query();
        ?>
    </div>
</div>
<!-- PORTFOLIO -->