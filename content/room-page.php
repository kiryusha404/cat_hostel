<?php
  $room_id = $_GET['id'];
?>
    <main class="room-page">
      <section>
        <div class="center center--flex center--padding-t center--padding-b">
          <?php
            $push = 'SELECT * FROM `cat_room` where id_room = '.$room_id.'';
            $room = mysqli_query($cat_db, $push);
            if($room){
            while($res = mysqli_fetch_array($room)){
              $class = $res['class_room'];
          ?>

          <div class="room-page__column">
            <div class="room-page__img-container">
              <div class="room-page__img-wrapper room-page__img-wrapper--top">
                <picture>
                  <source type="image/webp" media="(min-width: 320px)" srcset="img/super-lux2@1x.webp 1x, img/super-lux2@2x.webp 2x">
                  <img src="img/super-lux2@1x.jpg" srcset="img/super-lux2@2x.jpg 2x" alt="<?php echo $class; ?>">
                </picture>
                
              </div>

              <div class="room-page__img-wrapper room-page__img-wrapper--mid">
                <picture>
                  <source type="image/webp" media="(min-width: 320px)" srcset="img/super-lux3@1x.webp 1x, img/super-lux3@2x.webp 2x">
                  <img src="img/super-lux3@1x.jpg" srcset="img/super-lux3@2x.jpg 2x" alt="<?php echo $class; ?>">
                </picture>
              </div>

              <div class="room-page__img-wrapper room-page__img-wrapper--bot">
                <picture>
                  <source type="image/webp" media="(min-width: 320px)" srcset="img/super-lux4@1x.webp 1x, img/super-lux4@2x.webp 2x">
                  <img src="img/super-lux4@1x.jpg" srcset="img/super-lux4@2x.jpg 2x" alt="<?php echo $class; ?>">
                </picture>
              </div>
            </div>
            <div class="room-page__img-wrapper">
              <picture>
                <source type="image/webp" media="(min-width: 320px)" srcset="<?php echo $res['img2_room']; ?>">
                <img src="<?php echo $res['img_room']; ?>" srcset="<?php echo $res['img_room']; ?>" width="500" height="396" alt="<?php echo $res['class_room']; ?>">
              </picture>
            </div>
          </div>
   
          <div class="room-page__column">
            <h1><?php echo $class; ?></h1>
            <p>Размеры (ШхГхВ) - <?php echo $res['size_room']; ?> см</p>
            <p>Площадь - <?php echo $res['square_room']; ?> м2</p>
            <p>Оснащение номера</p>

            <ul class="room-page__list">
            <?php
                    $add = 'SELECT name_addition.name_addition, name_addition.img_addition FROM room_addition JOIN name_addition ON room_addition.name_addition=name_addition.id_addition WHERE room_addition.room_addition = '.$res['id_room'].'';
                    $addition = mysqli_query($cat_db, $add);
                    $flag;
                    if ($addition){
                      while($add_room = mysqli_fetch_array($addition)){
                  ?>
              <li class="room-page__item room-page__item--<?php if($add_room['img_addition'] == "#icon-bed"){echo "bed";}else if($add_room['img_addition'] == "#icon-house"){echo "house";}else if($add_room['img_addition'] == "#icon-toy"){echo "play";}else if($add_room['img_addition'] == "#icon-claw"){echo "claw";}?>">
                <span><use xlink:href="<?php echo $add_room['img_addition']; ?>"></use></span>
                <p><?php echo $add_room['name_addition']; ?></p>
              </li>
              <?php
                  $flag = $add_room['name_addition'];
                      }}
                      if(!$flag){
                  ?>
              <li class="room-page__item room-page__item--none">
                <span><use xlink:href="#icon-none"></use></span>
                <p>Пустой номер</p>
              </li>
                  <?php
                      }
                  ?>
            </ul>
            <p>Цена за сутки: <span class="room-page__price"></span><?php echo $res['price_room']; ?>₽</p>
            <button class="button book-button" type="button">
              <span>Забронировать</span>
              <span class="button__paw">
                <svg width="21" height="18"><use xlink:href="#icon-paw"></use>
                </svg>
              </span>
              
            </button>
          </div>
        </div>
        <?php
}}
?>
      </section>
      <section class="rooms rooms--page">
        <div class="center center--sm center--padding-t center--padding-b">
          <h2>Другие номера</h2>
          <div class="rooms__slider-container swiper-container">
          <ul class="rooms__list swiper-wrapper">

