<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="searchWrapper">
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<input type="hidden" value="post" name="post_type" id="post_type" />
</form>