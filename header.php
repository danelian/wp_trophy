<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- header -->
  <header class="header">
    <div class="container header__container">
      <a href="<?php echo get_home_url(); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="280" height="90" alt="logo">
      </a>
    </div>
  </header>