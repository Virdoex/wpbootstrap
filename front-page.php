<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <title>
    <?php bloginfo('name'); ?> |
    <?php is_front_page()? bloginfo('description') : wp_title(); ?>
  </title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="author" content="Deepak Dhiman">
  <meta name="description" content="<?php bloginfo('descrition'); ?>">
  <meta name='viewport' content="width=device-width,initial_scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
 
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/src/app.css">
  <?php wp_head(); ?>
  <style type="text/css">
    .hero
    {
      background:linear-gradient(135deg,rgba(0,0,0,0.5),rgba(0,0,0,0.7)), url(<?php echo get_theme_mod('landing_background_image',get_bloginfo('template_directory').'/images/rsc.jpeg'); ?>) no-repeat center center;
    }
  </style>
</head>
<body >
  <header>
   
  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
      <?php
      wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
    </div>
  </nav>
  </header>
  

<div class="hero">
  <div class="hero-wrap text-center">
    <div class="caption ">
      <h2><?php echo get_theme_mod('landing_heading','Custom Bootstrap Wordpress Theme'); ?></h2>
      <p>
        <?php echo get_theme_mod('landing_text','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'); ?>
      </p>
     <a class="btn btn-primary" href="<?php echo get_theme_mod('btn_url','http://deepakdhiman.tk'); ?>"><?php echo get_theme_mod('btn_text','Get Started'); ?></a>
    </div>
  </div>
</div>
  <div class="container">  
    <section class="content">
      <div class="row">

         <?php if(is_active_sidebar('box1')): ?>
          <?php dynamic_sidebar('box1'); ?>
         <?php endif; ?>
          <div class="col-md-1"></div>
          <?php if(is_active_sidebar('box2')): ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
          <div class="col-md-1"></div>
          <?php if(is_active_sidebar('box3')): ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
          <div class="col-md-1"></div>
      </div>
  </section>
</div>
<?php get_footer(); ?>