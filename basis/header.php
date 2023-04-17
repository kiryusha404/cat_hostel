
<header class="header header--nojs header--closed">
  <div class="container header__wrapper">
    <a class="logo header__logo" href="index.php">
      <img src="img/logo.svg" width="63" height="52" alt="Логотип отеля для кошек Котейка">
    </a>
    <button class="header__toggle" type="button" aria-label="Открыть меню">
      <span></span>
    </button>
    <nav class="nav header__nav">
      <ul class="nav__list">
        <li class="nav__item">
          <a class="nav__link" href="index.php#about">Почему мы?</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="index.php#rooms">Номера</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="index.php#reviews">Отзывы</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="index.php#contacts">
            <span>Как нас найти</span>
            <span>Контакты</span>
          </a>
        </li>
        <?php if(!$_SESSION['id']){
        echo '<li class="nav__item">
                <a class="nav__link" href="authorization.php">Войти</a>
              </li>';
      }else{
        $push = 'SELECT name FROM users WHERE id_user="'.$_SESSION['id'].'"';
        $input = mysqli_query($cat_db, $push);
        $row = mysqli_fetch_array($input);
        echo '<li class="nav__item">
                <a class="nav__link" href="unsession.php">'.$row["name"].'</a>
              </li>';

      }
        ?>
      </ul>
    </nav>
    <a class="header__tel" href="tel:88003335599">8&nbsp;(800)&nbsp;333-55-99</a>
    <ul class="social header__social">
      <li class="social__item">
        <a class="social__link social__link--wide" href="#">
          <span class="visually-hidden">Котейка на Фейсбуке</span>
          <svg class="social__icon icon-svg" width="24" height="24">
            <use xlink:href="img/sprite_auto.svg#icon-fb"></use>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a class="social__link social__link--wide" href="#">
          <span class="visually-hidden">Котейка в Инстаграме</span>
          <svg class="social__icon icon-svg" width="24" height="24">
            <use xlink:href="img/sprite_auto.svg#icon-insta"></use>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a class="social__link social__link--wide" href="#">
          <span class="visually-hidden">Котейка в ВКонтакте</span>
          <svg class="social__icon icon-svg" width="24" height="24">
            <use xlink:href="img/sprite_auto.svg#icon-vk"></use>
          </svg>
        </a>
      </li>
    </ul>
  </div>
</header>
