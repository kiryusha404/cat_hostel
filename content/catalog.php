



  <main class="catalog container">
    <div class="catalog__wrapper">
      <h1>Наши номера</h1>
      <div class="catalog__sorting sorting">
        <button class="sorting__toggle" type="button" aria-label="Показать варианты сортировки">
          <svg class="sorting__toggle-icon icon-svg" width="14" height="8">
            <use xlink:href="#icon-sort"></use>
          </svg>
        </button>
        <ul class="sorting__list">
          <li class="sorting__item sorting__item--current">
            <a class="sorting__link" href="#">
              <svg class="sorting__direction" width="7" height="12">
                <use xlink:href="#icon-up"></use>
              </svg>
              <span>По площади</span>
            </a>
          </li>
          <li class="sorting__item">
            <a class="sorting__link" href="#">
              <svg class="sorting__direction sorting__direction--reverse" width="7" height="12">
                <use xlink:href="#icon-up"></use>
              </svg>
              <span>По площади</span>
            </a>
          </li>
          <li class="sorting__item">
            <a class="sorting__link" href="#">
              <svg class="sorting__direction" width="7" height="12">
                <use xlink:href="#icon-up"></use>
              </svg>
              <span>По цене</span>
            </a>
          </li>
          <li class="sorting__item">
            <a class="sorting__link" href="#">
              <svg class="sorting__direction sorting__direction--reverse" width="7" height="12">
                <use xlink:href="#icon-up"></use>
              </svg>
              <span>По цене</span>
            </a>
          </li>
        </ul>
      </div>

      <section class="catalog__filters filter">
        <h2 class="visually-hidden">Фильтры</h2>
        <button class="filter__toggle" type="button">
          <svg class="filter__toggle-icon" width="12" height="15">
            <use xlink:href="#icon-filter"></use>
          </svg>
          <span>Фильтры</span>
        </button>
        <div class="filter__overlay">
          <div class="filter__inner">
            <!-- <div class="filter"> -->
  <form action="#" method="POST" autocomplete="on">
    <fieldset>
      <h3>Цена за сутки,<span>&#8381;</span></h3>
      <label for="from">
        <input type="text" id="from" placeholder="100">
        От
      </label>
      <label for="up-to">
        <input type="text" id="up-to" placeholder="600">
        До
      </label>
      <span class="filter__hint">Значение "от" не должно превышать значение "до"</span>
    </fieldset>
    <fieldset>
      <h3>Площадь</h3>
      <label for="square1">
        <input type="checkbox" name="0,63 м2" id="square1">
        <span></span>
        0,63 м2
      </label>

      <label for="square2">
        <input type="checkbox" name="0,90 м2" id="square2">
        <span></span>
        0,90 м2
      </label>

      <label for="square3">
        <input type="checkbox" name="1,13 м2" id="square3">
        <span></span>
        1,13 м2
      </label>

      <label for="square4">
        <input type="checkbox" name="1,56 м2" id="square4">
        <span></span>
        1,56 м2
      </label>

      <label for="square5">
        <input type="checkbox" name="2,56 м2" id="square5">
        <span></span>
        2,56 м2
      </label>

      <label for="square6">
        <input type="checkbox" name="2,88 м2" id="square6">
        <span></span>
        2,88 м2
      </label>
    </fieldset>
    <fieldset>
      <h3>Оснащение номера</h3>

      <label for="Empy">
        <input type="checkbox" name="Пустой номер" id="Empy">
        <span></span>
        Пустой номер
      </label>

      <label for="bed">
        <input type="checkbox" name="Лежак" id="bed">
        <span></span>
        Лежак
      </label>

      <label for="claw-point">
        <input type="checkbox" name="Когтеточка" id="claw-point">
        <span></span>
        Когтеточка
      </label>

      <label for="toys">
        <input type="checkbox" name="Игровой-комплекс" id="toys">
        <span></span>
        Игровой-комплекс
      </label>

      <label for="home">
        <input type="checkbox" name="Домик" id="home">
        <span></span>
        Домик
      </label>
    </fieldset>
    <button type="button">
      <span>Применить</span>
      <span>Подобрать</span>
    </button>
    <button type="reset">Сбросить фильтр</button>
  </form>
  <button class="filter__btn-close" type="button"></button>
