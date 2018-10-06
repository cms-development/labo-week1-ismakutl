<?php
  function content_theme_css() {
	wp_enqueue_style('normalize', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
  }

  function theme_slug_widgets_init() {
		register_sidebar(array(
			'id' => 'sidebar-1',
			'name' => 'Sidebar Main',
			'before_widget' => '<div class="widget-container">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	}

	add_action('wp_enqueue_scripts', 'content_theme_css');
	add_action('widgets_init', 'theme_slug_widgets_init');