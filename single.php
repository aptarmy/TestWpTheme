<?php get_header(); ?>
<div class='container-fluid'><div class='row'>
	<!-- Left column -->
	<div class='col-md-3 hidden-sm hidden-xs'> <!-- Extra small : 768px -->
		<div class='logoCancel'>
			<a href="<?php echo esc_url(home_url('/')); ?>"><img class='logo' src='<?php header_image(); ?>'></a>
			<img class='cancel' src='<?php echo get_template_directory_uri(); ?>/icons/home.jpg'>
		</div>
		<div class='adsWidget'>
			<?php if(get_theme_mod('single_leftbar_ads_btnset')) { ?>
				<?php
					switch (get_theme_mod('single_leftbar_ads_btnset')) {
						case 'img':
							echo '<a href="'. esc_url(get_theme_mod('single_leftbar_ads_image_link')) .'" target="_blank"><img src="'. esc_url(get_theme_mod('single_leftbar_ads_image')) .'">';
							break;
						case 'code':
							echo get_theme_mod('single_leftbar_ads_adCode');
							break;
					}
				?>
			<?php } else { ?>
				<img src='<?php echo get_template_directory_uri() ?>/img/ads-300x600.png'>
			<?php } ?>
		</div>
	</div>
	<!-- Right column -->
	<div class='col-md-9'>
		<div class='postColRight'>
			<article class='content'>
				<?php if(have_posts()) { ?>
					<?php while(have_posts()) { the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php aptnews_posted_on(); ?>
						<?php the_content(); ?>
						<?php aptnews_entry_footer(); ?>
					<?php } ?>
				<?php } ?>
			</article>
			<div class='relatePosts'>
				<div class='row'>
					<h3>Related Post</h3>
					<?php get_related_posts(); ?>
				</div>
			</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	</div>
</div></div>
<?php get_footer(); ?>
</body>
</html>