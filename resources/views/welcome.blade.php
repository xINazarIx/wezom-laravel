<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>wezom-laravel</title>
  <link rel="stylesheet" href="{{mix('assets/css/style.css')}}">
</head>
<body>

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
        <a class="logo header__logo" href="#">
            <svg class="logo__img">
              <use xlink:href='assets/images/spritemap.svg#sprite-logo'></use>
            </svg>
        </a>

        <ul class="menu header__menu">
          <li class="menu__item header__menu-item header__menu-item--menu">
            <a class="menu__link header__menu-link" href="menu__link">
              Товары по питомцам
                <svg class="menu__img header__menu-img">
                  <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
                </svg>
            </a>
            <div class="menu__sub-menu">
              <div class="menu__sub-menu-links">
                <div class="menu__sub-menu-item">
                  <a class="menu__sub-menu-link" href="#">
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
                    <img class="menu__sub-menu-boxes-bunner js-lazy-load fade-in" data-zzload-source-img="images/submenu-banner.jpg" data-zzload-source-srcset="images/submenu-banner.jpeg" alt="#">
                    <img class="menu__sub-menu-boxes-dog js-lazy-load fade-in" data-zzload-source-img="images/submenu-dog.png" data-zzload-source-srcset="images/submenu-dog.webp" alt="#">
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
              <div class="menu__sub-menu-content">
                <div class="menu__sub-menu-title">Нужно выбрать питомца</div>
              </div>
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

  <div class="slider">
    <div class="container">
      <div class="slider__inner">
        <div class="slider__top">
          <h2 class="slider__title">Лучшие предложения недели</h2>
          <ul class="petsNav slider__petsNav">
            <li class="petsNav__item"><button class="petsNav__btn petsNav__btn--active" data-tab='#slider__items--dog'>Собакам</button>
            </li>
            <li class="petsNav__item"><button class="petsNav__btn" data-tab='#slider__items--cat'>Кошкам</button></li>
            <li class="petsNav__item"><button class="petsNav__btn" data-tab='#slider__items--buird'>Птицам</button></li>
            <li class="petsNav__item"><button class="petsNav__btn" data-tab='#slider__items--mouse'>Грызунам</button></li>
          </ul>
        </div>
        <div class="slider__wrapper slider__wrapper--active" id='slider__items--dog' data-check='true'>
          <div class="slider__items">

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-1.png" data-zzload-source-srcset="assets/images/slider-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='1'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text slider__stars-text--disabled'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">1 700,22</span>
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-2.png" data-zzload-source-srcset="assets/images/slider-2.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='5'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(12)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>от 198,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">от 260,22</span>
                  <span class="slider__prices-currentlyPrice">от 206,71 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--green slider__widget">
                  <p class="widget__text">Новинка</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-3.png" data-zzload-source-srcset="assets/images/slider-3.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='4'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(65)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>Автозаказ</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-4.png" data-zzload-source-srcset="assets/images/slider-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Scalibor (Скалибор) ошейник 48 см</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>520,00 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">640,22</span>
                  <span class="slider__prices-currentlyPrice">560,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-5.png" data-zzload-source-srcset="assets/images/slider-5.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Scalibor (Скалибор) ошейник 48 см</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>520,00 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">640,22</span>
                  <span class="slider__prices-currentlyPrice">560,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-4.png" data-zzload-source-srcset="assets/images/slider-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Scalibor (Скалибор) ошейник 48 см</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>520,00 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">640,22</span>
                  <span class="slider__prices-currentlyPrice">560,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-5.png" data-zzload-source-srcset="assets/images/slider-5.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Scalibor (Скалибор) ошейник 48 см</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>520,00 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">640,22</span>
                  <span class="slider__prices-currentlyPrice">560,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-5.png" data-zzload-source-srcset="assets/images/slider-5.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Scalibor (Скалибор) ошейник 48 см</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>520,00 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">640,22</span>
                  <span class="slider__prices-currentlyPrice">560,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-4.png" data-zzload-source-srcset="assets/images/slider-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-2.png" data-zzload-source-srcset="assets/images/slider-2.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='5'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(23)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">1 700,22</span>
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-2.png" data-zzload-source-srcset="assets/images/slider-2.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='3'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(9)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="slider__navBtns">
            <button class="navBtn slider__navBtn slider__navBtn-prev">
              <svg class="navBtn__img" width='9px' height='14px' stroke='white' stroke-width='2'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-prev"></use>
              </svg>
            </button>
            <button class="navBtn slider__navBtn slider__navBtn-next">
              <svg class="navBtn__img" width='9px' height='14px' stroke='white' stroke-width='2'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-next"></use>
              </svg>
            </button>
          </div>
        </div>

        <div class="slider__wrapper" id='slider__items--cat' data-check='false'>
          <div class="slider__items">
            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>  
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-5.png" data-zzload-source-srcset="assets/images/slider-5.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text slider__stars-text--disabled'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">1 700,22</span>
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-4.png" data-zzload-source-srcset="assets/images/slider-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='5'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(12)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>от 198,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">от 260,22</span>
                  <span class="slider__prices-currentlyPrice">от 206,71 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--green slider__widget">
                  <p class="widget__text">Новинка</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-3.png" data-zzload-source-srcset="assets/images/slider-3.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='4'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(65)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>Автозаказ</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-2.png" data-zzload-source-srcset="assets/images/slider-2.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Scalibor (Скалибор) ошейник 48 см</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>520,00 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">640,22</span>
                  <span class="slider__prices-currentlyPrice">560,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-1.png" data-zzload-source-srcset="assets/images/slider-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-2.png" data-zzload-source-srcset="assets/images/slider-2.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='5'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(23)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">1 700,22</span>
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-2.png" data-zzload-source-srcset="assets/images/slider-2.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='3'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(9)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="slider__navBtns">
            <button class="navBtn slider__navBtn slider__navBtn-prev">
              <svg class="navBtn__img" width='9px' height='14px' stroke='white' stroke-width='2'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-prev"></use>
              </svg>
            </button>
            <button class="navBtn slider__navBtn slider__navBtn-next">
              <svg class="navBtn__img" width='9px' height='14px' stroke='white' stroke-width='2'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-next"></use>
              </svg>
            </button>
          </div>
        </div>

        <div class="slider__wrapper" id='slider__items--buird' data-check='false'>
          <div class="slider__items">
            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>  
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-4.png" data-zzload-source-srcset="assets/images/slider-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text slider__stars-text--disabled'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">1 700,22</span>
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-5.png" data-zzload-source-srcset="assets/images/slider-5.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='5'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(12)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>от 198,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">от 260,22</span>
                  <span class="slider__prices-currentlyPrice">от 206,71 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--green slider__widget">
                  <p class="widget__text">Новинка</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-4.png" data-zzload-source-srcset="assets/images/slider-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='4'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(65)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>Автозаказ</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-3.png" data-zzload-source-srcset="assets/images/slider-3.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Scalibor (Скалибор) ошейник 48 см</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>520,00 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">640,22</span>
                  <span class="slider__prices-currentlyPrice">560,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-1.png" data-zzload-source-srcset="assets/images/slider-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-5.png" data-zzload-source-srcset="assets/images/slider-5.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='5'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(23)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">1 700,22</span>
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-1.png" data-zzload-source-srcset="assets/images/slider-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='3'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(9)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="slider__navBtns">
            <button class="navBtn slider__navBtn slider__navBtn-prev">
              <svg class="navBtn__img" width='9px' height='14px' stroke='white' stroke-width='2'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-prev"></use>
              </svg>
            </button>
            <button class="navBtn slider__navBtn slider__navBtn-next">
              <svg class="navBtn__img" width='9px' height='14px' stroke='white' stroke-width='2'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-next"></use>
              </svg>
            </button>
          </div>
        </div>

        <div class="slider__wrapper" id='slider__items--mouse' data-check='false'>
          <div class="slider__items">
            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>  
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-1.png" data-zzload-source-srcset="assets/images/slider-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text slider__stars-text--disabled'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">1 700,22</span>
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-3.png" data-zzload-source-srcset="assets/images/slider-3.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='5'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(12)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>от 198,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">от 260,22</span>
                  <span class="slider__prices-currentlyPrice">от 206,71 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--green slider__widget">
                  <p class="widget__text">Новинка</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-4.png" data-zzload-source-srcset="assets/images/slider-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='4'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(65)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>Автозаказ</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-1.png" data-zzload-source-srcset="assets/images/slider-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Scalibor (Скалибор) ошейник 48 см</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>520,00 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">640,22</span>
                  <span class="slider__prices-currentlyPrice">560,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-1.png" data-zzload-source-srcset="assets/images/slider-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='0'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(0)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <div class="widget widget--pink slider__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-5.png" data-zzload-source-srcset="assets/images/slider-5.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='5'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(23)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-lastPrice">1 700,22</span>
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="slider__item">
              <a class="slider__card" href="#">
                <div class="widget widget--purpure slider__widget">
                  <p class="widget__text">Топ продаж</p>
                </div>
                <img  class="slider__item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/slider-4.png" data-zzload-source-srcset="assets/images/slider-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              </a>
              <div class="slider__description">
                <a class="slider__description-text" href='#'>1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг</a>
                <div class="rating">
                  <div class="rating__stars slider__rating-stars" data-total='3'>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                    <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                  <span class='slider__stars-text'>(9)</span>
                </div>
                <div class="slider__updatePrice">
                  <button class="updateBtn slider__updateBtn">
                    <svg class="updateBtn__img">
                      <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                    </svg>
                  </button>
                  <span class='slider__updatePrice-text'>1 550,22 ₴</span>
                </div>
                <div class="slider__prices">
                  <span class="slider__prices-currentlyPrice">1 600,22 ₴</span>
                </div>
                <button class="buyBtn slider__buyBtn">
                  <svg class="buyBtn__img">
                    <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="slider__navBtns">
            <button class="navBtn slider__navBtn slider__navBtn-prev">
              <svg class="navBtn__img" width='9px' height='14px' stroke='white' stroke-width='2'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-prev"></use>
              </svg>
            </button>
            <button class="navBtn slider__navBtn slider__navBtn-next">
              <svg class="navBtn__img" width='9px' height='14px' stroke='white' stroke-width='2'>
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-next"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="useful">
    <div class="container">
      <div class="useful__inner">
        <div class="useful__find">
          <div class="useful__find-subtitle">Объявления о продаже</div>
            <img  class="js-lazy-load fade-in" data-zzload-source-img="assets/images/paw.png" data-zzload-source-srcset="assets/images/paw.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
          <div class="useful__find-title">Найди друга</div>
          <div class="useful__find-text">Ищете питомца? Посмотрите сотни объявлений от проверенных разводителей.</div>
          <div class="useful__find-images">
            <a class="useful__find-link" href='#' target="_blank">
              <img  class="useful__find-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-1.jpg" data-zzload-source-srcset="assets/images/pets-1.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
            <a class="useful__find-link" href='#' target="_blank">
              <img  class="useful__find-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-2.jpg" data-zzload-source-srcset="assets/images/pets-2.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
            <a class="useful__find-link" href='#' target="_blank">
              <img  class="useful__find-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-3.jpg" data-zzload-source-srcset="assets/images/pets-3.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
            <a class="useful__find-link" href='#' target="_blank">
              <img  class="useful__find-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-4.jpg" data-zzload-source-srcset="assets/images/pets-4.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
            <a class="useful__find-link" href='#' target="_blank">
              <img  class="useful__find-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-5.jpg" data-zzload-source-srcset="assets/images/pets-5.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
            <a class="useful__find-link" href='#' target="_blank">
              <img  class="useful__find-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-6.jpg" data-zzload-source-srcset="assets/images/pets-6.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          </div>
          <div class="btn useful__find-btn">Все объявления
            <svg class='useful__find-btn-svg' fill='none' height='13px' width='9px' stroke='white' stroke-width='2'>
              <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
            </svg>
          </div>
        </div>
        <div class="useful__materials">
          <div class="useful__materials-inner">
            <div class="useful__materials-title">Полезные материалы</div>
            <div class="useful__materials-header">
              <div class="useful__materials-links">
                <a class="useful__materials-link" href="#" target="_blank">Новости</a>
                <a class="useful__materials-link" href="#" target="_blank">Полезные советы</a>
                <a class="useful__materials-link" href="#" target="_blank">Видео</a>
                <a class="useful__materials-link" href="#" target="_blank">Обзор товаров</a>
                <a class="useful__materials-link" href="#" target="_blank">Лайфхаки</a>
              </div>
              <a class="goTo useful__materials-goTo" href='#' target="_blank">Перейти в блог</a>
            </div>
            <div class="useful__materials-items">
              <div class="useful__materials-item">
                <a class="useful__materials-item-card" href="#" target="_blank">
                  <div class="widget widget--purpure useful__materials-item-widget">Полезные советы</div>
                  <img class="useful__materials-item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-7.jpg" data-zzload-source-srcset="assets/images/pets-7.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
                </a>
                <div class="useful__materials-item-description">
                  <div class="useful__materials-item-date">
                    <div class="useful__materials-item-num">22</div>
                    <div class="useful__materials-item-mounth">сент</div>
                  </div>
                  <a class="useful__materials-item-text" href='#' target='_blank'>Как выбрать корм для питомца. Советы профессионалов. Выбираем корм для котов 7+</a>
                </div>
              </div>
              <div class="useful__materials-item">
                <a class="useful__materials-item-card" href="#" target="_blank">
                  <div class="widget widget--yellow useful__materials-item-widget">Лайфхаки</div>
                  <img class="useful__materials-item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-8.jpg" data-zzload-source-srcset="assets/images/pets-8.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
                </a>
                <div class="useful__materials-item-description">
                  <div class="useful__materials-item-date">
                    <div class="useful__materials-item-num">19</div>
                    <div class="useful__materials-item-mounth">сент</div>
                  </div>
                  <a class="useful__materials-item-text" href='#' target='_blank'>Как научить собаку команде "принеси тапочки" в домашних условиях</a>
                </div>
              </div>
              <div class="useful__materials-item">
                <a class="useful__materials-item-card" href="#" target="-blank">
                  <div class="widget widget--green useful__materials-item-widget">Видео</div>
                  <img class="useful__materials-item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-9.jpg" data-zzload-source-srcset="assets/images/pets-9.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
                </a>
                <div class="useful__materials-item-description">
                  <div class="useful__materials-item-date">
                    <div class="useful__materials-item-num">14</div>
                    <div class="useful__materials-item-mounth">сент</div>
                  </div>
                  <a class="useful__materials-item-text" href='#' target='_blank'>Обзор товаров. Выбираем лучшую когтеточку для вашего кота.</a>
                </div>
              </div>
              <div class="useful__materials-item">
                <a class="useful__materials-item-card" href="#" target="_blank">
                  <div class="widget widget--blue useful__materials-item-widget">Обзор товаров</div>
                  <img class="useful__materials-item-img js-lazy-load fade-in" data-zzload-source-img="assets/images/pets-10.jpg" data-zzload-source-srcset="assets/images/pets-10.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
                </a>
                <div class="useful__materials-item-description">
                  <div class="useful__materials-item-date">
                    <div class="useful__materials-item-num">09</div>
                    <div class="useful__materials-item-mounth">сент</div>
                  </div>
                  <a class="useful__materials-item-text" href='#' target='_blank'>Игрушка для собак Trixie Мяч светящийся с шипами</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="benefits">
    <div class="container">
      <div class="benefits__inner">
        <div class="benefits__items">
          <div class="benefits__item">
            <a class="benefits__item-icon" href="#" target="_blank">
              <svg class="benefits__item-img" width="44px" height="32px">
                <use xlink:href="assets/images/spritemap.svg#sprite-benefits-1"></use>
              </svg>
            </a>
            <div class="benefits__item-text">Бесплатная доставка при заказе от 300 грн</div>
          </div>
          <div class="benefits__item">
            <a class="benefits__item-icon" href="#" target="_blank">
              <svg class="benefits__item-img" width="29px" height="32px">
                <use xlink:href="assets/images/spritemap.svg#sprite-benefits-2"></use>
              </svg>
            </a>
            <div class="benefits__item-text">Акции и скидки среди 2400 товаров</div>
          </div>
          <div class="benefits__item">
            <a class="benefits__item-icon" href="#" target="_blank">
              <svg class="benefits__item-img" width="32px" height="32px">
                <use xlink:href="assets/images/spritemap.svg#sprite-benefits-3"></use>
              </svg>
            </a>
            <div class="benefits__item-text">Более 100 магазинов по всей Украине</div>
          </div>
          <div class="benefits__item">
            <a class="benefits__item-icon" href="#" target="_blank">
              <svg class="benefits__item-img" width="40px" height="26px" fill='none'>
                <use xlink:href="assets/images/spritemap.svg#sprite-benefits-4"></use>
              </svg>
            </a>
            <div class="benefits__item-text">Дисконтная программа ZooBonus.ua</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="description">
    <div class="container">
      <div class="description__inner">
        <div class="description__boxes">
          <div class="description__box">
            <div class="description__box-title">Зоомагазин для домашних питомцев</div>
            <div class="description__box-text">Любящие владельцы собак и кошек всегда хотят порадовать своих любимцев новыми игрушками,   приобрести качественную амуницию, обеспечить животному полноценное питание и отдых, заботятся о его здоровье. Зоомагазин —  это любимое место для всех любителей животных.</div>
          </div>

          <div class="description__box">
            <div class="description__box-title description__box-title--low">
              Каким должен быть хороший магазин товаров для животных
            </div>
            <div class="description__box-text">Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя:</div>
          </div>

          <div class="description__box description__box--hidden">
            <div class="description__box-title description__box-title--low">
              Каким должен быть хороший магазин товаров для животных
            </div>
            <div class="description__box-text">Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя:</div>
          </div>

          <div class="description__box description__box--hidden">
            <div class="description__box-title description__box-title--low">
              Каким должен быть хороший магазин товаров для животных
            </div>
            <div class="description__box-text">Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя>Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя>Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателяМногие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя>Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя>Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателяМногие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя>Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя>Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателяМногие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя>Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя>Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя:</div>
          </div>

          <div class="description__box description__box--hidden">
            <div class="description__box-title description__box-title--low">
              Каким должен быть хороший магазин товаров для животных
            </div>
            <div class="description__box-text">Многие владельцы животных часами просматривают адреса зоомагазинов в интернете, читают   отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует критериям, важным для покупателя:</div>
          </div>

        </div>
        <button class="showMore showMore--js description__showMore" data-options="hidden">Показать все</button>
      </div>
    </div>
  </div>

  <div class="underFooter">
    <div class="container">
      <div class="underFooter__inner">
        <div class="underFooter__title">Акции, скидки и специальные предложения для зарегистрированных пользователей</div>
        <button class="btn underFooter__btn">Зарегестрироваться</button>
        <img  class="underFooter__img js-lazy-load fade-in" data-zzload-source-img="assets/images/cat-dog.png" data-zzload-source-srcset="assets/images/cat-dog.webp"  src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer__logo">
          <a class="logo" href="">
            <svg class="logo__img">
              <use xlink:href='assets/images/spritemap.svg#sprite-logo'></use>
            </svg>
          </a>
          <p class="footer__logo-text">© 2020 Интернет-магазин</p>
        </div>
        <ul class="social footer__social">
          <li class="social__item">
            <a class="social__link" href="#" target="_blank">
              <svg class="social__img-facebook">
                <use xlink:href="assets/images/spritemap.svg#sprite-facebook"></use>
              </svg>
            </a>
          </li>
          <li class="social__item">
            <a class="social__link" href="#" target="_blank">
              <svg class="social__img-inst">
                <use xlink:href="assets/images/spritemap.svg#sprite-inst"></use>
              </svg>
            </a>
          </li>
          <li class="social__item">
            <a class="social__link" href="#" target="_blank">
              <svg class="social__img-viber">
                <use xlink:href="assets/images/spritemap.svg#sprite-viber"></use>
              </svg>
            </a>
          </li>
        </ul>
        <div class="footer__connections">
          <a class="connection footer__connection" href="#">
            <svg class="connection__img" width="40" height="40">
              <use xlink:href="assets/images/spritemap.svg#sprite-chat"></use>
            </svg>
            Чат онлайн
          </a>
          <a class="connection footer__connection" href="#">
            <svg class="connection__img" width="40" height="40">
              <use xlink:href="assets/images/spritemap.svg#sprite-message"></use>
            </svg>
            Написать нам
          </a>
        </div>
        <button class="btnUp btnUp--js footer__btnUp">
          Вверх
          <span class="btnUp__img">
              <svg class="btnUp__img-sprite">
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-up"></use>
              </svg>
          </span>
        </button>
      </div>
      <div class="footer__main">
        <ul class="footer__left-list">
          <li class="footer__left-item"><a class="footer__left-link" href="#">Условия использования сайта</a></li>
          <li class="footer__left-item"><a class="footer__left-link" href="#">Защита персональных данных</a></li>
          <li class="footer__left-item"><a class="footer__left-link" href="#">Карта сайта</a></li>
        </ul>
        <div class="footer__right">
        <div class="infoBoxes footer__infoBoxes">
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">Компания</div>
            <ul class="infoBoxes__list footer__infoBoxes-list">
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">О компании</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Адреса магазинов «ZooBonus»</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Вакансии</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Благотворительность</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Контакты</a>
              </li>
            </ul>
          </div>
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">Покупателям</div>
            <ul class="infoBoxes__list footer__infoBoxes-list">
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Доставка и оплата</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">FAQ</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Подарочные сертификаты</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Акции</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Породы животных</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Дисконтная программа</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Блог</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Фотогалерея</a>
              </li>
            </ul>
          </div>
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">Контакты</div>
            <ul class="infoBoxes__list footer__infoBoxes-list">
              <li class="infoBoxes__item footer__infoBoxes-info">Информационая служба:</li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link footer__infoBoxes-tel" href="tel:0444903100">(044) 490 3100</a></li>
              <li class="infoBoxes__item footer__infoBoxes-item">Ежедневно с 08:30-21:00</li>
              <li class="infoBoxes__item footer__infoBoxes-item">Email:
                <a class="infoBoxes__link footer__infoBoxes-link  footer__infoBoxes-email" href="mailto:info@wezom.com.ua">
                  info@wezom.com.ua</a>
              </li>
            </ul>
          </div>
        </div>
    
        <div class="footer__bottom">
          <div class="payment footer__payment">
            <img class="payment__item js-lazy-load fade-in" data-zzload-source-img="assets/images/payment-1.png" data-zzload-source-srcset="assets/images/payment-1.webp" alt="#" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;'>
            <img class="payment__item js-lazy-load fade-in" data-zzload-source-img="assets/images/payment-2.png" data-zzload-source-srcset="assets/images/payment-2.webp" alt="#" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;'>
            <img class="payment__item js-lazy-load fade-in" data-zzload-source-img="assets/images/payment-3.png" data-zzload-source-srcset="assets/images/payment-3.webp" alt="#" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;'>
          </div>
          <a class="footer__bottom-text" href='#' target="_blank">Разработано в <span>WEZOM</span></a>
        </div>
        </div>
      </div>
    </div>
  </footer>

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
        <button class="userIcons__btn open-popup-link" href='#login-popup'>
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
          <a class="menu__link burgerMenu__menu-link" href="#">
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

  <div class="search-popup">
    <div class="search-popup__inner">
      <input class='search-popup__input' type="text" placeholder="Поиск...">
      <svg class="search-popup__icon" stroke-width='2' id='search-close'>
        <use xlink:href='assets/images/spritemap.svg#sprite-search-popup-close'></use>
      </svg>
    </div>
    <div class="search-popup__text">Начните вводить категорию или название товара (артикул), бренда или клиники</div>
  </div>

  <div class="login-popup white-popup mfp-hide" id='login-popup'>
    <div class="login-popup__title">Вход/Регистрация</div>
    <div class="login-popup__inner">
      <input type="tel" class="login-popup__input" placeholder="Ваш номер телефона">
      <button class="btn login-popup__btn">Далее</button>
      <div class="login-popup__text">или с помощью</div>
      <div class="login-popup__socials">
        <a href="" class="login-popup__social" href="#">
          <svg class="login-popup__social-svg"  height='20px' width='20px'>
            <use xlink:href='assets/images/spritemap.svg#sprite-login-popup-social-1'></use>
          </svg>
        </a>
        <a href="" class="login-popup__social" href="#">
          <svg class="login-popup__social-svg" height='24px' width='12px'>
            <use xlink:href='assets/images/spritemap.svg#sprite-login-popup-social-2'></use>
          </svg>
        </a>
      </div>
      <div class="login-popup__checkbox">
        <input type="checkbox">
        <div class="login-popup__checkbox-text">Даю согласие на обработку своих персональных данных в соответствии<span>с данной офертой</span></div>
      </div>
      <div class="login-popup__action">
        <svg class="login-popup__action-svg" height='40px' width='40px' stroke='#202454' stroke-width='2'>
          <use xlink:href='assets/images/spritemap.svg#sprite-user'></use>
        </svg>
        <div class="login-popup__action-text">Акции, скидки и специальные предложения для зарегистрированных пользователей</div>
      </div>
    </div>
  </div>

</body>
<script src="{{mix('/assets/js/main.js')}}"></script>
</html>