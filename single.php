<?php get_header(); ?>

<article class="article">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <!-- breadcrumbs -->
    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

    <div class="species-article__block">
      <div class="species-article__image">
        <?php the_post_thumbnail( 'full' ); ?>
      </div>

      <?php $areal = get_field('single_areal');
      if ($areal) { ?>
        <div class="species-article__areal">
          <h3><?php echo __('Habitat', 'trophy'); ?></h3>
          <img src="<?php echo $areal ?>" alt="">
        </div>
      <?php } ?>
    </div>

    <?php the_content(); ?>

  </div>
</article>

<?php get_footer(); ?>