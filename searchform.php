<form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" class="search-form">
	<input class="search-input" type="search"
		placeholder="<?php echo esc_attr_x('Enter the name of the fish', 'trophy') ?>"
		value="<?php echo get_search_query() ?>" name="s" id="s">
	<input type="hidden" value="post" name="post_type" id="post_type" />
	<button type="submit" role="button" class="button"><?php echo __('Search', 'trophy'); ?></button>
</form>