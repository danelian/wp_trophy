<?php get_header(); ?>

<article class="article">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php the_post_thumbnail( 'full', array("class" => "article-image") ); ?>
    <div class="article-date"><?php the_time('j.m.Y'); ?></div>
    <?php the_content(); ?>
  </div>
</article>

<section class="read-also">
  <div class="container">
    <h3 class="read-also__title"><?php echo __( 'Read also', 'trophy' ); ?></h3>
    <?php		
    global $post;
    $query = new WP_Query( [
      'post_type'      => 'articles',
      'posts_per_page' => 4,
      'orderby' => 'rand',
      'order'    => 'ASC'
    ]);

    if ( $query->have_posts() ) { ?>
      <div class="blog__cards">
      <?php while ( $query->have_posts() ) {
        $query->the_post();
        get_template_part('template-parts/bcard');
      } ?>
      </div>
    <?php } else {} ?>
  </div>
</section>

<?php get_footer(); ?>