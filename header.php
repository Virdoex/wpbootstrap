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
  <?php if(!(is_front_page())): ?>
    <div class="container blog">
        <h1 class="display-3"><?php bloginfo('name'); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
    </div>
  <?php endif; ?>