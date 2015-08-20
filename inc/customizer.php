<?php
	/* Create Kirki Configuration */
	function aptnews_kirki_configuration() {
		return array( 'url_path'     => get_stylesheet_directory_uri() . '/inc/kirki/' );
	}
	add_filter( 'kirki/config', 'aptnews_kirki_configuration' );
	/* Turn off sanitization for input */
	function do_not_filter_anything( $value ) {
		return $value;
	}

	Kirki::add_config( 'my_config', array(
		'option_type' => 'theme_mod',
		'capability'  => 'edit_theme_options',
	) );

// Panel & Section & Field
	Kirki::add_panel( 'frontpage_leftbar_panel', array(
		'priority'    => 10,
		'title'       => __( 'Home - Left Bar', 'aptnews' ),
		'description' => __( 'Customize left bar', 'aptnews' ),
	) );
		Kirki::add_section( 'frontpage_leftbar_tags_section', array(
			'title'          => __( 'Tags', 'aptnews'),
			'panel'          => 'frontpage_leftbar_panel', // Not typically needed.
			'capability'     => 'edit_theme_options',
			'theme_supports' => '', // Rarely needed.
		) );
			Kirki::add_field( 'my_config', array(
				'type'        => 'text',
				'settings'     => 'frontpage_leftbar_tags_field',
				'label'       => __( 'Tags', 'aptnews' ),
				'description' => __( 'show most popular by given', 'aptnews' ),
				'section'     => 'frontpage_leftbar_tags_section',
			) );
		Kirki::add_section( 'fontpage_leftbar_ads_section', array(
			'title'          => __( 'Ads 300 x 250px', 'aptnews'),
			'panel'          => 'frontpage_leftbar_panel', // Not typically needed.
			'capability'     => 'edit_theme_options',
			'theme_supports' => '', // Rarely needed.
		) );
			Kirki::add_field( 'my_config', array(
				'type'        => 'radio-buttonset',
				'settings'     => 'fontpage_leftbar_ads_btnset',
				'label'       => __( 'Show ads banner', 'aptnews' ),
				'description' => __( 'There are 2 ways to show Ads banner', 'aptnews' ),
				'section'     => 'fontpage_leftbar_ads_section',
				'default'     => 'img',
				'priority'    => 1,
				'choices'     => array(
					'img' => __( 'Upload image', 'aptnews' ),
					'code' => __( 'Adsense code', 'aptnews' ),
				),
			) );
			Kirki::add_field( 'my_config', array(
				'type'        => 'image',
				'settings'     => 'fontpage_leftbar_ads_image',
				'label'       => __( 'Ads image', 'aptnews' ),
				'description' => __( 'This Ads will be show in left bar. Recommended image size is 300 x 250px', 'aptnews' ),
				'section'     => 'fontpage_leftbar_ads_section',
				'default'     => get_template_directory_uri() .'/img/ads-300x250.jpg',
				'priority'    => 2,
			) );
			Kirki::add_field( 'my_config', array(
				'type'        => 'text',
				'settings'     => 'fontpage_leftbar_ads_image_link',
				'label'       => __( 'link for Ads image', 'aptnews' ),
				'description' => __( 'This link will be used for image link', 'aptnews' ),
				'section'     => 'fontpage_leftbar_ads_section',
				'priority'    => 3,
			) );
			Kirki::add_field( 'my_config', array(
				'type'        => 'textarea',
				'settings'     => 'fontpage_leftbar_ads_adCode',
				'label'       => __( 'Adsense Code', 'aptnews' ),
				'description' => __( 'This Ads will be show in left bar', 'aptnews' ),
				'section'     => 'fontpage_leftbar_ads_section',
				'default'     => '',
				'priority'    => 4,
				'sanitize_callback' => 'do_not_filter_anything',
			) );
	Kirki::add_section( 'fontpage_runningtext_section', array(
		'title'          => __( 'Home - Running text', 'aptnews'),
		'panel'          => '', // Not typically needed.
		'capability'     => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'textarea',
			'settings'     => 'fontpage_runningtext_field',
			'label'       => __( 'Text for running text', 'aptnews' ),
			'description' => __( 'This text will be shown under top menu', 'aptnews' ),
			'section'     => 'fontpage_runningtext_section',
			'default'     => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim',
			'priority'    => 1,
		) );
	Kirki::add_section( 'archive_top_ads_section', array(
		'title'          => __( 'Archive page - Ads', 'aptnews'),
		'description' => __( 'recommended Ads size is 970 x 90 px', 'aptnews' ),
		'panel'          => '', // Not typically needed.
		'capability'     => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'radio-buttonset',
			'settings'     => 'archive_top_ads_btnset',
			'label'       => __( 'Show ads banner', 'aptnews' ),
			'description' => __( 'There are 2 ways to show Ads banner', 'aptnews' ),
			'section'     => 'archive_top_ads_section',
			'default'     => 'img',
			'priority'    => 1,
			'choices'     => array(
				'img' => __( 'Upload image', 'aptnews' ),
				'code' => __( 'Adsense code', 'aptnews' ),
			),
		) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'image',
			'settings'     => 'archive_top_ads_image',
			'label'       => __( 'Ads image', 'aptnews' ),
			'section'     => 'archive_top_ads_section',
			'default'     => get_template_directory_uri() .'/img/ads-970x90.png',
			'priority'    => 2,
		) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'text',
			'settings'     => 'archive_top_ads_image_link',
			'label'       => __( 'link for Ads image', 'aptnews' ),
			'description' => __( 'This link will be used for image link', 'aptnews' ),
			'section'     => 'archive_top_ads_section',
			'priority'    => 3,
		) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'textarea',
			'settings'     => 'archive_top_ads_adscode',
			'label'       => __( 'Adsense Code', 'aptnews' ),
			'description' => __( 'This Ads will be show on the top of screen', 'aptnews' ),
			'section'     => 'archive_top_ads_section',
			'default'     => '',
			'priority'    => 4,
			'sanitize_callback' => 'do_not_filter_anything',
		) );
	Kirki::add_section( 'single_leftbar_ads_section', array(
		'title'          => __( 'Post page - Ads', 'aptnews'),
		'description' => __( 'recommended Ads size is 300 x 600 px', 'aptnews' ),
		'panel'          => '', // Not typically needed.
		'capability'     => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'radio-buttonset',
			'settings'     => 'single_leftbar_ads_btnset',
			'label'       => __( 'Show ads banner', 'aptnews' ),
			'description' => __( 'There are 2 ways to show Ads banner', 'aptnews' ),
			'section'     => 'single_leftbar_ads_section',
			'default'     => 'img',
			'priority'    => 1,
			'choices'     => array(
				'img' => __( 'Upload image', 'aptnews' ),
				'code' => __( 'Adsense code', 'aptnews' ),
			),
		) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'image',
			'settings'     => 'single_leftbar_ads_image',
			'label'       => __( 'Ads image', 'aptnews' ),
			'section'     => 'single_leftbar_ads_section',
			'default'     => get_template_directory_uri() .'/img/ads-300x600.png',
			'priority'    => 2,
		) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'text',
			'settings'     => 'single_leftbar_ads_image_link',
			'label'       => __( 'link for Ads image', 'aptnews' ),
			'description' => __( 'This link will be used for image link', 'aptnews' ),
			'section'     => 'single_leftbar_ads_section',
			'priority'    => 3,
		) );
		Kirki::add_field( 'my_config', array(
			'type'        => 'textarea',
			'settings'     => 'single_leftbar_ads_adscode',
			'label'       => __( 'Adsense Code', 'aptnews' ),
			'description' => __( 'This Ads will be show on the left column', 'aptnews' ),
			'section'     => 'single_leftbar_ads_section',
			'default'     => '',
			'priority'    => 4,
			'sanitize_callback' => 'do_not_filter_anything',
		) );