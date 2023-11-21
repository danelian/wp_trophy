<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="search-form">
	<input class="search-input" type="search" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" id="s">
	<button type="submit" role="button" class="button">Поиск</button>
</form>