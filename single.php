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
    
    <p class="copyright"><?php echo __( '© All rights belong to the website www.trophy.fishing and are protected by law. Any use (copying, reprinting, etc.) can only be carried out with the consent of the site owner and indicating the author and a link to the site (www.trophy.fishing) in a prominent place on the page with the material used.', 'trophy' ); ?></p>
  </div>
</article>

<?php get_footer(); ?>