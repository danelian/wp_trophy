<?php get_header(); ?>

<section class="section-blog">
  <div class="container">
    <h1 class="page-title"><?php echo get_the_title(get_option('page_for_posts')) ?></h1>

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
      'end_size' => 3,
      'mid_size' => 1,
      'before_page_number' => false,
    ));
    $wp_query = $restore_wp_query;
    ?>

  </div>
</section>

<?php get_footer(); ?>