<!-- </div> -->

          </div>
        </div>
      </section>

      <section class="catalog__result">
        <h2 class="visually-hidden">Результаты поиска</h2>
        <ul class="catalog__list">
          <li class="catalog__item">
            <div class="offer">
              <div class="offer__image">
                <div>
                  <div class="offer__image-content">
                    <!-- 1х: 270px; 2x: 540px -->
                    <picture>
                      <source type="image/webp" srcset="img/room-economy@1x.webp 1x, img/room-economy@2x.webp 2x">
                      <img src="img/room-economy@1x.jpg" srcset="img/room-economy@2x.jpg 2x" alt="Номер категории эконом">
                    </picture>
                  </div>
                </div>
              </div>
              <h3>Эконом</h3>
              <ul class="offer__description">
                <li class="offer__description-item">Размеры (ШхГхВ) - 90х70х180&nbsp;см</li>
                <li class="offer__description-item">Площадь - 0,63 м2</li>
                <li class="offer__description-item offer__description-item--flex">
                  Оснащение номера
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="#icon-none"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Пустой&nbsp;номер</span>
                </li>
                <li class="offer__description-item">
                  Цена за сутки: <b>100&#8381;</b>
                </li>
              </ul>
              <a class="button offer__button" href="#">
                <span>Забронировать</span>
                <span class="button__paw">
                  <svg width="21" height="18">
                    <use xlink:href="#icon-paw"></use>
                  </svg>
                </span>
              </a>
            </div>
          </li>
          <li class="catalog__item">
            <div class="offer">
              <div class="offer__image">
                <div>
                  <div class="offer__image-content">
                    <!-- 1х: 270px; 2x: 540px -->
                    <picture>
                      <source type="image/webp" srcset="img/room-economy-plus@1x.webp 1x, img/room-economy-plus@2x.webp 2x">
                      <img src="img/room-economy-plus@1x.jpg" srcset="img/room-economy-plus@2x.jpg 2x" alt="Номер категории эконом-плюс">
                    </picture>
                  </div>
                </div>
              </div>
              <h3>Эконом плюс</h3>
              <ul class="offer__description">
                <li class="offer__description-item">Размеры (ШхГхВ) - 90х100х180&nbsp;см</li>
                <li class="offer__description-item">Площадь - 0,90 м2</li>
                <li class="offer__description-item offer__description-item--flex">
                  Оснащение номера
                  <span class="offer__icon">
                    <svg width="16" height="12">
                      <use xlink:href="#icon-bed"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Лежак</span>
                  <span class="offer__icon">
                      <svg width="14" height="16">
                      <use xlink:href="#icon-claw"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Когтеточка</span>
                </li>
                <li class="offer__description-item">
                  Цена за сутки: <b>200&#8381;</b>
                </li>
              </ul>
              <a class="button offer__button" href="#">
                <span>Забронировать</span>
                <span class="button__paw">
                  <svg width="21" height="18">
                    <use xlink:href="#icon-paw"></use>
                  </svg>
                </span>
              </a>
            </div>
          </li>
          <li class="catalog__item">
            <div class="offer">
              <div class="offer__image">
                <div>
                  <div class="offer__image-content">
                    <!-- 1х: 270px; 2x: 540px -->
                    <picture>
                      <source type="image/webp" srcset="img/room-comfort@1x.webp 1x, img/room-comfort@2x.webp 2x">
                      <img src="img/room-comfort@1x.jpg" srcset="img/room-comfort@2x.jpg 2x" alt="Номер категории комфорт">
                    </picture>
                  </div>
                </div>
              </div>
              <h3>Комфорт</h3>
              <ul class="offer__description">
                <li class="offer__description-item">Размеры (ШхГхВ) - 100х125х180&nbsp;см</li>
                <li class="offer__description-item">Площадь - 1,13 м2</li>
                <li class="offer__description-item offer__description-item--flex">
                  Оснащение номера
                  <span class="offer__icon">
                    <svg width="16" height="12">
                      <use xlink:href="#icon-bed"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Лежак</span>
                  <span class="offer__icon">
                      <svg width="14" height="16">
                      <use xlink:href="#icon-claw"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Когтеточка</span>
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="#icon-toy"></use>
                    </svg>
                  </span>
                  <span class="offer__hint offer__hint--right">Игровой комплекс</span>
                </li>
                <li class="offer__description-item">
                  Цена за сутки: <b>250&#8381;</b>
                </li>
              </ul>
              <a class="button offer__button" href="#">
                <span>Забронировать</span>
                <span class="button__paw">
                  <svg width="21" height="18">
                    <use xlink:href="#icon-paw"></use>
                  </svg>
                </span>
              </a>
            </div>
          </li>
          <li class="catalog__item">
            <div class="offer">
              <div class="offer__image">
                <div>
                  <div class="offer__image-content">
                    <!-- 1х: 270px; 2x: 540px -->
                    <picture>
                      <source type="image/webp" srcset="img/room-suite@1x.webp 1x, img/room-suite@2x.webp 2x">
                      <img src="img/room-suite@1x.jpg" srcset="img/room-suite@2x.jpg 2x" alt="Номер категории сьют">
                    </picture>
                  </div>
                </div>
              </div>
              <h3>Сьют</h3>
              <ul class="offer__description">
                <li class="offer__description-item">Размеры (ШхГхВ) - 125х125х180&nbsp;см</li>
                <li class="offer__description-item">Площадь - 1,56 м2</li>
                <li class="offer__description-item offer__description-item--flex">
                  Оснащение номера
                  <span class="offer__icon">
                    <svg width="16" height="12">
                      <use xlink:href="#icon-bed"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Лежак</span>
                  <span class="offer__icon">
                      <svg width="14" height="16">
                      <use xlink:href="#icon-claw"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Когтеточка</span>
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="#icon-toy"></use>
                    </svg>
                  </span>
                  <span class="offer__hint offer__hint--right">Игровой комплекс</span>
                </li>
                <li class="offer__description-item">
                  Цена за сутки: <b>350&#8381;</b>
                </li>
              </ul>
              <a class="button offer__button" href="#">
                <span>Забронировать</span>
                <span class="button__paw">
                  <svg width="21" height="18">
                    <use xlink:href="#icon-paw"></use>
                  </svg>
                </span>
              </a>
            </div>
          </li>
          <li class="catalog__item">
            <div class="offer">
              <div class="offer__image">
                <div>
                  <div class="offer__image-content">
                    <!-- 1х: 270px; 2x: 540px -->
                    <picture>
                      <source type="image/webp" srcset="img/room-lux@1x.webp 1x, img/room-lux@2x.webp 2x">
                      <img src="img/room-lux@1x.jpg" srcset="img/room-lux@2x.jpg 2x" alt="Номер категории люкс">
                    </picture>
                  </div>
                </div>
              </div>
              <h3>Люкс</h3>
              <ul class="offer__description">
                <li class="offer__description-item">Размеры (ШхГхВ) - 160х160х180&nbsp;см</li>
                <li class="offer__description-item">Площадь - 2,56 м2</li>
                <li class="offer__description-item offer__description-item--flex">
                  Оснащение номера
                  <span class="offer__icon">
                    <svg width="16" height="12">
                      <use xlink:href="#icon-bed"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Лежак</span>
                  <span class="offer__icon">
                      <svg width="14" height="16">
                      <use xlink:href="#icon-claw"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Когтеточка</span>
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="#icon-toy"></use>
                    </svg>
                  </span>
                  <span class="offer__hint offer__hint--right">Игровой комплекс</span>
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="#icon-house"></use>
                    </svg>
                  </span>
                  <span class="offer__hint offer__hint--right offer__hint--narrow">Домик</span>
                </li>
                <li class="offer__description-item">
                  Цена за сутки: <b>500&#8381;</b>
                </li>
              </ul>
              <a class="button offer__button" href="#">
                <span>Забронировать</span>
                <span class="button__paw">
                  <svg width="21" height="18">
                    <use xlink:href="#icon-paw"></use>
                  </svg>
                </span>
              </a>
            </div>
          </li>
          <li class="catalog__item">
            <div class="offer">
              <div class="offer__image">
                <div>
                  <div class="offer__image-content">
                    <!-- 1х: 270px; 2x: 540px -->
                    <picture>
                      <source type="image/webp" srcset="img/room-lux-super@1x.webp 1x, img/room-lux-super@2x.webp 2x">
                      <img src="img/room-lux-super@1x.jpg" srcset="img/room-lux-super@2x.jpg 2x" alt="Номер категории супер-люкс">
                    </picture>
                  </div>
                </div>
              </div>
              <h3>Супер-Люкс</h3>
              <ul class="offer__description">
                <li class="offer__description-item">Размеры (ШхГхВ) - 180х160х180&nbsp;см</li>
                <li class="offer__description-item">Площадь - 2,88 м2</li>
                <li class="offer__description-item offer__description-item--flex">
                  Оснащение номера
                  <span class="offer__icon">
                    <svg width="16" height="12">
                      <use xlink:href="#icon-bed"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Лежак</span>
                  <span class="offer__icon">
                      <svg width="14" height="16">
                      <use xlink:href="#icon-claw"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Когтеточка</span>
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="#icon-toy"></use>
                    </svg>
                  </span>
                  <span class="offer__hint offer__hint--right">Игровой комплекс</span>
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="#icon-house"></use>
                    </svg>
                  </span>
                  <span class="offer__hint offer__hint--right offer__hint--narrow">Домик</span>
                </li>
                <li class="offer__description-item">
                  Цена за сутки: <b>600&#8381;</b>
                </li>
              </ul>
              <a class="button offer__button" href="#">
                <span>Забронировать</span>
                <span class="button__paw">
                  <svg width="21" height="18">
                    <use xlink:href="#icon-paw"></use>
                  </svg>
                </span>
              </a>
            </div>
          </li>
        </ul>
      </section>
    </div>
    <section class="catalog__banner banner">
      <h2>Каждый 7-й день<br><b>бесплатно!</b></h2>
      <p>Акция действует при размещении в&nbsp;номерах &ldquo;Люкс&rdquo; и&nbsp;&ldquo;Супер-Люкс&rdquo;</p>
      <a class="button button--white banner__button" href="#">
        <span>Забронировать</span>
        <span class="button__paw">
          <svg width="21" height="18">
            <use xlink:href="#icon-paw"></use>
          </svg>
        </span>
      </a>
      <svg class="banner__bg-icon " width="241" height="206">
        <use xlink:href="#icon-paw"></use>
      </svg>
    </section>
  </main>



  <!-- Скрипт подключения яндекс-карты-->
  <script src="https://api-maps.yandex.ru/2.1/?apikey=6b2b42a0-28a0-4e74-9f1b-7b685c9fd6cb&lang=ru_RU"></script>

  <script src="js/vendor.min.js"></script>
  <script src="js/script.min.js"></script>
</body>
</html>
