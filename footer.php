<!--------Footer--------->
<footer class="footer">
  <div class="container">
    <div class="footer__container">
      <div class="footer__copy">
        <?php echo __( '© All rights belong to the website www.trophy.fishing and are protected by law. Any use (copying, reprinting, etc.) can only be carried out with the consent of the site owner and indicating the author and a link to the site (www.trophy.fishing) in a prominent place on the page with the material used.', 'trophy' ); ?>
      </div>
      <?php
        wp_nav_menu([
          'theme_location' => 'lang',
          'container' => '',
          'menu_class' => 'langs',
          'menu_id' => false,
          'echo' => true,
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
        ?>
    </div>
  </div>
</footer>

<!-- Script-->
<?php wp_footer(); ?>

</body>

</html>