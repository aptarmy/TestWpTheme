<?php get_header(); ?>
<div class='container-fluid pos-relative'><div class='row display-flex'><!-- row-full-height class will display as table-row & make inner collumns high equally -->
	<!-- Right column -->
	<div class='col-md-10'><!-- cal-full-height class will display as table-cell & make its siblings height equal to its height -->
		<!-- Logo & Ads -->
		<aside class='row row-v-center'><!-- v-center class make img.logo vertically center -->
			<div class='col-md-11 col-v-center'><div class='adsWidget'><img src='<?php echo get_template_directory_uri(); ?>/img/ads-970x90.png'></div></div>
			<div class='col-md-1 col-v-center hidden-sm hidden-xs col-backBtn'><img class='backBtn' src='<?php echo get_template_directory_uri(); ?>/icons/home.png'></div>
		</aside>
		<!-- Show 6 posts -->
		<section class='posts'>
			<h2><?php _e('Show all posts', 'aptnews'); ?></h2>
			<div class='row'>
				<?php if(have_posts()) { ?>
					<?php while(have_posts()) { the_post(); ?>
						<article class='col-md-4 col-sm-6 col-xs-12'><div class='post' style='background-image:url(<?php echo get_featured_image_url(); ?>)'><div class='postTitle'><a href='<?php the_permalink(); ?>' target='_blank'><h3><?php the_title(); ?></h3></a></div></div></article>
					<?php } ?>
				<?php } ?>
			</div>
		</section>
		<aside class='apt-pager'>
			<?php numeric_page_navigation(); ?>
		</aside>
	</div>
	<aside class='col-md-2'>
		<div class='barRight'>
		<a href="<?php echo esc_url(home_url('/')); ?>"><img class='logo hidden-sm hidden-xs' src='<?php header_image(); ?>'></a>
			<nav class='menuRight'>
				<div class='backBtnText hidden-md hidden-lg'>Home</div>
				<?php wp_nav_menu( array('theme_location' => 'right-menu', 'container'=>'')); ?>
			</nav>
			<div class='menuRightShadow'></div>
			<div class='cat-collapseBtn'><span class='glyphicon glyphicon-menu-hamburger'></span></div>
		</div>
	</aside>
</div> </div>
<?php get_footer(); ?>
</body>
</html>
