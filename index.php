<?php /* Template Name: Home page */ ?>
<?php get_header(); ?>
<div class='container-fluid'><div class='row'>
	<!-- Left column -->
	<div class='leftCol col-md-3 hidden-sm hidden-xs'> <!-- hide column when Extra small : 768px -->
		<a href="<?php echo esc_url(home_url('/')); ?>"><img class='logo' src='<?php echo header_image(); ?>'></a>
		<aside class='barLeft'>
			<div class='menuLeftWrapper'>
				<div class="menuLeft">
					<ul>
						<?php if(get_theme_mod('frontpage_leftbar_tags_field')) { ?>
							<?php $opt_tagsArr = trim_whitespace_in_comma_text(get_theme_mod('frontpage_leftbar_tags_field')); ?>
							<?php foreach($opt_tagsArr as $opt_tag) { ?>
								<?php if($opt_tag == '') { continue; } ?>
								<li><a href='#'><?php echo esc_html($opt_tag); ?></a>
									<?php create_ul_list_from_given_tag($opt_tag, 5); ?>
								</li>
							<?php } ?>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class='adsWidget'>
				<?php if(get_theme_mod('fontpage_leftbar_ads_btnset')) { ?>
					<?php
						switch (get_theme_mod('fontpage_leftbar_ads_btnset')) {
							case 'img':
								echo '<a href="'. esc_url(get_theme_mod('fontpage_leftbar_ads_image_link')) .'" target="_blank"><img src="'. esc_url(get_theme_mod('fontpage_leftbar_ads_image')) .'">';
								break;
							case 'code':
								echo get_theme_mod('fontpage_leftbar_ads_adCode');
								break;
						}
					?>
				<?php } else { ?>
					<img src='<?php echo get_template_directory_uri() ?>/img/ads-300x250.jpg'>
				<?php } ?>
			</div>
		</aside>
	</div>
	<!-- Right column -->
	<div class='rightCol col-md-9'>
		<!-- Header -->
		<header>
			<img class='pageIcon' src='<?php echo get_template_directory_uri() ?>/icons/green-circle.png'>
			<div class='pageTitle'><a href="<?php echo site_url(); ?>"><h1><?php (bloginfo('name')) ?></h1></a></div>
			<?php get_search_form(); ?>
			<?php wp_nav_menu( array('theme_location' => 'top_menu', 'container'=>'nav', 'link_before'=>'<div class="menu-icon"></div><span class="menu-caption">', 'link_after'=>'</span>')); ?>
			<div class='collapseNav'><span class='collapseBtn glyphicon glyphicon-menu-hamburger'></span><div class='collapseShadow'></div></div>
		</header>
		<!-- Running Text -->
		<span class='runningText'><marquee direction="left"><?php echo get_theme_mod('fontpage_runningtext_field', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim'); ?></marquee></span>
		<!-- Slider & RightMenu -->
		<div class='mainArea'>
			<div class='row'>
				<!-- column slider and content -->
				<div class='col-md-7-in-9'>
					<!-- Margin-top 10px -->
					<div class='sliderWrapper'><!-- Height 545px -->
						<div class='sliderImg' style='background-image:url(<?php echo get_template_directory_uri() ?>/img/image-not-found.png)'><!-- Height 435px -->
							<div class='sliderTitle'><a href='#' target='_blank'><?php _e('Post Title', 'aptnews') ?></a></div>
						</div>
						<!-- Margin top 10px -->
						<div class='sliderThumbWrapper'><!-- Height 100px, Padding 20px 0px -->
							<!-- Each SliderThumbBox height 80px, width 20% -->
							<!-- Each sliderThumb height 100%, margin 0 5px; -->
							<?php $top5posts = new WP_Query(array('posts_per_page'=>5)); ?>
							<?php if($top5posts->have_posts()) { ?>	
								<?php while($top5posts->have_posts()) { $top5posts->the_post(); ?>
									<div class='sliderThumbBox'><div class='sliderThumb' style='background-image: url(<?php echo get_featured_image_url(); ?>)' data-title='<?php the_title(); ?>' data-permalink="<?php the_permalink(); ?>"></div></div>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
				<!-- Bar Right -->
				<aside class='col-md-2-in-9'>
					<div class='menuRight'>
						<?php wp_nav_menu( array('theme_location' => 'right_menu', 'container'=>'')); ?>
					</div>
				</aside>
			</div>
		</div>
		<!-- Content under slider -->
		<div class='pageSlide'>
			<?php
				if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ 'top_menu'] ) ) {
					$menu_items = wp_get_nav_menu_items($locations[ 'top_menu' ]);
					foreach($menu_items as $menu_item) {
						if($menu_item->url == get_site_url()){ continue; }
						$pageQuery = new WP_Query('page_id=' . get_post_meta($menu_item->ID, '_menu_item_object_id', true ));
						while($pageQuery->have_posts()) { $pageQuery->the_post();
			?>
							<div class='page' style='background-color:whitesmoke'>
								<a href='<?php the_permalink(); ?>'><h2><?php the_title(); ?></h2></a>
								<?php aptnews_posted_on(); ?>
								<p style='font-size:50px;text-align:center;color:darkgray'><?php the_content(); ?></p>
							</div>
			<?php		}
					}
				} ?>
		</div>
	</div>
</div> </div>
<?php get_footer(); ?>
</body>
</html>
