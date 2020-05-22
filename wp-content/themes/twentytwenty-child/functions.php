<?php

	add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );

	function tt_child_enqueue_parent_styles() {
	   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	}
	function my_custom_scripts() {
		wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/slideshow.js', array( 'jquery' ),'',true );
	}
	add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
	
	?>