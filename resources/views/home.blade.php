<?php
  $sliderCards = (object)[
    [
      'link' => 'page-product',
      'info' => ['Top' => 'Топ продаж', 'Скидка' => 'Скидка -5%'],  
      'img' => 'assets/images/slider-1.webp',
      'description' => 'Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг',
      'rating' => ['star' => 0, 'coments' => 0],
      'updatePrice' => '1 550,22',
      'lastPrice' => '1722,22',
      'price' => '1 600,22'
    ],
    [
       'link' => 'page-product',
      'info' => ['Скидка' => 'Скидка -5%'],
      'img' => 'assets/images/slider-2.webp',
      'description' => 'Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород',
      'rating' => ['star' => 5, 'coments' => 12],
      'updatePrice' => '198,22',
      'lastPrice' => 'от 260,22',
      'price' => 'от 206,71'
    ],
    [
       'link' => 'page-product',
      'info' => ['Новинка' => 'Новинка'],
      'img' => 'assets/images/slider-3.webp',
      'description' => 'PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл',
      'rating' => ['star' => 4, 'coments' => 65],
      'updatePrice' => 'Автозаказ',
      'lastPrice' => false,
      'price' => '1 600,22'
    ],
    [
       'link' => 'page-product',
      'info' => ['Top' => 'Топ продаж', 'Скидка' => 'Скидка -5%'],
      'img' => 'assets/images/slider-4.webp',
      'description' => 'Scalibor (Скалибор) ошейник 48 см',
      'rating' => ['star' => 0, 'coments' => 0],
      'updatePrice' => '520,00',
      'lastPrice' => '640,22',
      'price' => '560,22'
    ],
    [
       'link' => 'page-product',
      'info' => ['Top' => 'Топ продаж'],
      'img' => 'assets/images/slider-5.webp',
      'description' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
      'rating' => ['star' => 3, 'coments' => 24],
      'updatePrice' => '1 550,22',
      'lastPrice' => false,
      'price' => '1600,22'
    ],
    [
       'link' => 'page-product',
      'info' => ['Top' => 'Топ продаж'],
      'img' => 'assets/images/slider-2.webp',
      'description' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
      'rating' => ['star' => 4, 'coments' => 44],
      'updatePrice' => '1 550,22',
      'lastPrice' => false,
      'price' => '1600,22'
    ],
    [
       'link' => 'page-product',
      'info' => ['Top' => 'Топ продаж'],
      'img' => 'assets/images/slider-1.webp',
      'description' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
      'rating' => ['star' => 0, 'coments' => 0],
      'updatePrice' => '1 550,22',
      'lastPrice' => false,
      'price' => '1600,22'
    ],
    [
       'link' => 'page-product',
      'info' => ['Top' => 'Топ продаж'],
      'img' => 'assets/images/slider-4.webp',
      'description' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
      'rating' => ['star' => 1, 'coments' => 21],
      'updatePrice' => '1 550,22',
      'lastPrice' => false,
      'price' => '1600,22'
    ],
    [
       'link' => 'page-product',
      'info' => ['Top' => 'Топ продаж'],
      'img' => 'assets/images/slider-4.webp',
      'description' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
      'rating' => ['star' => 0, 'coments' => 0],
      'updatePrice' => '1 550,22',
      'lastPrice' => false,
      'price' => '1600,22'
    ]
  ]
?>

@extends('layouts.app')

@section('content')

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

          @foreach($sliderCards as $card)
            @include('inc.slider-card', $card)
          @endforeach
            
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
            <img class="useful__find-paw js-lazy-load fade-in" data-zzload-source-img="assets/images/paw.png" data-zzload-source-srcset="assets/images/paw.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
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
              <a class="btn-secondary" href='#' target="_blank">Перейти в блог</a>
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

  @include('inc.benefits')
  @include('inc.blog')

@endsection
