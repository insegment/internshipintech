<?php
function Theme2035_customjs() {
global $theme_prefix; 
?>

<script type="text/javascript">
<?php 
if( $theme_prefix['custom-scroll'] == "1" ){  ?>
/* Smooth Scroll */
jQuery("html").niceScroll({cursorwidth:"<?php echo $theme_prefix['scroll-width']; ?>px"});
<?php } ?>
jQuery.noConflict(); (function($) { 
  jQuery(document).ready(function($){
  /* Menu Scrool Speed */
  jQuery('#nav').onePageNav({
  filter: ':not(.external)',
  scrollSpeed: <?php echo $theme_prefix['menu_scroll_speed']; ?>,
  scrollOffset: 60
  });
  jQuery('.percentage1').easyPieChart({
    animate: 1000,
    scaleColor: false,
    lineCap: 'butt',
    barColor: '<?php echo $theme_prefix['main-color']; ?>',
    trackColor: '#f5f5f5',
    lineWidth: 3,
    size: 165
});
jQuery('.percentage2').easyPieChart({
    animate: 1000,
    scaleColor: false,
    lineCap: 'butt',
    barColor: '<?php echo $theme_prefix['second-color']; ?>',
    trackColor: '#f5f5f5',
    lineWidth: 3,
    size: 165
});
jQuery('.percentage3').easyPieChart({
    animate: 1000,
    scaleColor: false,
    lineCap: 'butt',
    barColor: '<?php echo $theme_prefix['third-color']; ?>',
    trackColor: '#f5f5f5',
    lineWidth: 3,
    size: 165
});
jQuery('.percentage4').easyPieChart({
    animate: 1000,
    scaleColor: false,
    lineCap: 'butt',
    barColor: '<?php echo $theme_prefix['fourth-color']; ?>',
    trackColor: '#f5f5f5',
    lineWidth: 3,
    size: 165
});
jQuery('.percentage5').easyPieChart({
    animate: 1000,
    scaleColor: false,
    lineCap: 'butt',
    barColor: '#02a7d5',
    trackColor: '#f5f5f5',
    lineWidth: 3,
    size: 165
});
jQuery('.percentage6').easyPieChart({
    animate: 1000,
    scaleColor: false,
    lineCap: 'butt',
    barColor: '#ed503c',
    trackColor: '#f5f5f5',
    lineWidth: 3,
    size: 165
});
<?php  if($theme_prefix['home-page-type'] == "slider" && is_page_template('homepage.php')) { ?>
jQuery(function($){       
$.supersized({
  slideshow     :1,     // Slideshow on/off
  autoplay      :1,     // Slideshow starts playing automatically
  slide_interval    : <?php echo $theme_prefix['home-background-speed']; ?>,    // Length between transitions
  transition      : <?php echo $theme_prefix['slider-effect']; ?>,     // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
  transition_speed  : <?php echo $theme_prefix['home-transition-speed']; ?>,    // Speed of transition
  pause_hover     :0,     // Pause slideshow on hover
  performance     :1,     // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
  image_protect   :1,     // Disables image dragging and right click with Javascript
  keyboard_nav            :   1,      // Keyboard navigation on/off
  thumbnail_navigation    :   1,      // Thumbnail navigation
  slides        :[      // Slideshow Images
    
        <?php
        $args2 = array (
         'post_type' => "slider",
         'post_status' => 'publish',
         'paged' => "slider",
         'posts_per_page' => 0,
         'ignore_sticky_posts'=> 1
        );



                                  $count_posts = wp_count_posts('slider');
                                  $sliderc = $count_posts->publish; //
        $i = 0;
        $wp_query2 = new WP_Query($args2); 
        if ( $wp_query2->have_posts() ) :
            while ( $wp_query2->have_posts() ) : $wp_query2->the_post();
          global $post;
          $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?> 
          <?php $count_posts = wp_count_posts('slider');
          $slidercount = $count_posts->publish; //
          ?>
          <?php echo " {image : '"; echo $src[0]; echo "'}";
          if( $i < $slidercount-1 ) { echo ","; }
          $i++;
          endwhile;
          endif; 
           ?>  ] });

    <?php if($sliderc > 1){ ?>

    $("#nexta").click(function(){
      api.nextSlide();
    });

    $("#preva").click(function(){
      api.prevSlide();
    });
    <?php } ?>
           });   
  <?php } ?>
jQuery("#clients-id").carouFredSel({
    responsive: true,
    scroll: {
      items : 1,
      pauseOnHover : true
    },
    items: 6,
    auto: <?php echo $theme_prefix['carousel-speed'];  ?>,
    prev: '#cprevtwo',
    next: '#cnexttwo',
    swipe: {
        onTouch: true
    },
});
/* Carousels */
jQuery("#tweet_list").carouFredSel({
    responsive: true,
    scroll: {
      items : 1,
      pauseOnHover : true
    },
    items: 1,
    auto: <?php echo $theme_prefix['carousel-speed']; ?>,
    prev: '#cprev',
    next: '#cnext',
    swipe: {
        onTouch: true
    },

});

jQuery('.text-slider, .home-slider').flexslider({
  animation: "slide",
  directionNav: false,
  controlNav: false,
  direction: "vertical",
    slideshowSpeed: <?php echo $theme_prefix['home-text-speed']; ?>,
    animationSpeed: <?php echo $theme_prefix['home-text-animation-speed']; ?>,
    smoothHeight: true
});
/* Google map */
<?php if(is_page_template('homepage.php')) {?>
  if (jQuery('#map').length > 0) {
  var map = new GMaps({
    el: '#map',
    scrollwheel: false,
    lat: <?php echo $theme_prefix['latitude'] ?>,
    lng: <?php echo $theme_prefix['longitude'] ?>
  });
  map.addMarker({
      lat: <?php echo $theme_prefix['latitude'] ?>,
      lng: <?php echo $theme_prefix['longitude'] ?>
  });
}
<?php } ?>
  });
})(jQuery);

</script>
<?php }
add_action( 'wp_footer', 'Theme2035_customjs', 20 );
?>