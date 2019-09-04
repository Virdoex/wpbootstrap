		<div class="col-lg-1"></div>
		<div class="col-lg-3">
			<?php if(!(is_front_page())): ?>
				<?php if(is_active_sidebar('sidebar')): ?>
				
					<?php dynamic_sidebar('sidebar'); ?>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<footer class="container text-center">
  
  <p><small>&copy;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small></p>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/all.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
</body>

</html>