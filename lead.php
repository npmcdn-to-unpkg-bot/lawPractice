<?php $leadquote = new WP_Query(array(
            'posts_per_page'=> -1,
            'post_type'=> 'leadquote'
          )); ?>
    <?php if($leadquote-> have_posts()): ?>
    <?php while($leadquote-> have_posts()): ?> 
    <?php $leadquote-> the_post(); ?>
<!-- 
===================
SECTION LEAD BEGINS
===================
-->
    <section class="lead" id="about">
        <h2 class="objective"><?php the_field('objective'); ?></h2>
        <blockquote><h3 class="testimonial"><?php the_field('testimonial'); ?></h3></blockquote>
        <p class="source"><?php the_field('quote_source'); ?></p>
    </section><!-- .lead -->
<!-- 
=================
SECTION LEAD ENDS
=================
-->
    <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>