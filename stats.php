<?php $stats = new WP_Query(array(
            'posts_per_page'=> -1,
            'post_type'=> 'stats'
          )); ?>
    <?php if($stats-> have_posts()): ?>

<!-- 
====================
SECTION STATS BEGINS
====================
-->
<section class="stats">
  <?php while($stats-> have_posts()): ?> 
    <?php $stats-> the_post(); ?>
    <div class="item <?php the_title(); ?>">
    <div class="filter"></div>
      <h2><?php the_field('statistic'); ?></h2>
      <h4><?php the_field('description'); ?></h4>
    </div><!-- .item -->
  <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</section><!-- .stats -->
<!-- 
==================
SECTION STATS ENDS
==================
-->
<?php endif; ?>