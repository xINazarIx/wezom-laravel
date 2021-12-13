@section('header')
  <header class="header">
    <div class="header__inner">
      <div class="header__top">
        <button class="location header__location">
            <svg class='location__img header__location-img'>
              <use xlink:href="assets/images/spritemap.svg#sprite-location"></use>
            </svg>
          <span class="location__text header__location-text">Херсон</span>
        </button>
        <ul class="info header__info">
          <li class="info__item header__info-item">
            <a class="info__link header__info-link" href="#">Магазины</a>
          </li>
          <li class="info__item header__info-item">
            <a class="info__link header__info-link" href="#">Блог</a>
          </li>
          <li class="info__item header__info-item">
            <a class="info__link header__info-link" href="#">
              Покупателям
            </a>
          </li>
        </ul>
        <div class="consultation header__consultation">
          <p class="consultation__text header__consultation-text">Консультация:</p>
          <a class="consultation__phone header__consultation-phone" href="tel:0444903100">
            (044) 490 31 00
              <svg class='consultation__img header__consultation-img'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-down'></use>
              </svg>
          </a>
        </div>

        <div class="languages header__languages">
          <a class="languages__link header__languages-link" href="#">УКР</a>
          <a class="languages__link header__languages-link languages__link--active" href="#">РУС</a>
          <a class="languages__link header__languages-link" href="#">ENG</a>
        </div>
      </div>
      <div class="header__bottom">
        <a class="logo header__logo" href="/">
            <svg class="logo__img">
              <use xlink:href='assets/images/spritemap.svg#sprite-logo'></use>
            </svg>
        </a>

        <ul class="menu header__menu">
          <li class="menu__item header__menu-item header__menu-item--menu">
            <a class="menu__link header__menu-link" href="/catalog">
              Товары по питомцам
                <svg class="menu__img header__menu-img">
                  <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
                </svg>
            </a>
            <div class="menu__sub-menu">
              <div class="menu__sub-menu-links">
                <div class="menu__sub-menu-item">
                  <a class="menu__sub-menu-link" href="/goods">
                    <svg class="menu__sub-menu-icon" fill='none'>
                      <use xlink:href="assets/images/spritemap.svg#sprite-submenu-icon-1"></use>
                    </svg>
                    <span class="menu__sub-menu-text">Собаки</span>
                    <svg class="menu__sub-menu-arrow">
                      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
                    </svg>
                  </a>

                  <div class="menu__sub-menu-boxes">
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Корм</div>
                      <a class="menu__sub-menu-box-link" href='#'>Сухой корм</a>
                      <a class="menu__sub-menu-box-link" href='#'>Консервы</a>
                      <a class="menu__sub-menu-box-link" href='#'>Ветеринарные диеты</a>
                      <a class="menu__sub-menu-box-link" href='#'>Заменители молока</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Игрушки</div>
                      <a class="menu__sub-menu-box-link" href='#'>Интерактивные</a>
                      <a class="menu__sub-menu-box-link" href='#'>Удочки и дразнилки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Мышки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Мячики</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Здоровье</div>
                      <a class="menu__sub-menu-box-link" href='#'>Средства от блох и клещей</a>
                      <a class="menu__sub-menu-box-link" href='#'>Витамины и добавки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Средства от глистов</a>
                      <a class="menu__sub-menu-box-link" href='#'>Ветеринарные препараты</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Одежда и обувь</div>
                      <a class="menu__sub-menu-box-link" href='#'>Комбинезоны</a>
                      <a class="menu__sub-menu-box-link" href='#'>Костюмы</a>
                      <a class="menu__sub-menu-box-link" href='#'>Дождевики</a>
                      <a class="menu__sub-menu-box-link" href='#'>Свитера</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">товары для дома</div>
                      <a class="menu__sub-menu-box-link" href='#'>Домики</a>
                      <a class="menu__sub-menu-box-link" href='#'>Когтеточки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Спальные места</a>
                      <a class="menu__sub-menu-box-link" href='#'>Миски и поилки</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Лакомства</div>
                      <a class="menu__sub-menu-box-link" href='#'>Кости</a>
                      <a class="menu__sub-menu-box-link" href='#'>Печенье</a>
                      <a class="menu__sub-menu-box-link" href='#'>Для дрессировки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Сушеные лакомства</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Уход</div>
                      <a class="menu__sub-menu-box-link" href='#'>Средства по уходу</a>
                      <a class="menu__sub-menu-box-link" href='#'>Инструменты для груминга</a>
                      <a class="menu__sub-menu-box-link" href='#'>Туалеты и пеленки</a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Кометика</div>
                      <a class="menu__sub-menu-box-link" href='#'>Шампуни</a>
                      <a class="menu__sub-menu-box-link" href='#'>Духи</a>
                      <a class="menu__sub-menu-box-link" href='#'>Кондиционеры и спреи</a>
                      <a class="menu__sub-menu-box-link" href='#'>Профессиональная и выставочная косметика</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Амуниция</div>
                      <a class="menu__sub-menu-box-link" href='#'>Поводки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Ошейники</a>
                      <a class="menu__sub-menu-box-link" href='#'>Шлейки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Рулетки</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Путешествия</div>
                      <a class="menu__sub-menu-box-link" href='#'>Сумки и переноски</a>
                      <a class="menu__sub-menu-box-link" href='#'>Автоаксессуары</a>
                    </div>
                    <img class="menu__sub-menu-boxes-bunner js-lazy-load fade-in" data-zzload-source-img="assets/images/submenu-banner.jpg" data-zzload-source-srcset="assets/images/submenu-banner.jpeg" alt="#">
                    <img class="menu__sub-menu-boxes-dog js-lazy-load fade-in" data-zzload-source-img="assets/images/submenu-dog.png" data-zzload-source-srcset="assets/images/submenu-dog.webp" alt="#">
                  </div>
                </div>
                <div class="menu__sub-menu-item">
                  <a class="menu__sub-menu-link" href="#">
                    <svg class="menu__sub-menu-icon" fill='none'>
                      <use xlink:href="assets/images/spritemap.svg#sprite-submenu-icon-2"></use>
                    </svg>
                    <span class="menu__sub-menu-text">Кошки</span>
                    <svg class="menu__sub-menu-arrow">
                      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
                    </svg>
                  </a>
                  <div class="menu__sub-menu-boxes">
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Корм</div>
                      <a class="menu__sub-menu-box-link" href='#'>Сухой корм</a>
                      <a class="menu__sub-menu-box-link" href='#'>Консервы</a>
                      <a class="menu__sub-menu-box-link" href='#'>Ветеринарные диеты</a>
                      <a class="menu__sub-menu-box-link" href='#'>Заменители молока</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Здоровье</div>
                      <a class="menu__sub-menu-box-link" href='#'>Средства от блох и клещей</a>
                      <a class="menu__sub-menu-box-link" href='#'>Витамины и добавки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Средства от глистов</a>
                      <a class="menu__sub-menu-box-link" href='#'>Ветеринарные препараты</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Кометика</div>
                      <a class="menu__sub-menu-box-link" href='#'>Шампуни</a>
                      <a class="menu__sub-menu-box-link" href='#'>Духи</a>
                      <a class="menu__sub-menu-box-link" href='#'>Кондиционеры и спреи</a>
                      <a class="menu__sub-menu-box-link" href='#'>Профессиональная и выставочная косметика</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">Амуниция</div>
                      <a class="menu__sub-menu-box-link" href='#'>Поводки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Ошейники</a>
                      <a class="menu__sub-menu-box-link" href='#'>Шлейки</a>
                      <a class="menu__sub-menu-box-link" href='#'>Рулетки</a>
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                    </div>
                  </div>
                </div>
                <div class="menu__sub-menu-item">
                  <a class="menu__sub-menu-link" href="#">
                    <svg class="menu__sub-menu-icon" fill='none'>
                      <use xlink:href="assets/images/spritemap.svg#sprite-submenu-icon-3"></use>
                    </svg>
                    <span class="menu__sub-menu-text">Птицы</span>
                    <svg class="menu__sub-menu-arrow">
                      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
                    </svg>
                  </a>
                </div>
                <div class="menu__sub-menu-item">
                  <a class="menu__sub-menu-link" href="#">
                    <svg class="menu__sub-menu-icon" fill='none'>
                      <use xlink:href="assets/images/spritemap.svg#sprite-submenu-icon-4"></use>
                    </svg>
                    <span class="menu__sub-menu-text">Грызуны</span>
                    <svg class="menu__sub-menu-arrow">
                      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
                    </svg>
                  </a>
                </div>
                <div class="menu__sub-menu-item">
                  <a class="menu__sub-menu-link" href="#">
                    <svg class="menu__sub-menu-icon" fill='#202454'>
                      <use xlink:href="assets/images/spritemap.svg#sprite-submenu-star"></use>
                    </svg>
                    <span class="menu__sub-menu-text">Новинки</span>
                  </a>
                </div>
                <div class="menu__sub-menu-item">
                  <a class="menu__sub-menu-link" href="#">
                    <svg class="menu__sub-menu-icon" fill='#202454'>
                      <use xlink:href="assets/images/spritemap.svg#sprite-submenu-procent"></use>
                    </svg>
                    <span class="menu__sub-menu-text">Акции</span>
                  </a>
                </div>
              </div>
              <div class="menu__sub-menu-content"></div>
            </div>
          </li>
          <li class="menu__item header__menu-item header__menu-item--menu">
            <a class="menu__link header__menu-link" href="menu__link">
              Бренды
                <svg class="menu__img header__menu-img">
                  <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
                </svg>
            </a>
          </li>
          <li class="menu__item header__menu-item header__menu-item--menu">
            <a class="menu__link header__menu-link" href="menu__link">
              Ветаптека
                <svg class="menu__img header__menu-img">
                  <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
                </svg>
            </a>
          </li>
          <li class="menu__item header__menu-item">
            <a class="menu__link header__menu-link" href="menu__link">
              Найди друга
            </a>
          </li>
          <li class="menu__item header__menu-item">
            <a class="menu__link header__menu-link" href="menu__link">
              Ветклиники
            </a>
          </li>
        </ul>

        <div class="search header__search">
          <a class="search__btn" id='search'>
              <svg class="search__img">
                <use xlink:href="assets/images/spritemap.svg#sprite-search"></use>
              </svg>
            Поиск</a>
        </div>

        <div class="userIcons header__userIcons">
          <a class="userIcons__btn open-popup-link" href='#login-popup'>
              <svg class="userIcons__img header__userIcons-img" stroke='#202454' stroke-width='2' height='32px' width='30px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-user' height='27px' width='25px'></use>
              </svg>
          </a>
          <a class="userIcons__btn">
              <svg class="userIcons__img header__userIcons-img" stroke='#202454' stroke-width='2' height='32px' width='30px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-fav'></use>
              </svg>
          </a>
          <a class="userIcons__btn">
              <svg class="userIcons__img header__userIcons-img" stroke='#202454' stroke-width='2' height='32px' width='30px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-userBuying'></use>
              </svg>
          </a>
        </div>
        <div class="burger burger--js header__burger">
          <span></span>
        </div>
      </div>
    </div>
  </header>