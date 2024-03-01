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
        <?php echo __('Detailed search', 'trophy'); ?>
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5855 21.5858C11.8045 20.8047 11.8045 19.5384 12.5855 18.7574L23.7571 7.58579C24.5381 6.80474 25.8044 6.80474 26.5855 7.58579C27.3665 8.36684 27.3665 9.63317 26.5855 10.4142L15.4139 21.5858C14.6329 22.3668 13.3665 22.3668 12.5855 21.5858Z" fill="currentColor"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4144 21.5858C16.1954 20.8047 16.1954 19.5384 15.4144 18.7574L4.24283 7.58579C3.46178 6.80474 2.19545 6.80474 1.4144 7.58579C0.633352 8.36684 0.633351 9.63317 1.4144 10.4142L12.586 21.5858C13.367 22.3668 14.6334 22.3668 15.4144 21.5858Z" fill="currentColor"/>
        </svg>
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