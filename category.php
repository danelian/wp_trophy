<?php get_header(); ?>

<section class="species-category">
  <div class="container">
    <h1 class="page-title"><?php single_cat_title(); ?></h1>
    <!-- breadcrumbs -->
    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

    <?php
    global $post;
    $current = absint(
      max(1,get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' ))
    );

    $query = new WP_Query( [
      'post_type'      => 'post',
      'posts_per_page' => 16,
      'paged'          => $current,
      'orderby'        => 'DESC',
    ]);

    if ( $query->have_posts() ) { ?>
      <div class="species__cards">
      <?php while ( $query->have_posts() ) {
        $query->the_post();
        get_template_part('template-parts/scard');
      } ?>
      </div>
    <?php } else {}

    // pagination
    global $wp_query;
    $restore_wp_query = $wp_query;
    $wp_query         = $query;
    the_posts_pagination(array(
      'prev_text'    => '',
      'next_text'    => '',
    ));
    $wp_query = $restore_wp_query;
    ?>

  </div>
</section>

<?php get_footer(); ?>