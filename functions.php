<?php

/**
 * ДОБАВЛЕНИЕ ВОЗМОЖНОСТЕЙ
 */
if (!function_exists('trophy_setup')) {
  function trophy_setup() {
    // Подключение файла переводов
    load_theme_textdomain( 'trophy', get_template_directory() . '/languages' );
    // Добавляем динамический <title>
    add_theme_support('title-tag');
		// Добавление html5
		add_theme_support( 'html5', array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'script',
			'style',
		) );
    // Добавление миниатюр для постов
    add_theme_support( 'post-thumbnails', array( 'post', 'articles' ) ); 
  }
  add_action('after_setup_theme', 'trophy_setup');
}

// @ini_set( 'upload_max_size', '100M' );
// @ini_set( 'post_max_size', '70M');
// @ini_set( 'max_execution_time', '250M');



/**
 * ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ
 */
function trophy_scripts() {
  // STYLES
  // Main style
  wp_enqueue_style('main', get_template_directory_uri());
  // Fancybox
  // wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css');
  // Swiper
  // wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
  // Select2
  wp_enqueue_style('select2', get_template_directory_uri() . '/assets/css/select2.min.css');
  // App style
  wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/style.min.css');

  // SCRIPTS
  // Jquery
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true);
  wp_enqueue_script('jquery');
  // Fancybox
  // wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), null, true);
  // Swiper
  // wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
  // Select2
  wp_enqueue_script('select2', get_template_directory_uri() . '/assets/js/select2.min.js', array('jquery'), null, true);
  // wp_enqueue_script('select2-ru', get_template_directory_uri() . '/assets/js/select2-ru.js', array('jquery', 'select2'), null, true);
  // App js
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery', 'select2'), null, true);
  //
  wp_enqueue_script('ajaxfilterfish', get_template_directory_uri() . '/assets/js/fishfilter.js', array('jquery'), null, true);

	
	$mydata = [
		'select_search' => __('Search...', 'trophy'),
		'select_nofound' => __('No results found', 'trophy'),
		'main_searchform' => __('Enter the name of the fish', 'trophy'),
		'second_searchform' => __('Genus, species or name of fish', 'trophy'),
		'nothing_found' => __('Nothing found', 'trophy'),
	];
	
	wp_add_inline_script( 'app', 'const myScriptData = ' . wp_json_encode( $mydata ), 'before' );
}
add_action('wp_enqueue_scripts', 'trophy_scripts');


/**
 * Регистрирация областей меню
 */
function trophy_menus()
{
	$locations = array(
    'lang' => 'Lang Menu',
	);
	register_nav_menus($locations);
}
add_action('init', 'trophy_menus');


/**
 * Поиск только среди стандартного типа записей Вордпресса
 */
function search_filter($query) {
	if ($query->is_search && !is_admin()) {
			$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','search_filter');
// $search = $_GET['s'];

// $args = array(
// 	'post_type' => 'post', // post, teams или как у тебя тип записи зовется
// 	'post_status' => 'publish',
// 	'posts_per_page' => -1,
// 	's' => $search,
// );


/**
 * Регистрация post type articles
 */
add_action( 'init', 'register_post_types' );
function register_post_types(){

	register_post_type( 'articles', [
		'label'  => null,
		'labels' => [
			'name'               => 'Articles', // основное название для типа записи
			'singular_name'      => 'Article', // название для одной записи этого типа
			'add_new'            => 'Добавить Article', // для добавления новой записи
			'add_new_item'       => 'Добавление Article', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Article', // для редактирования типа записи
			'new_item'           => 'Новое Article', // текст новой записи
			'view_item'          => 'Смотреть Article', // для просмотра записи этого типа.
			'search_items'       => 'Искать Article', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Articles', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail',), // 'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [''],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}


/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2019.03.03
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author']   = 'Статьи автора %s'; // текст для страницы автора
	$text['404']      = 'Ошибка 404'; // текст для страницы 404
	$text['page']     = 'Страница %s'; // текст 'Страница N'
	$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep            = '<span class="breadcrumbs__separator"></span>'; // разделитель между "крошками"
	$before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
	$after          = '</span>'; // тег после текущей "крошки"

	$show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link          .= '<meta itemprop="position" content="%3$s" />';
	$link          .= '</span>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo $sep;
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;
			} else {
				$cat = get_the_category(); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) echo $sep . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo $sep;
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
} // end of dimox_breadcrumbs()

/**
 * 
 * 
 * 
 * 
 */

add_action( 'wp_ajax_test', 'test_ajax' );
add_action( 'wp_ajax_nopriv_test', 'test_ajax' ); 
 
function test_ajax(){

	/*
	*
	*
	*/
	$select_placeholder = __('Choose', 'trophy');
  $terms = get_terms(
		'category', [ 
		  'hide_empty' 		=> false, 
		  'parent' 				=> $_POST['term_id'], 
		  'exclude' 		  => array( 1, 8 ) 
		]
	);

	$result = array('elements' => array() );

	$result['elements'][] = "<option value='0'>$select_placeholder</option>"; 

	foreach ( $terms as $term )
		  $result['elements'][] = "<option value='$term->term_id'>$term->name</option>";

	/**
	 * 
	 * 
	 */

	$posts_args = array(
      's' => $_POST['search'],
      'cat' => $_POST['term_id'],
  );

  $the_query = new WP_Query( $posts_args ); 

  if ( $the_query->have_posts() ) { 

    $cards = ''; 

    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $permalink = get_permalink();
        $img       = get_the_post_thumbnail_url();
        $title     = get_the_title();
        
        $cards .= "<a href='$permalink' class='scard'><div class='scard-image'><img src='$img' alt=''></div><h2 class='scard-title'>$title</h2></a>";
    }  

  } else {

  		$cards .= '<p class="species__results-empty">'.__('No results', 'trophy').'</p>';

  }

  $result['posts'] = $cards;

	echo json_encode( $result );
 
	die; // даём понять, что обработчик закончил выполнение
}

/**
*
*
*
*
*/

function reposium_fish_level( $level, $name, $term_id = false, $expand = false ) {    
	$select_placeholder = __('Choose', 'trophy');
	  if ( $expand )
	  	$group_class = "form-group block_level_$level";
	  else 
	  	$group_class = "form-group block_level_$level d-none";

	  echo "<div class='$group_class'><div class='form-title'>$name</div>";

		echo "<select id='level_$level' class='js-select2 rajax_filter' data-level=$level class=''>";

		if ( $expand ) :
			  $terms = get_terms( 
			    	'category', [ 
			    		'hide_empty' => false, 
			    		'parent' => 0, 
			    		'exclude' => array( 1, 8 )
			    	]
			  );

			  echo "<option selected disabled value='0'>$select_placeholder</option>"; 

			  foreach ( $terms as $term) 
			    	echo "<option value='$term->term_id'>$term->name</option>";

		endif; 

	  echo "</select>"; 

    echo "</div>";
 
}


function reposium_fish_search_form() { 

    echo '<div class="species__detailed-form">';

    reposium_fish_level( 1, __('Kingdom', 'trophy'), 43, true);
    reposium_fish_level( 2, __('Type', 'trophy') );
    reposium_fish_level( 3, __('Class', 'trophy') );
    reposium_fish_level( 4, __('Squad', 'trophy') );
    reposium_fish_level( 5, __('Family', 'trophy') );
    reposium_fish_level( 6, __('Genus', 'trophy') ); 

    echo '</div>';
}

