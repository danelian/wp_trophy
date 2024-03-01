<?php
/*
Template Name: Search
*/
get_header();
?>

<section class="species">
  <div class="container">
    <h1 class="page-title">
      <?php echo __('Fish species', 'trophy'); ?>
    </h1>
    <div class="species__row">
      <?php echo do_shortcode('[ivory-search id="194" title="Scientific or common name of the fish Search Form"]'); ?>
    </div>

    <div class="species__detailed" data-search="<?= get_search_query(); ?>">
      <div class="species__detailed-title">
        <?php echo __('Detailed search', 'trophy'); ?> <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/chevron-down.svg" alt="">
      </div>

      <?php reposium_fish_search_form(); ?>

    </div>

    <div class="species__results">
      <h3 class="species__results-title">
        <?php echo __('Searching results:', 'trophy'); ?>
      </h3>

      <?php

          $posts_per_page = -1;
          $search_query   = get_search_query();

          $args = array(
            's' => $search_query,
            'posts_per_page' => $posts_per_page
          );

          $the_query = new WP_Query($args);

          if ($the_query->have_posts()) {

              $increment = 1; 

              echo '<div class="species__cards" id="ajax_search">';

              while ($the_query->have_posts()) {

                  $the_query->the_post();
                  get_template_part( 'template-parts/scard', '', array( 'i' => $increment ) );
                  $increment++; 

              }

              echo '</div>';

              reposium_load_more( $search_query, $posts_per_page); 

          } else {

              echo '<p class="species__results-empty">' . __('No results', 'trophy') . '</p>';

          }

      ?>

    </div>

  </div>

</section>

<?php get_footer(); ?>