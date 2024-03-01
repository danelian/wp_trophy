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

      $args = array(
        's' => get_search_query(),
      );

      $the_query = new WP_Query($args);

      if ($the_query->have_posts()) {

        echo '<div class="species__cards" id="ajax_search">';

        while ($the_query->have_posts()) {
          $the_query->the_post();
          get_template_part('template-parts/scard');
        }

        echo '</div>';

        the_posts_pagination(
          array(
            'prev_text' => '',
            'next_text' => '',
            'end_size' => 3,
            'mid_size' => 1,
            'before_page_number' => false,
          )
        );

      } else {

        echo '<p class="species__results-empty">' . __('No results', 'trophy') . '</p>';

      }

      ?>

    </div>

  </div>

</section>

<?php get_footer(); ?>