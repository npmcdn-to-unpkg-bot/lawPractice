<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="clearfix">
    <div class="logo">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="">
        <h3><?php bloginfo( 'name' ); ?></h3>
      </a>
    </div><!-- .logo -->  
    <?php wp_nav_menu( array(
        'container' => 'nav',
        'theme_location' => 'primary'
      )); ?>
      <ul class="social">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
      </ul><!-- .social -->
    <div class="searchToggle"><i class="fa fa-search"></i></div><!-- .searchToggle -->
      <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
    
  </header><!-- /.header -->

