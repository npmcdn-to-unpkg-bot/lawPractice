<?php $spec = new WP_Query(array(
            'posts_per_page'=> -1,
            'post_type'=> 'specialty'
          )); ?>
    <?php if($spec-> have_posts()): ?>

<!-- 
========================
SECTION SPECIALTY BEGINS
========================
-->
<section class="specialty clearfix">
  <?php while($spec-> have_posts()): ?> 
    <?php $spec-> the_post(); ?>
    <div class="item <?php the_title(); ?>">
      <?php $icon = get_field('icon'); ?>
      <img src="<?php echo $icon['sizes']['thumbnail'] ?>" alt="">
      <h2><?php the_title(); ?></h2>
      <h4><?php the_field('description'); ?></h4>
      <p><a href="<?php the_field('hyperlink'); ?>" target="_blank">Learn more</a></p>
    </div><!-- .item -->
  <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</section><!-- .specialty -->
<!-- 
======================
SECTION SPECIALTY ENDS
======================
-->
<?php endif; ?>