<?php
$push = 'SELECT * FROM `cat_room` where id_room != '.$room_id.' ORDER BY `cat_room`.`id_room` DESC limit 3';
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
                <svg width="6" height="12"><use xlink:href="#icon-arrow"></use>
                </svg>
              </button>
              <button class="slider-controls__button slider-controls__button--right slider-controls__button--next" type="button">
                <svg width="6" height="12"><use xlink:href="#icon-arrow"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
  <section class="contacts" id="contacts">
    <div class="contacts__info">
      <div class="contacts__wrapper">
        <h2>Как нас найти</h2>
        <address class="contacts__list">
          <div class="contacts__item">
            <b>Адрес</b>
            <span>Санкт-Петербург,<br> ул&nbsp;Большая Конюшенная, д&nbsp;19</span>
          </div>
          <div class="contacts__item">
            <b>Режим работы</b>
            <span>Ежедневно, с&nbsp;9:00 до&nbsp;20:00</span>
          </div>
          <div class="contacts__item">
            <b>Телефон</b>
            <a class="contacts__link" href="tel:88003335599">8&nbsp;(800)&nbsp;333-55-99</a>
          </div>
          <div class="contacts__item">
            <b>E-mail</b>
            <a class="contacts__link" href="mailto:info@cat-hotel.ru">info@cat-hotel.ru</a>
          </div>
          <div class="contacts__item">
            <b>Социальные сети</b>
            <ul class="social footer__social">
              <li class="social__item">
                <a class="social__link" href="#">
                  <span class="visually-hidden">Котейка на Фейсбуке</span>
                  <svg class="social__icon icon-svg" width="24" height="24">
                    <use xlink:href="img/sprite_auto.svg#icon-fb"></use>
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a class="social__link" href="#">
                  <span class="visually-hidden">Котейка в Инстаграме</span>
                  <svg class="social__icon icon-svg" width="24" height="24">
                    <use xlink:href="img/sprite_auto.svg#icon-insta"></use>
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a class="social__link" href="#">
                  <span class="visually-hidden">Котейка в ВКонтакте</span>
                  <svg class="social__icon icon-svg" width="24" height="24">
                    <use xlink:href="img/sprite_auto.svg#icon-vk"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </address>
      </div>
    </div>
    <div class="contacts__map map">
      <div class="map__fallback">
        <picture>
          <source type="image/webp" srcset="img/map@1x.webp 1x, img/map@2x.webp 2x">
          <img src="img/map@1x.jpg" srcset="img/map@2x.jpg 2x" alt="Часть карты с отелем для кошек Котейка по адресу г. Санкт-Петербург, ул. Б. Конюшенная, д. 19">
        </picture>
      </div>
      <div class="map__image" id="map"></div>
    </div>
  </section>
  <div class="footer__navigation footer__wrapper">
    <a class="logo footer__logo" href="main.html">
      <img src="img/logo.svg" width="63" height="52" alt="Логотип отеля для кошек Котейка">
    </a>
  <nav class="nav footer__nav">
      <ul class="nav__list nav__list--col">
        <li class="nav__item">
          <a class="nav__link" href="main.html#about">Почему мы?</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="main.html#rooms">Номера</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="main.html#reviews">Отзывы</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="main.html#contacts">Как нас найти</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="footer__bottom">
    <div class="footer__wrapper">
      <a href="#">&copy; 2019 Все права защищены</a>
      <a href="#">Политика конфиденциальности</a>
    </div>
  </div>
</footer>


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
          <button id="accept-close" class="button button--sm" type="button">
            <span>Ок</span>
            <span class="button__paw">
              <svg width="21" height="18"><use xlink:href="#icon-paw"></use>
              </svg>
            </span>
          </button>
          <button id="accept-close-x" class="modal__close" type="button"></button>
      </div>
    </div>


