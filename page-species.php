<?php get_header(); ?>

<section class="species">
  <div class="container">
    <h1 class="page-title">Виды рыб</h1>
    <div class="species__row">
      <div class="species__col">
        <div class="form-title">Род</div>
        <form role="search" method="get" action="#" class="search-form">
          <input class="search-input" type="text" placeholder="Введите род" value="" name="s">
          <button class="button">Поиск</button>
        </form>
        <div class="searchform-tooltips">
          <span>Например:</span>
          <ul>
            <li>Щуковые 1,</li>
            <li>Щуковые 2,</li>
            <li>Окуневые 2</li>
          </ul>
        </div>
      </div>
      <div class="species__col">
        <div class="form-title">Вид</div>
        <form role="search" method="get" action="#" class="search-form">
          <input class="search-input" type="text" placeholder="Введите вид" value="" name="s">
          <button class="button">Поиск</button>
        </form>
        <div class="searchform-tooltips">
          <span>Например:</span>
          <ul>
            <li>Щука 1, </li>
            <li>Щука 2, </li>
            <li>Окунь 1</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="species__detailed">
      <div class="species__detailed-title">Подробный поиск <img src="/img/icons/chevron-down.svg" alt=""></div>
      <div class="species__detailed-form">
        <div class="form-group">
          <div class="form-title">Царство</div>
          <select id="select_carstvo" class="js-select2">
            <option></option>
            <option value="animal">Животные</option>
            <option value="noanimal1">Не животные 1</option>
            <option value="noanimal2">Не животные 2</option>
            <option value="noanimal3">Не животные 3</option>
            <option value="noanimal4">Не животные 4</option>
            <option value="noanimal5">Не животные 5</option>
            <option value="noanimal6">Не животные 6</option>
            <option value="noanimal7">Не животные 7</option>
          </select>
        </div>
        <div class="form-group">
          <div class="form-title">Тип</div>
          <select class="js-select2">
            <option></option>
            <option value="type1">Тип 1</option>
          </select>
        </div>
        <div class="form-group">
          <div class="form-title">Класс</div>
          <select class="js-select2">
            <option></option>
            <option value="class1">Класс 1</option>
          </select>
        </div>
        <div class="form-group">
          <div class="form-title">Отряд</div>
          <select class="js-select2">
            <option></option>
            <option value="otryad1">Отряд 1</option>
          </select>
        </div>
        <div class="form-group">
          <div class="form-title">Семейство</div>
          <select class="js-select2">
            <option></option>
            <option value="family1">Семейство 1</option>
          </select>
        </div>
        <div class="form-group">
          <div class="form-title">Род</div>
          <select class="js-select2">
            <option></option>
            <option value="rod1">Род 1</option>
          </select>
        </div>
        <div class="form-group">
          <div class="form-title">Вид</div>
          <select class="js-select2">
            <option></option>
            <option value="vid1">Вид 1</option>
          </select>
        </div>
        <button class="button">Поиск</button>
      </div>
    </div>
    <div class="species__results">
      <h3 class="species__results-title">Результаты поиска:</h3>
      <p class="species__results-empty">Нет результатов</p>
      <div class="species__cards">
        <a href="single-species.html" class="scard">
          <div class="scard-image">
            <img src="/img/scard-image-01.jpg" alt="">
          </div>
          <h2 class="scard-title">Обыкновенная щука</h2>
        </a>
        <a href="single-species.html" class="scard">
          <div class="scard-image">
            <img src="/img/scard-image-02.png" alt="">
          </div>
          <h2 class="scard-title">Необыкновенный разноцветный окунь</h2>
        </a>
        <a href="single-species.html" class="scard">
          <div class="scard-image">
            <img src="/img/scard-image-01.jpg" alt="">
          </div>
          <h2 class="scard-title">Обыкновенная щука</h2>
        </a>
        <a href="single-species.html" class="scard">
          <div class="scard-image">
            <img src="/img/scard-image-02.png" alt="">
          </div>
          <h2 class="scard-title">Необыкновенный разноцветный окунь</h2>
        </a>
        <a href="single-species.html" class="scard">
          <div class="scard-image">
            <img src="/img/scard-image-01.jpg" alt="">
          </div>
          <h2 class="scard-title">Обыкновенная щука</h2>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>