@extends('layouts.app')

@section('content')

  <div class="catalog">
    <div class="container">
    <div class="catalog__inner">
      <div class="avatar">
        <div class="avatar__header">
          <div class="avatar__text">Товары для</div>
          <img class="avatar__bg js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-avatar-bg.png" data-zzload-source-srcset="assets/images/catalog-avatar-bg.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
          <a class="link__question" href="#">
            <svg class="avatar__header-img" height='15px' width='15px' fill='white'>
              <use xlink:href='assets/images/spritemap.svg#sprite-question'></use>
            </svg>
          </a>
          <div class="avatar__img">
          <img class="avatar__dog js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-dog-avatar.png" data-zzload-source-srcset="assets/images/catalog-dog-avatar.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
        </div>
        </div>
        <div class="avatar__title">У вас есть собака?</div>
        <button class="btn avatar__btn">+ Добавить питомца</button>
      </div>

      <div class="catalog__content">
        <div class="catalog__title">Каталог товаров<br> <span>для собак</span></div>
        <div class="catalog__subtitle">Товары и аксессуары для собак и щенков </div>
        <div class="catalog__links">
          <a class="catalog__link" href="#">Корм</a>
          <a class="catalog__link" href="#">Лакомста</a>
          <a class="catalog__link" href="#">Игрушки</a>
          <a class="catalog__link" href="#">Уход</a>
          <a class="catalog__link" href="#">Здоровье</a>
          <a class="catalog__link" href="#">Кометика</a>
          <a class="catalog__link" href="#">Одежда и обувь</a>
          <a class="catalog__link" href="#">Амуниция</a>
          <a class="catalog__link" href="#">Путешествия</a>
          <a class="catalog__link" href="#">Товары для дома</a>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="sections">
    <div class="container">
      <div class="sections__inner">
        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-1.jpg" data-zzload-source-srcset="assets/images/catalog-1.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Корм</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Сухой корм</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Консервы</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Ветеринарные диеты</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Заменители молока</a>
            </div>
          </div>
        </div>

        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-2.jpg" data-zzload-source-srcset="assets/images/catalog-2.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Лакомства</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Кости</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Печенье</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Для дрессировки</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Сушеные лакомства</a>
            </div>
          </div>
        </div>

        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-3.jpg" data-zzload-source-srcset="assets/images/catalog-3.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Игрушки</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Интерактивные</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Удочки и дразнилки</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Мышки</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Мячики</a>
            </div>
            <div class="sections__showMore">
              <a class="sections__showMore-link" href="">Больше категорий</a>
            </div>
          </div>
        </div>

        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-4.jpg" data-zzload-source-srcset="assets/images/catalog-4.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Уход</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Сухой корм</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Консервы</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Ветеринарные диеты</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Заменители молока</a>
            </div>
          </div>
        </div>
        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-5.jpg" data-zzload-source-srcset="assets/images/catalog-5.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Здоровье</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Средства от блох и клещей</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Витамины и добавки</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Средства от глистов</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Ветеринарные препараты</a>
            </div>
          </div>
        </div>
        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-6.jpg" data-zzload-source-srcset="assets/images/catalog-6.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Косметика</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Шампуни</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Духи</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Кондиционеры и спреи</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Профессиональная и выставочная косметика</a>
            </div>
          </div>
        </div>
        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-7.jpg" data-zzload-source-srcset="assets/images/catalog-7.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Одежда и обувь</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Комбинезоны</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Костюмы</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Дождевики</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Свитера</a>
            </div>
            <div class="sections__showMore">
              <a class="sections__showMore-link" href="">Больше категорий</a>
            </div>
          </div>
        </div>
        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-8.jpg" data-zzload-source-srcset="assets/images/catalog-8.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Амуниция</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Поводки</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Ошейники</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Шлейки</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Рулетки</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Намордники</a>
            </div>
            <div class="sections__showMore">
              <a class="sections__showMore-link" href="">Больше категорий</a>
            </div>
          </div>
        </div>
        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-9.jpg" data-zzload-source-srcset="assets/images/catalog-9.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Товары для дома</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Домики</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Когтеточки</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Спальные места</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Миски и поилки</a>
            </div>
          </div>
        </div>
        <div class="sections__item">
          <div class="sections__card" href='#'>
            <a class="sections__img-link" href="#">
              <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-10.jpg" data-zzload-source-srcset="assets/images/catalog-10.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
          
            <div class="sections__card-description">Путешествия</div>
            <a class="sections__card-watchAll" href='#'>Смотреть все
              <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
              </svg>
            </a>
          </div>
          <div class="sections__links">
            <div class="sections__links-item">
              <a class="sections__link" href="#">Сумки и переноски</a>
            </div>
            <div class="sections__links-item">
              <a class="sections__link" href="#">Автоаксессуары</a>
            </div>
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
            <div class="description__box-title">Каталог товаров для собак</div>
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

@endsection