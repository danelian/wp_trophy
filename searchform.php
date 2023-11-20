<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="search-form">
	<input class="search-input" type="text" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
	<button class="button">Поиск</button>
</form>