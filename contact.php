<?php $contact = new WP_Query(array(
            'posts_per_page'=> -1,
            'post_type'=> 'contact_info'
          )); ?>
<?php if($contact-> have_posts()): ?>
<?php while($contact-> have_posts()): ?>  <?php $contact-> the_post(); ?>
	<section class="contact" id="contact">
		<div class="filter"></div>
		<div class="contactInfo clearfix">
			<div class="phone tile">
				<img src="<?php bloginfo('template_url'); ?>/images/phone.png" alt="">
				<p class="phone"><strong>Phone:</strong> <?php the_field('phone'); ?></p>
				<p class="fax"><strong>Fax:</strong> <?php the_field('fax'); ?></p>
			</div><!-- .phone -->
			<div class="location tile">
				<img src="<?php bloginfo('template_url'); ?>/images/mapmarker.png" alt="">
				<p><?php the_field('address'); ?></p>
				<p><?php the_field('city'); ?>, <?php the_field('province') ?></p>
				<p><?php the_field('postal_code'); ?></p>
			</div><!-- .location -->
			<div class="email tile">
				<img src="<?php bloginfo('template_url'); ?>/images/mailme.png" alt="">
				<p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
			</div><!-- .email -->
		</div><!-- .contactInfo -->
		<h2>Contact</h2>
		<?php the_content(); ?>
	</section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>