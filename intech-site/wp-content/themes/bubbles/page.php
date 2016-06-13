<?php get_header(); ?>
<?php get_template_part("menu"); ?>
<?php if (have_posts()) :  
while ( have_posts() ) : the_post();
	$name_of_post = get_post_meta( get_the_ID(), 'theme2035_section_name', true );
	$post_section_name = get_post_meta( get_the_ID(), 'theme2035_section_name', true );?>

<div class="container marginb60 page">
      <div class="pos-center padt60 animated-area">
          <div class="animated" data-animation="fadeInDown" data-animation-delay="0.3s"><div class="title"><?php echo the_title();  ?></div></div>
          <hr class="underline pos-center margint5" />
          <?php $title = get_post_meta( get_the_ID(), 'theme2035_page_title', true ); if( $title != "" ){ ?>
          <div class="animated" data-animation="fadeInDown" data-animation-delay="0.4s"><div class="title-two margint20"> <?php echo $title; ?> </div></div>
          <?php } ?>
          <?php $desc = get_post_meta( get_the_ID(), 'theme2035_page_desc', true ); if( $title != "" ){ ?>
          <div class="animated" data-animation="fadeInDown" data-animation-delay="0.5s"><p class="title-info margint20 pos-center"> <?php echo $desc; ?> </p></div>
          <?php } ?>
      </div>
        <?php the_content(); ?>
      <div class="margint60">
        <?php comments_template();  ?>
      </div>
</div>
</div>

<?php  endwhile; endif;?>
<?php get_footer(); ?>

