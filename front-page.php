<?php get_header();  ?>
<div class="sliderWrap">
  <section class="hero main-carousel">
   <?php $slider = new WP_Query(array(
            'posts_per_page'=> -1,
            'post_type'=> 'slider'
          )); ?>
    <?php if($slider-> have_posts()): ?>
    <?php while($slider-> have_posts()): ?> 
    <?php $slider-> the_post(); ?>
      <?php $image = get_field('image'); ?>
      <div class="carousel-cell">
      <img src="<?php echo $image['sizes']['large'] ?>" class="sliderImage" alt="">
      <div class="contentOverlay">
        <h2 class="headline"><?php the_field('headline'); ?></h2>
        <h5 class="subtitle"><?php the_field('subtitle'); ?></h5>
        <a href="<?php the_field('hyperlink'); ?>"><button>Read More</button></a>
      </div><!-- .contentOverlay -->
    </div><!-- .carousel-cell --> 
    <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </section><!-- .hero -->
<!-- 
=================
SECTION HERO ENDS
=================
-->
  <?php get_template_part('stats'); ?>
</div><!-- .sliderWrap -->
  <?php get_template_part('lead'); ?>
  <?php get_template_part('specialty'); ?>
  <?php get_template_part('contact'); ?>
  <?php get_footer(); ?>

