<!--------Footer--------->
<footer class="footer">
  <div class="container">
    <div class="footer__container">
      <div class="footer__copy">
        <?php echo __( '© All rights reserved. Any use of the material (copying, reprinting, etc.) can only be carried out with consent of the website owner and indicating the author and a link to the website (www.trophy.fishing) in a prominent place on the page with the used material.', 'trophy' ); ?>
      </div>
      <div class="theme-switch__wrapper">
        <span>Светлая тема</span>
        <label for="theme-switch" class="switch">
          <input type="checkbox" id="theme-switch">
          <span class="switch-slider"></span>
        </label>
        <span>Тёмная тема</span>
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

<script>
  // Получаем переключатель и сохраняем его состояние в локальном хранилище
  const themeSwitch = document.getElementById('theme-switch');
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme) {
    document.documentElement.setAttribute('data-theme', savedTheme);
    themeSwitch.checked = savedTheme === 'dark';
  }

  // Обработчик события изменения состояния переключателя
  themeSwitch.addEventListener('change', () => {
    if (themeSwitch.checked) {
      document.documentElement.setAttribute('data-theme', 'dark');
      localStorage.setItem('theme', 'dark');
    } else {
      document.documentElement.setAttribute('data-theme', 'light');
      localStorage.setItem('theme', 'light');
    }
  });
</script>

<!-- Script-->
<?php wp_footer(); ?>

<!-- Запрет на копирование -->
<script type="text/javascript">
  document.ondragstart = noselect;
  document.onselectstart = noselect;
  document.oncontextmenu = noselect;
  function noselect() {return false;}
</script>

</body>

</html>