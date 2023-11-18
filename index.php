<?php get_header(); ?>

<section class="section-blog">
  <div class="container">
    <h1 class="page-title">Статьи</h1>
    <div class="blog__cards">
      <a href="single.html" class="bcard">
        <div class="bcard-image">
          <img src="/img/bcard-image-01.jpg" alt="">
        </div>
        <div class="bcard-content">
          <h2 class="bcard-title">Как завязывать узлы</h2>
          <div class="bcard-descr">
            <p>Здесь можно найти информацию о тонкостях рыбалки</p>
          </div>
        </div>
      </a>
      <a href="single.html" class="bcard">
        <div class="bcard-image">
          <img src="/img/bcard-image-02.jpg" alt="">
        </div>
        <div class="bcard-content">
          <h2 class="bcard-title">Как разобрать и смазать рыболовную катушку</h2>
          <div class="bcard-descr">
            <p>Здесь можно найти информацию о тонкостях рыбалки</p>
          </div>
        </div>
      </a>
      <a href="single.html" class="bcard">
        <div class="bcard-image">
          <img src="/img/bcard-image-01.jpg" alt="">
        </div>
        <div class="bcard-content">
          <h2 class="bcard-title">Как завязывать узлы</h2>
          <div class="bcard-descr">
            <p>Здесь можно найти информацию о тонкостях рыбалки</p>
          </div>
        </div>
      </a>
      <a href="single.html" class="bcard">
        <div class="bcard-image">
          <img src="/img/bcard-image-02.jpg" alt="">
        </div>
        <div class="bcard-content">
          <h2 class="bcard-title">Как разобрать и смазать рыболовную катушку</h2>
          <div class="bcard-descr">
            <p>Здесь можно найти информацию о тонкостях рыбалки</p>
          </div>
        </div>
      </a>
    </div>
    <!------ pagination ------>
    <nav class="navigation pagination" aria-label="Статьи">
      <h2 class="screen-reader-text">Навигация по записям</h2>
      <div class="nav-links">
        <a class="prev page-numbers disabled" href="#"><span>Назад</span></a>
        <a class="page-numbers" href="#">1</a>
        <span aria-current="page" class="page-numbers current">2</span>
        <a class="page-numbers" href="#">3</a>
        <span class="page-numbers dots"><span>...</span></span>
        <a class="page-numbers" href="#">10</a>
        <a class="next page-numbers" href="#"><span>Дальше</span></a>
      </div>
    </nav>
  </div>
</section>

<?php get_footer(); ?>