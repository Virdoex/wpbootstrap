<?php get_header(); ?>
    
  <div class="container">  
    <div class="row">
      <div class="col-lg-7 blog-main">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <?php get_template_part('content',get_post_format()); ?>
        <?php endwhile; else: endif; ?>
      </div>
    
<?php get_footer(); ?>
