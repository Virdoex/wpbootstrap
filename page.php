<?php get_header(); ?>
    
  <div class="container">  
    <div class="row">
      <div class="col-lg-7 blog-main">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="blog-post">
          <h1 class="display-5"><?php the_title(); ?></h1>
          <p class="blog-post-meta"><?php the_time('F j Y g:i a'); ?> by
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
          </p>
          <?php if(has_post_thumbnail()): ?>
            <div class="blog-thumb">
              <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" style="width:100%;height:300px;">
            </div>
          <?php endif; ?>
          <div class="blog-content">
            <?php the_content(); ?>
          
            
          </div>
        </div>
        <?php endwhile; else: endif; ?>
      </div>
    
<?php get_footer(); ?>
