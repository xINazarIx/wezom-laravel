<?php 

  $catalogCards = [
    [
      'section' => ['title' => 'Корм', 'link' => '/goods'],
      'img' => 'assets/images/catalog-1.jpeg',
      'links' => ['Сухой корм' => '#', 'Консервы' => '#', 'Ветеринарные диеты' => '#', 'Заменители молока' => '#']
    ],
    [
      'section' => ['title' => 'Лакомства', 'link' => '/goods'],
      'img' => 'assets/images/catalog-2.jpeg',
      'links' => ['Кости' => '#', 'Печенье' => '#', 'Для дрессировки' => '#', 'Сушеные лакомства' => '#']
    ],
    [
      'section' => ['title' => 'Игрушки', 'link' => '/goods'],
      'img' => 'assets/images/catalog-3.jpeg',
      'links' => ['Интерактивные' => '#', 'Удочки' => '#', 'Мышки' => '#', 'Мячики' => '#']
    ],
    [
      'section' => ['title' => 'Уход', 'link' => '/goods'],
      'img' => 'assets/images/catalog-4.jpeg',
      'links' => ['Средства по уходу' => '#', 'Инструменты для груминга' => '#', 'Туалеты и пелёнки' => '#']
    ],
    [
      'section' => ['title' => 'Здоровье', 'link' => '/goods'],
      'img' => 'assets/images/catalog-5.jpeg',
      'links' => ['Средства от блох и клещей' => '#', 'Витамины и добавки' => '#', 'Стредства от глистов' => '#', 'Ветеринарные препараты' => '#']
    ],
    [
      'section' => ['title' => 'Косметика', 'link' => '/goods'],
      'img' => 'assets/images/catalog-6.jpeg',
      'links' => ['Шампуни' => '#', 'Духи' => '#', 'Кондеционеры и спреи' => '#', 'Профессиональная и выставочная косметика' => '#']
    ],
    [
      'section' => ['title' => 'Одежда и обувь', 'link' => '/goods'],
      'img' => 'assets/images/catalog-7.jpeg',
      'links' => ['Комбинезоны' => '#', 'Костюмы' => '#', 'Дождевики' => '#', 'Свитера' => '#']
    ],
    [
      'section' => ['title' => 'Амуниция', 'link' => '/goods'],
      'img' => 'assets/images/catalog-8.jpeg',
      'links' => ['Поводки' => '#', 'Ошейники' => '#', 'Шлейки' => '#', 'Рулетки' => '#', 'Намордники' => '#']
    ],
    [
      'section' => ['title' => 'Товары для дома', 'link' => '/goods'],
      'img' => 'assets/images/catalog-9.jpeg',
      'links' => ['Домики' => '#', 'Когтеточки' => '#', 'Спальные места' => '#', 'Миски и поилки' => '#']
    ],
    [
      'section' => ['title' => 'Путешествия', 'link' => '/goods'],
      'img' => 'assets/images/catalog-10.jpeg',
      'links' => ['Сумки и переноски' => '#', 'Автоакссуары' => '#']
    ],
  ];

  $catalogLinks = [
    ['title' => 'Корм', 'url' => '#'],
    ['title' => 'Лакомства', 'url' => '#'],
    ['title' => 'Игрушки', 'url' => '#'],
    ['title' => 'Уход', 'url' => '#'],
    ['title' => 'Здоровье', 'url' => '#'],
    ['title' => 'Косметика', 'url' => '#'],
    ['title' => 'Одежда и обувь', 'url' => '#'],
    ['title' => 'Амуниция', 'url' => '#'],
    ['title' => 'Товары для дома', 'url' => '#'],
    ['title' => 'Путешествия', 'url' => '#'],
  ];
?>

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

        @foreach($catalogLinks as $link)
          <a class="catalog__link" href="<?php echo $link['url']?>">{{$link['title']}}</a>   
        @endforeach

        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="sections">
    <div class="container">
      <div class="sections__inner">
        @foreach($catalogCards as $card)
          @include('inc.catalog-card')
        @endforeach
      </div>
    </div>
  </div>
  
  @include('inc.description')
@endsection


