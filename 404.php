<?php get_header(); ?>

<section class="error-block">
  <div class="container">
    <span class="error-block__subtitle">404</span>
    <h1 class="error-block__title"><?php echo __('This page', 'trophy'); ?><br><?php echo __('does not exist', 'trophy'); ?></h1>
    <a href="<?php echo get_home_url(); ?>" class="button-second"><?php echo __('To main', 'trophy') ?></a>
  </div>
</section>

<?php get_footer(); ?>