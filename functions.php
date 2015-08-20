<?php

	// Enqueue Script
	add_action( 'wp_enqueue_scripts', 'aptnews_scripts' );
	function aptnews_scripts() {
		// STYLE
		wp_enqueue_style('aptnews-bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', false);
		wp_enqueue_style('aptnews-style', get_stylesheet_uri());
		if(is_front_page()) {
			wp_enqueue_style('aptnews-index', get_template_directory_uri() . '/css/index.css');
			wp_enqueue_style('aptnews-extra-grid', get_template_directory_uri() . '/css/extra-grid.css');
			wp_enqueue_style('aptnews-menu-icons', get_template_directory_uri() . '/css/menu-icons/menu-icons.css');
		} elseif (is_archive() || is_search() || is_home()) {
			wp_enqueue_style('aptnews-archive', get_template_directory_uri() . '/css/archive.css');
		} else {
			wp_enqueue_style('aptnews-single', get_template_directory_uri() . '/css/single.css');
		}
		
		// SCRIPT
		if(is_front_page()) {
			// Register SCRIPT
			wp_register_script('aptnews-showFullImg', get_template_directory_uri() . '/js/lib/showFullImg/showFullImg.js', array('jquery'), 1);
			// Localize script
			wp_localize_script('aptnews-showFullImg', 'localized_data', array('theme_uri' => get_template_directory_uri(), 'site_url'=>site_url()));
			// Enqueue Script
			wp_enqueue_script('aptnews-showFullImg');
			wp_enqueue_script('aptnews-index', get_template_directory_uri() . '/js/index.js', array('jquery'), 1);
		} elseif (is_archive() || is_search() || is_home()) {
			// Register SCRIPT
			wp_register_script('aptnews-showFullImg', get_template_directory_uri() . '/js/lib/showFullImg/showFullImg.js', array('jquery'), 1);
			// Localize script
			wp_localize_script('aptnews-showFullImg', 'localized_data', array('theme_uri' => get_template_directory_uri(), 'site_url'=>site_url()));
			// Enqueue Script
			wp_enqueue_script('aptnews-showFullImg');
			wp_enqueue_script('aptnews-archive', get_template_directory_uri() . '/js/archive.js', array('jquery'), 1);
			wp_enqueue_script('aptnews-stickykit', get_template_directory_uri() . '/js/lib/sticky-kit.js', array('jquery'), 1);
		} else {
			// Register SCRIPT
			wp_register_script('aptnews-single', get_template_directory_uri() . '/js/single.js', array('jquery'), 1);
			// Localize script
			wp_localize_script('aptnews-single', 'localized_data', array('theme_uri' => get_template_directory_uri(), 'site_url'=>site_url()));
			// Enqueue Script
			wp_enqueue_script('aptnews-single');
		}
	}

	// add theme support
	add_action( 'after_setup_theme', 'aptnews_setup' );
	function aptnews_setup() {
		// Textdomain
		load_theme_textdomain( 'aptnews', get_template_directory() . '/languages' );
		add_theme_support( 'custom-header', array(
			'default-image'          => get_template_directory_uri() . '/img/APT-news-logo.jpg',
			'width'                  => 370,
			'height'                 => 220,
		) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );
		register_nav_menus( array(
			'primary' => esc_html__( 'Top Menu', 'aptnews' ),
			'right-menu' => esc_html__( 'Right Menu', 'aptnews' ),
		) );

	}

	/**
	 * Register widget area.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
	 */
	function aptnews_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Footer left column', 'aptnews' ),
			'id'            => 'footer-left',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer middle column', 'aptnews' ),
			'id'            => 'footer-middle',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer right column', 'aptnews' ),
			'id'            => 'footer-right',
		) );
	}
	add_action( 'widgets_init', 'aptnews_widgets_init' );
	
	/***************************
		Require other plugins
	 ***************************/
	// add_action('admin_notices', 'aptnews_require_plugins');
	// function aptnews_require_plugins() {
	// 	$plugin_messages = array();
	// 	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// 	// Download the Yoast WordPress SEO plugin
	// 	if(!is_plugin_active( 'wordpress-seo/wp-seo.php' ))	{
	// 		$plugin_messages[] = 'This theme requires you to install the Yoast WordPress SEO plugin, <a href="http://wordpress.org/extend/plugins/wordpress-seo/">download it from here</a>.';
	// 	}

	// 	// Download the Disqus comment system
	// 	if(!is_plugin_active( 'disqus-comment-system/disqus.php' ))	{
	// 		$plugin_messages[] = 'This theme requires you to install the Disqus comment system plugin, <a href="http://wordpress.org/extend/plugins/disqus-comment-system/">download it from here</a>.';
	// 	}

	// 	// Download the WordPress popular posts plugin
	// 	if(!is_plugin_active( 'wordpress-popular-posts/wordpress-popular-posts.php' ))	{
	// 		$plugin_messages[] = 'This theme requires you to install the WordPress Popular Post plugin, <a href="http://wordpress.org/extend/plugins/wordpress-popular-posts/">download it from here</a>.';
	// 	}

	// 	if(count($plugin_messages) > 0)	{
	// 		echo '<div id="message" class="error">';

	// 			foreach($plugin_messages as $message)
	// 			{
	// 				echo '<p><strong>'.$message.'</strong></p>';
	// 			}

	// 		echo '</div>';
	// 	}
	// }

	/* Uilities Function */
	require get_template_directory() . '/inc/utilities.php';

	/* Custom template tags for this theme. */
	require get_template_directory() . '/inc/template-tags.php';

	/* Load kirki for theme customizer. */
	require get_template_directory() . '/inc/kirki/kirki.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/customizer.php';
	
	/* Load Jetpack compatibility file. */
	require get_template_directory() . '/inc/jetpack.php';