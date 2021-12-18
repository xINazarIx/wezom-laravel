@section('burgerMenu')
<div class="burgerMenu">
    <div class="burgerMenu__inner">
      <div class="burgerMenu__header">
        <button class="location burgerMenu__location">
          <svg class='location__img burgerMenu__location-img'>
            <use xlink:href="assets/images/spritemap.svg#sprite-location"></use>
          </svg>
          <span class="location__text burgerMenu__location-text">Херсон</span>
        </button>
        <div class="languages burgerMenu__languages">
          <a class="languages__link burgerMenu__languages-link" href="">УКР</a>
          <a class="languages__link burgerMenu__languages-link--active burgerMenu__languages-link" href="">РУС</a>
          <a class="languages__link burgerMenu__languages-link" href="">ENG</a>
        </div>
      </div>
      <div class="userIcons burgerMenu__userIcons">
        <button class="userIcons__btn open-popup-link" href='#check-popup'>
            <svg class="userIcons__img burgerMenu__userIcons-img" stroke='white' stroke-width='2' height='28px' width='28px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-user'></use>
            </svg>
        </button>
        <button class="userIcons__btn">
            <svg class="userIcons__img burgerMenu__userIcons-img" stroke='white' stroke-width='2' height='32px' width='30px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-fav'></use>
            </svg>
        </button>
        <button class="userIcons__btn">
            <svg class="userIcons__img burgerMenu__userIcons-img" stroke='white' stroke-width='2' height='32px' width='30px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-userBuying'></use>
            </svg>
        </button>
      </div>
      <div class="consultation burgerMenu__consultation">
        <p class="consultation__text burgerMenu__consultation-text">Консультация:</p>
        <a class="consultation__phone burgerMenu__consultation-phone" href="tel:0444903100">
          (044) 490 31 00
            <svg class='consultation__img burgerMenu__consultation-img'>
              <use xlink:href='assets/images/spritemap.svg#sprite-arrow-down'></use>
            </svg>
        </a>
      </div>
      <ul class="menu burgerMenu__menu">
        <li class="menu__item burgerMenu__menu-item">
          <a class="menu__link burgerMenu__menu-link" href="/catalog">
            Товары по питомцам
              <svg class="menu__img burgerMenu__menu-img">
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
              </svg>
          </a>
        </li>
        <li class="menu__item burgerMenu__menu-item">
          <a class="menu__link burgerMenu__menu-link" href="#">
            Бренды
              <svg class="menu__img burgerMenu__menu-img">
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
              </svg>
          </a>
        </li>
        <li class="menu__item burgerMenu__menu-item">
          <a class="menu__link burgerMenu__menu-link" href="#">
            Ветаптека
              <svg class="menu__img burgerMenu__menu-img">
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
              </svg>
          </a>
        </li>
        <li class="menu__item burgerMenu__menu-item">
          <a class="menu__link burgerMenu__menu-link" href="#">
            Найди друга
          </a>
        </li>
        <li class="menu__item burgerMenu__menu-item">
          <a class="menu__link burgerMenu__menu-link" href="#">
            Ветклиники
          </a>
        </li>
      </ul>

      <ul class="info burgerMenu__info">
        <li class="info__item burgerMenu__info-item">
          <a class="info__link burgerMenu__info-link" href="#">Магазины</a>
        </li>
        <li class="info__item burgerMenu__info-item">
          <a class="info__link burgerMenu__info-link" href="#">Блог</a>
        </li>
        <li class="info__item burgerMenu__info-item">
          <a class="info__link burgerMenu__info-link" href="#">
            Покупателям
              <svg class='info__img burgerMenu__info-img'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
              </svg>
          </a>
        </li>
      </ul>
      <div class="burgerMenu__infoBoxes">
        <div class="infoBoxes__box burgerMenu__infoBoxes-box">
          <div class="infoBoxes__title burgerMenu__infoBoxes-title">Компания</div>
          <ul class="infoBoxes__list burgerMenu__infoBoxes-list">
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">О компании</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Адреса магазинов «ZooBonus»</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Вакансии</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Благотворительность</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Контакты</a>
            </li>
          </ul>
        </div>
        <div class="infoBoxes__box burgerMenu__infoBoxes-box">
          <div class="infoBoxes__title burgerMenu__infoBoxes-title">Покупателям</div>
          <ul class="infoBoxes__list burgerMenu__infoBoxes-list">
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Доставка и оплата</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link footer__infoBoxes-link" href="#">FAQ</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Подарочные сертификаты</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Акции</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Породы животных</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Дисконтная программа</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Блог</a>
            </li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="#">Фотогалерея</a>
            </li>
          </ul>
        </div>
        <div class="infoBoxes__box burgerMenu__infoBoxes-box">
          <div class="infoBoxes__title burgerMenu__infoBoxes-title">Контакты</div>
          <ul class="infoBoxes__list burgerMenu__infoBoxes-list">
            <li class="infoBoxes__item burgerMenu__infoBoxes-info">Информационая служба:</li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link burgerMenu__infoBoxes-tel" href="tel:0444903100">(044) 490 3100</a></li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-text">Ежедневно с 08:30-21:00</li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-text">Email:
              <a class="infoBoxes__link burgerMenu__infoBoxes-link  burgerMenu__infoBoxes-email" href="mailto:info@wezom.com.ua">
                info@wezom.com.ua</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="burgerMask"></div>