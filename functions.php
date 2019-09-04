<?php 

	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	//Add menus 
	register_nav_menus( array(
		'primary' => 'Primary Menu',
	) );

	add_theme_support('post-thumbnails');

	function set_excerpt_length()
	{
		return 50;
	}

	add_filter('excerpt_length','set_excerpt_length');
	function init_widgets($id)
	{
		register_sidebar([
			'name' => 'Sidebar',
			'id'   => 'sidebar',
			'before_widget' => '<div class="sidebar-module">',
			'after_widget'  => '</div>',
			'before_title'	=> '<h4>',
			'after_title'	=> '</h4>',		
		]);
		register_sidebar([
			'name' => 'Box1',
			'id'   => 'box1',
			'before_widget' => '<div class="col-md-3 main-content">',
			'after_widget'  => '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',		
		]);
		register_sidebar([
			'name' => 'Box2',
			'id'   => 'box2',
			'before_widget' => '<div class="col-md-3 main-content">',
			'after_widget'  => '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',		
		]);
		register_sidebar([
			'name' => 'Box3',
			'id'   => 'box3',
			'before_widget' => '<div class="col-md-3 main-content">',
			'after_widget'  => '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',		
		]);
	}
	add_action('widgets_init','init_widgets');

	//post-formats

	add_theme_support('post-formats',array('aside','gallery'));

	//include customizer file

	require get_template_directory().'/inc/customizer.php';