 <div class="blog-post">
    <h1 class="display-5">
      <?php if(is_single()): ?>
        <?php the_title();?>
      <?php else: ?>
         <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
      <?php endif; ?>
     </h1>
    <p class="blog-post-meta"><?php the_time('F j Y g:i a'); ?> by
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    </p>
    <?php if(has_post_thumbnail()): ?>
      <div class="blog-thumb">
        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" style="width:100%;height:300px;">
      </div>
      <?php endif; ?>
        <div class="blog-content">
          <?php if(is_single()): ?>
              <?php the_content(); ?>
          <?php else: ?>
              <?php the_excerpt(); ?>
          <?php endif; ?>
          
        </div>
        <?php if(is_single()): ?>

          <?php comments_template(); ?>
        <?php endif; ?>
</div>