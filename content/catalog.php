<?php
  if(empty($_POST['from']) && empty($_POST['up'])){
  $push = 'SELECT * FROM `cat_room` ORDER BY `cat_room`.`square_room` ASC';
  $input = mysqli_query($cat_db, $push);
  echo $_POST['from'];
  echo $_POST['up'];
  }else{
    if(!$_POST['from']){
      $_POST['from'] = 0;
    }
    if(!$_POST['up']){
      $_POST['up'] = 999999;
    }
    $push = 'SELECT * FROM `cat_room`  WHERE price_room >= "'.$_POST['from'].'" AND price_room <= "'.$_POST['up'].'" ORDER BY `cat_room`.`square_room` ASC';
    $input = mysqli_query($cat_db, $push);
  }
?>



  <main class="catalog container">
    <div class="catalog__wrapper" id="catalog__wrapper">
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
  <form action="#" method="POST" >
    <fieldset>
    <?php
      $push = 'SELECT price_room FROM `cat_room` ORDER BY `cat_room`.`price_room` ASC limit 1';
      $min_price = mysqli_query($cat_db, $push);
      $res = mysqli_fetch_array($min_price);
      
    ?>
      <h3>Цена за сутки,<span>&#8381;</span></h3>
      <label for="from">
        <input type="text" id="from" placeholder="<?php echo $res['price_room']; ?>" value="<?php echo $_POST['from']; ?>">
        От
      </label>
      <?php
      $push = 'SELECT price_room FROM `cat_room` ORDER BY `cat_room`.`price_room` DESC limit 1';
      $max_price = mysqli_query($cat_db, $push);
      $res = mysqli_fetch_array($max_price);
    ?>
      <label for="up-to">
        <input type="text" id="up" placeholder="<?php echo $res['price_room']; ?>" value="<?php echo $_POST['up']; ?>">
        До
      </label>
      
      <span class="filter__hint">Значение "от" не должно превышать значение "до"</span>
    </fieldset>
    <fieldset>
      <h3>Площадь</h3>
      <?php 
      $square = 'SELECT square_room FROM `cat_room`  
      GROUP BY square_room  
      ORDER BY `cat_room`.`square_room` ASC';
      $sqr_r = mysqli_query($cat_db, $square);
      $inc = 0;
      if (isset($input)){
        while($cat_sqr = mysqli_fetch_array($sqr_r)){
          $sqr = $cat_sqr['square_room'];
          $inc = $inc + 1;
        ?>
      <label for="square<?php echo $inc; ?>">
        <input type="checkbox" name="<?php echo $sqr; ?>" id="square<?php echo $inc; ?>">
        <span></span>
        <?php echo $sqr; ?>
      </label>
<?php
        }}
?>

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
    <button type="submit">Применить</button>
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
        <?php 
                if (isset($input)){
                while($row = mysqli_fetch_array($input)){
                ?>
          <li class="catalog__item">
            <div class="offer">
              <div class="offer__image">
                <div>
                  <div class="offer__image-content">
                    <!-- 1х: 270px; 2x: 540px -->
                    <picture>
                      <source type="image/webp" srcset="<?php echo $row['img2_room'];?>">
                      <img src="<?php echo row['img_room'];?>"  alt="Номер категории эконом">
                    </picture>
                  </div>
                </div>
              </div>
              <h3><?php echo $row['class_room'];?></h3>
              <ul class="offer__description">
                <li class="offer__description-item">Размеры (ШхГхВ) - <?php echo $row['size_room'];?>&nbsp;см</li>
                <li class="offer__description-item">Площадь - <?php echo $row['square_room'];?> м2</li>
                <li class="offer__description-item offer__description-item--flex">
                  Оснащение номера
                  <?php
                    $add = 'SELECT name_addition.name_addition, name_addition.img_addition FROM room_addition JOIN name_addition ON room_addition.name_addition=name_addition.id_addition WHERE room_addition.room_addition = '.$row['id_room'].'';
                    $addition = mysqli_query($cat_db, $add);
                    $flag;
                    if ($addition){
                      while($add_room = mysqli_fetch_array($addition)){
                  ?>
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="<?php echo $add_room['img_addition']; ?>"></use>
                    </svg>
                  </span>
                  <span class="offer__hint"><?php echo $add_room['name_addition']; ?></span>
                  <?php
                  $flag = $add_room['name_addition'];
                      }}
                      if(!$flag){
                  ?>
                  <span class="offer__icon">
                    <svg width="16" height="16">
                      <use xlink:href="#icon-none"></use>
                    </svg>
                  </span>
                  <span class="offer__hint">Пустой номер</span>
                  <?php
                      }
                  ?>
                </li>


                <span class="button__paw">
                  <svg width="21" height="18">
                    <use xlink:href="#icon-paw"></use>
                  </svg>

                </span>
                                <li class="offer__description-item">
                  Цена за сутки: <b><?php echo $row['price_room']?>&#8381;</b>
                </li>
              </ul>
              <a class="button offer__button" href="#">
                <span>Забронировать</span>


              </a>
            </div>
          </li>
          <?php 
                    }
                }
                ?>
      </section>
    </div>
    <section class="catalog__banner banner">
      <h2>Каждый 7-й день<br><b>бесплатно!</b></h2>
      <p>Акция действует при размещении в&nbsp;номерах &ldquo;Люкс&rdquo; и&nbsp;&ldquo;Супер-Люкс&rdquo;</p>
      <a class="button button--white banner__button" href="catalog.php#catalog__wrapper">
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
