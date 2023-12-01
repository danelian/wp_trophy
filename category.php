<?php get_header(); ?>

<section class="species-category">
  <div class="container">
    <h1 class="page-title">
      <?php single_cat_title(); ?>
    </h1>
    <!-- breadcrumbs -->
    <?php if (function_exists('dimox_breadcrumbs'))
      dimox_breadcrumbs(); ?>

    <?php if (have_posts()): ?>
      <div class="species__cards">
        <?php
        while (have_posts()): the_post();
          get_template_part('template-parts/scard');
        endwhile;
        ?>
      </div>
      <?php
      the_posts_pagination(
        array(
          'prev_text' => '<i class="icomoon icon-prev"></i>',
          'next_text' => '<i class="icomoon icon-next"></i>',
          'end_size' => 3,
          'mid_size' => 1,
          'before_page_number' => false,
        )
      );
      ?>
    <?php	else: get_template_part('template-parts/no-post'); ?>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>