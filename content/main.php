

    <main class="main">
      <section class="main__intro">
        <p>Санкт-Петербург</p>
        <h1>Котейка</h1>
        <p>Уютная гостиница для котов и кошек</p>
        <button class="button button--white" type="button" onclick="window.location.href='catalog.php';">
          <span>Каталог</span>
          <span class="button__paw">
            <svg width="21" height="18"><use xlink:href="#icon-paw"></use>
            </svg>
          </span>
        </button>
      </section>
      <section class="main__advantages advantages" id="about">
        <div class="center center--padding-t center--padding-b">
          <h2 class="visually-hidden">Наши преимущества</h2>
          <b>Почему мы?</b>
          <ul class="advantages__list">
            <li class="advantages__item advantages__item--temp">
              <svg class="advantages__icon" width="91" height="91"><use xlink:href="#icon-temperature"></use>
              </svg>
              <h3>Комфортная температура</h3>
              <p>Во всех номерах поддерживается комфортная температура в пределах 23 - 25 градусов. В каждом номере можно дополнительно отрегулировать температуру.</p>
            </li>
            <li class="advantages__item advantages__item--video">
              <svg class="advantages__icon" width="91" height="91"><use xlink:href="#icon-video"></use>
              </svg>
              <h3>Видеонаблюдение</h3>
              <p>Мы предоставляем доступ в нашу систему. Вы сможете следить за своим питомцем со своего смартфона или компьютера.</p>
            </li>
            <li class="advantages__item advantages__item--taxi">
              <svg class="advantages__icon" width="91" height="91"><use xlink:href="#icon-taxi"></use>
              </svg>
              <h3>Услуги Зоотакси</h3>
              <p>Мы приедем за вашим питомцем в любой район Санкт-Петербурга.</p>
            </li>
            <li class="advantages__item advantages__item--food">
              <picture>
                <source type="image/webp" media="(min-width: 320px)" srcset="img/food@1x.webp 1x, img/food@2x.webp 2x">

                <img src="img/food@1x.png" srcset="img/food@2x.png 2x" width="91" height="91" alt="Иконка Сбалансированное питание">
              </picture>
              <h3>Сбалансированное питание</h3>
              <p>Вы можете привезти свой корм или доверить рацион своего питомца нашим профессионалам.</p>
            </li>
            <li class="advantages__item">
              <svg class="advantages__icon" width="91" height="91"><use xlink:href="#icon-walk"></use>
              </svg>
              <h3>Ежедневные прогулки</h3>
              <p>По вашему желанию мы выгуливаем вашего питомца два раза в день на специализированной закрытой территории.</p>
            </li>
            <li class="advantages__item advantages__item--vet">
              <svg class="advantages__icon" width="91" height="91"><use xlink:href="#icon-veterinarian"></use>
              </svg>
              <h3>Лучшие ветеринары</h3>
              <p>В гостинице 24 часа дежурит ветеринарный врач, который окажет любую помощь в случае необходимости.</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="main__rooms rooms" id="rooms">
        <div class="center center--sm center--padding-t">
          <h2>Номера</h2>
          <div class="rooms__slider-container swiper-container">
            <ul class="rooms__list swiper-wrapper">

              <?php
  $push = 'SELECT * FROM `cat_room` ORDER BY `cat_room`.`id_room` DESC limit 3';
  $input = mysqli_query($cat_db, $push);
  if (isset($input)){
    while($row = mysqli_fetch_array($input)){

  
?>
              <li class="rooms__item swiper-slide">
                <div class="rooms__img-container">
                  <picture>
                    <source type="image/webp" srcset="<?php echo $row['img2_room'];?>">
                    <source type="image/jpeg" srcset="<?php echo $row['img_room'];?>">
                    <img src="<?php echo $row['img_room'];?>" width="600" height="404" alt="Комфорт">
                  </picture>
                </div>
                <div class="rooms__info">
                  <h3><?php echo $row['class_room'];?></h3>
                  <ul class="rooms__info-list">
                    <li class="rooms__info-item">
                      <p>Площадь - <?php echo $row['square_room'];?></p>
                    </li>
                    <li class="rooms__info-item">
                      <p>Размеры (ШхГхВ) <span class="rooms__no-m">-</span> <?php echo $row['size_room'];?> см</p>
                    </li>
                    <li class="rooms__info-item">
                      <p>Цена за сутки: <?php echo $row['price_room']?>₽</p>
                    </li>
                  </ul>
                  <button class="button book-button" type="button">
                    <span>Забронировать</span>
                    <span class="button__paw">
                      <svg width="21" height="18"><use xlink:href="#icon-paw"></use>
                      </svg>
                    </span>
                  </button>
                </div>
              </li>
              <?php
  }
  }
              ?>
              
            </ul>

          </div>
          <div class="slider-controls">
            <ul class="dots dots--room">
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <div class="slider-controls__list">
              <button class="slider-controls__button slider-controls__button--left slider-controls__button--prev" type="button">
                <svg width="6" height="10"><use xlink:href="#icon-arrow"></use>
                </svg>
              </button>
              <button class="slider-controls__button slider-controls__button--right slider-controls__button--next" type="button">
                <svg width="6" height="10"><use xlink:href="#icon-arrow"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
      <section class="main__reviews reviews" id="reviews">
        <div class="center center--padding-t center--padding-b">
          <h2>Отзывы</h2>
          <div class="reviews__list-container swiper-container">
              <ul class="reviews__list swiper-wrapper">
                <li class="reviews__item swiper-slide">
                  <p>Первый раз пришлось оставить нашего котика в гостинице, очень переживали. Администратор Мария каждый день высылала нам фото нашего питомца, рассказывала, как он себя чувствует. И мы и котик остались очень довольны!</p>
                  <div class="reviews__container">
                    <p>Валерия Гришаева</p>
                    <p>15 ноября, 2019</p>
                  </div>
                </li>
                <li class="reviews__item swiper-slide">
                  <p>Гостиницу для питомцев нам посоветовали друзья. Они всегда оставляют здесь своего кота, когда уезжают. В “Котейке” очень хорошо заботятся о питомцах, в гостинице очень чисто. Всем рекомендую! Будем обращаться еще.</p>
                  <div class="reviews__container">
                    <p>Екатерина Минаева</p>
                    <p>10 октября, 2019</p>
                  </div>
                </li>
                <li class="reviews__item swiper-slide">
                  <p>Мой кот — настоящая привереда, угодить ему сложно. У меня были особые требования к уходу за ним, и “Котейка” отлично справились. Я часто наблюдал по видео за питомцем со своего телефона, это очень удобно.</p>
                  <div class="reviews__container">
                    <p>Павел Нечаев</p>
                    <p>2 августа, 2019</p>
                  </div>
                </li>
              </ul>
          </div>
          <div class="slider-controls">
            <ul class="dots dots--review">
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <div class="slider-controls__list">
              <button class="slider-controls__button slider-controls__button--left  slider-controls__review-button-prev" type="button">
                <svg width="6" height="12"><use xlink:href="#icon-arrow"></use>
                </svg>
              </button>
              <button class="slider-controls__button slider-controls__button--right  slider-controls__review-button-next" type="button">
                <svg width="6" height="12"><use xlink:href="#icon-arrow"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>

    

    <div class="overlay">
      <div class="modal modal--book modal--hide">
        <h2>Забронировать номер</h2>
          <form action="#" method="POST" autocomplete="on" id="book">
            <label for="name">Ваше имя</label>
            <input type="text" name="name" id="name" placeholder="Ваше имя" required="">

            <label for="pet-name">Имя Питомца</label>
            <input type="text" name="pet-name" id="pet-name" placeholder="Имя Питомца" required="">

            <label for="tel">Телефон</label>
            <input type="tel" name="tel" id="tel" placeholder="Телефон" pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}" minlength="18" maxlength="18" required="">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail" required="">
            <div>
              <span>Дата заезда</span>
              <label>
                <span>с</span>
                <input type="text" name="arrival" id="arrival" placeholder="26.01.2020" pattern="[0-9]{1,2}[\.][0-9]{1,2}[\.][0-9]{4}" required="">
              </label>
              <label>
                <span>по</span>
                <input type="text" name="departure" id="departure" placeholder="26.02.2020" pattern="[0-9]{1,2}[\.][0-9]{1,2}[\.][0-9]{4}" required="">
              </label>
            </div>
            <button id="book-submit" type="submit">
              <span>Отправить заявку</span>
              <span>
                <svg width="21" height="18"><use xlink:href="#icon-paw"></use>
                </svg>
              </span>
            </button>
          </form>
        <button id="form-close-x" class="modal__close" type="button"></button>
      </div>
      <div class="modal modal--accept modal--hide">
        <p>Спасибо за заявку!</p>
        <p>Мы свяжемся с вами в ближайшее время</p>
        <button id="accept-close-x" class="modal__close" type="button"></button>
        <button id="accept-close" class="button button--sm" type="button">
          <span>Ок</span>
          <span class="button__paw">
            <svg width="21" height="18"><use xlink:href="#icon-paw"></use>
            </svg>
          </span>
        </button>
      </div>
    </div>
  <!-- Скрипт подключения яндекс-карты-->
  <script src="https://api-maps.yandex.ru/2.1/?apikey=6b2b42a0-28a0-4e74-9f1b-7b685c9fd6cb&lang=ru_RU" type="text/javascript"></script>

  <script src="js/vendor.min.js"></script>

  <script src="js/script.min.js"></script>
</body>
</html>
