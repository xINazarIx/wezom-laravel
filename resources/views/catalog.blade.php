<?php 

  $cards = [
    ['Корм', 'assets/images/catalog-1.jpeg', ['Сухой корм','Консервы', 'Ветеринарные диеты', 'Заменители молока']],
    ['Лакомства', 'assets/images/catalog-2.jpeg', ['Кости','Печенье', 'Для дрессировки', 'Сушеные лакомства']],
    ['Игрушки', 'assets/images/catalog-3.jpeg', ['Интерактивные','Удочки и дразнилки', 'Мышки', 'Мячики']],
    ['Уход', 'assets/images/catalog-4.jpeg', ['Средства по уходу','Интсрументы для груминга', 'Туалеты и пелёнки']],
    ['Здоровье', 'assets/images/catalog-5.jpeg', ['Средства от блох и клещей','Витамины и добавки','Средства от глиство','Ветеринарные препараты']],
    ['Косметика', 'assets/images/catalog-6.jpeg', ['Шампуни','Духи','Кондиционеры и спреи','Профессиональная и выставочная косметика']],
    ['Одежда и обувь', 'assets/images/catalog-7.jpeg', ['Комбенизоны','Костюмы','Дождевики','Свитера']],
    ['Амуниция', 'assets/images/catalog-8.jpeg', ['Поводки', 'Ошейники', 'Шлейки','Рулетки','Намордники']],
    ['Товары для дома', 'assets/images/catalog-9.jpeg', ['Домики','Когтеточки','Спальные места','Мистки и поилки']],
    ['Путешествия', 'assets/images/catalog-10.jpeg', ['Сумки и переноски','Автоаксессуары']]
  ]

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

        <?php 
          foreach($cards as $card){
                ?>
                  <div class="sections__item">
                    <div class="sections__card" href='#'>
                      <a class="sections__img-link" href="#">
                        <?php echo
                          '<img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="'.$card[1].'" data-zzload-source-srcset="'.$card[1].'" src="data:image/svg+xml,&lt;svg" xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;" alt="#">'
                        ?>
                      </a>
                  
                      <div class="sections__card-description"><?php echo $card[0]?></div>
                      <a class="sections__card-watchAll" href='#'>Смотреть все
                        <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
                          <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
                        </svg>
                      </a>
                    </div>
                    <div class="sections__links">
                      <?php
                        foreach($card[2] as $link){
                      ?>
                            <div class="sections__links-item">
                              <a class="sections__link" href="#"><?php echo $link?></a>
                            </div>
                      <?php
                        }
                      ?>
                      <?php
                        $length = count(($card[2]));
                        if($length > 4){
                          echo 
                          '<div class="sections__showMore">
                            <a class="sections__showMore-link" href="">Больше категорий</a>
                          </div>';
                        };
                      ?>
                    </div>
                  </div>
                <?php  
          }
        ?>
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
