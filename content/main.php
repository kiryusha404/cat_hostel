

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
              <a href="room_page.php?id=<?php echo $row['id_room'];?>"><picture>
                    <source type="image/webp" srcset="<?php echo $row['img2_room'];?>">
                    <source type="image/jpeg" srcset="<?php echo $row['img_room'];?>">
                    <img src="<?php echo $row['img_room'];?>" width="600" height="404" alt="Комфорт">
                  </picture></a>
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
                  <button class="button "  onclick="window.location.href='room_page.php?id=<?php echo $row['id_room'];?>';">
                    <span>Посмотреть</span>
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
                <?php
                    $feedback = 'SELECT feedback.text_feedback as text, feedback.date as date , booking_room.name_user as name FROM `feedback` JOIN booking_room on feedback.id_booking = booking_room.id_booking ORDER BY feedback.id_feedback ASC LIMIT 5';
                    $feed = mysqli_query($cat_db, $feedback);
                      while($feet = mysqli_fetch_array($feed)){
                ?>
                <li class="reviews__item swiper-slide">
                  <p><?php echo $feet['text']; ?></p>
                  <div class="reviews__container">
                    <p><?php echo $feet['name']; ?></p>
                    <p><?php echo $feet['date']; ?></p>
                  </div>
                </li>
                <?php
                      }
                ?>
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

    



