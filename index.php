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
      <div class="blog__cards">
      <?php while ( $query->have_posts() ) {
        $query->the_post();
        ?>
        <a href="<?php the_permalink(); ?>" class="bcard">
          <div class="bcard-image">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          </div>
          <div class="bcard-content">
            <h2 class="bcard-title"><?php the_title(); ?></h2>
            <div class="bcard-descr"><?php the_excerpt(); ?></div>
          </div>
        </a>
      <?php } ?>
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