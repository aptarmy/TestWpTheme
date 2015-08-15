<?php

// Enqueue Script
function aptnews_scripts() {
	// STYLE
	wp_enqueue_style( 'aptnews-style', get_stylesheet_uri() );
	wp_enqueue_style( 'aptnews-bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', false);
	
	// SCRIPT
	wp_enqueue_script( 'aptnews-index', get_template_directory_uri() . '/js/index.js', array('jquery'), 1, false );
	wp_enqueue_script( 'aptnews-showFullImg', get_template_directory_uri() . '/js/lib/showFullImg/showFullImg.js', array('jquery'), 1, false );
}
add_action( 'wp_enqueue_scripts', 'aptnews_scripts' );

?>