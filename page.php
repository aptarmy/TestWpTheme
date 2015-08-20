<?php get_header(); ?>
<div class='container-fluid'><div class='row'>
	<!-- Left column -->
	<div class='col-md-3 hidden-sm hidden-xs'> <!-- Extra small : 768px -->
		<div class='logoCancel'>
			<a href="<?php echo esc_url(home_url('/')); ?>"><img class='logo' src='<?php header_image(); ?>'></a>
			<img class='cancel' src='<?php echo get_template_directory_uri(); ?>/icons/home.jpg'>
		</div>
		<aside class='barLeft'>
			<div class='adsWidget'><img src='<?php echo get_template_directory_uri() ?>/img/ads-300x600.png'></div>
		</aside>
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
					<?php } ?>
				<?php } ?>
			</article>
		</div>
	</div>
</div></div>
<?php get_footer(); ?>
</body>
</html>