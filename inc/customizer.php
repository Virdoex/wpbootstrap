<?php 

	function my_customize_register($wp_customize)
	{
		$wp_customize->add_section('landing',array(
			'title' => __('landing','wpbootstrap'),
			'description' => sprintf(__('Options for landing page','wpbootstrap')),
			'priority'	  => 130
		));

		$wp_customize->add_setting('landing_background_image',array(
			'default' => get_bloginfo('template_directory').'/images/rsc.jpeg',
			'type'	  => 'theme_mod'

		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'landing_background_image',array(
			'label'	=> __('Backgroun Image','wpbootstrap'),
			'section' => 'landing',
			'settings' => 'landing_background_image',
			'priority' => 1
			)));

		$wp_customize->add_setting('landing_heading',array(
			'default' => _x('Custom Bootstrap Wordpress Theme','wpbootstrap'),
			'type'	  => 'theme_mod'

		));

		$wp_customize->add_control('landing_heading',array(
			'label'	=> __('Heading','wpbootstrap'),
			'section' => 'landing',

			'priority' => 2
		));
		$wp_customize->add_setting('landing_text',array(
			'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ','wpbootstrap'),
			'type'	  => 'theme_mod'

		));

		$wp_customize->add_control('landing_text',array(
			'label'	=> __('Text','wpbootstrap'),
			'section' => 'landing',

			'priority' => 3
		));

		//for button url
		$wp_customize->add_setting('btn_url',array(
			'default' => _x('http://deepakdhiman.tk/ ','wpbootstrap'),
			'type'	  => 'theme_mod'

		));

		$wp_customize->add_control('btn_url',array(
			'label'	=> __('Button URL','wpbootstrap'),
			'section' => 'landing',

			'priority' => 4
		));

		//for button text
		$wp_customize->add_setting('btn_text',array(
			'default' => _x('Read More ','wpbootstrap'),
			'type'	  => 'theme_mod'

		));

		$wp_customize->add_control('btn_text',array(
			'label'	=> __('Text','wpbootstrap'),
			'section' => 'landing',

			'priority' => 5
		));

	}

	add_action('customize_register','my_customize_register');