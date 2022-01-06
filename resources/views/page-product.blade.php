<?php 

$productOptions = (object)[
  ['city' => 'Запорожье', 'title' => 'Доставка в:', 'options' => [['option' => 'Самовывоз из наших магазинов','date' => 'Забрать сегодня с 16:00', 'price' => 'Бесплатно'],['option' => 'Самовывоз из Новой Почты','date' => 'Отправим завтра', 'price' => '50 ₴'],['option' => 'Самовывоз из JustIn','date' => 'Отправим сегодня', 'price' => '59 ₴']]],

  ['city' => '', 'title' => 'Варианты оплаты', 'options' => [['option' => 'Самовывоз из наших магазинов','date' => 'Забрать сегодня с 16:00', 'price' => 'Бесплатно'],['option' => 'Самовывоз из Новой Почты','date' => 'Отправим завтра', 'price' => '50 ₴'],['option' => 'Самовывоз из JustIn','date' => 'Отправим сегодня', 'price' => '59 ₴']]],

  ['city' => '', 'title' => 'Гарантия и возврат', 'options' => [['option' => 'Самовывоз из наших магазинов','date' => 'Забрать сегодня с 16:00', 'price' => 'Бесплатно'],['option' => 'Самовывоз из Новой Почты','date' => 'Отправим завтра', 'price' => '50 ₴']]]
]

?>



@extends('layouts.app')

@section('content')
<div class="container">
  <div class="breadcrumbs">
    <a class="breadcrumbs__link" href="/">Собаки</a>
    <svg class="breadcrumbs__arrow">
      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
    </svg>
    <a class="breadcrumbs__link" href="/">Корм для собак</a>
    <svg class="breadcrumbs__arrow">
      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
    </svg>
    <a class="breadcrumbs__link">Royal Canin Maxi Adult Сухой корм для собак крупных пород, 7 кг</a>
  </div>
  <div class="title title--regular product__title">Royal Canin Maxi Adult Сухой корм для собак крупных пород, 7 кг</div>
  <div class="page-product__content">
    <div class="product">
      <div class="product__inner">
        <div class="product__left-section">
          <div class="product__left-section-inner">
      
            <div class="product-card">
              <div class="product-card__images">
                <div class="product-card__sub-img">
                  <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/product-1.png" data-zzload-source-srcset="assets/images/product-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                </div>
                <div class="product-card__sub-img">
                  <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/product-2.png" data-zzload-source-srcset="assets/images/product-2.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                </div>
                <div class="product-card__sub-img">
                  <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/product-3.png" data-zzload-source-srcset="assets/images/product-3.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                </div>
                <div class="product-card__sub-img">
                  <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/product-4.png" data-zzload-source-srcset="assets/images/product-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                </div>
                <a class="video-review product__video-review" href="#">
                  <svg class="video-review__svg">
                    <use xlink:href="assets/images/spritemap.svg#sprite-video-review"></use>
                  </svg>
                  <div class="video-review__text">Видеообзор</div>
                </a>
              </div>
              <div class="product-card__inner">
                <img class="product-card__img js-lazy-load fade-in" data-zzload-source-img="assets/images/product-main.png" data-zzload-source-srcset="assets/images/product-main.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">

                <div class="widget widget--pink product-card__widget">
                  <p class="widget__text">Скидка -5%</p>
                </div>
                <div class="product-card__avatar">
                  <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-dog-avatar.png" data-zzload-source-srcset="assets/images/catalog-dog-avatar.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                </div>
                <div class="fav product-card__fav">
                  <svg class="fav__svg">
                    <use xlink:href="assets/images/spritemap.svg#sprite-fav"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <div class="share product__share">
            <div class="share__text">Поделиться</div>
            <a class="share__icon-link" href="#" target="_blank">
              <svg class="share__icon-svg" height='40px' width='40px'>
                <use xlink:href="assets/images/spritemap.svg#sprite-page-product-fc"></use>
              </svg>
            </a>
            <a class="share__icon-link" href="#" target="_blank">
              <svg class="share__icon-svg" height='40px' width='40px'>
                <use xlink:href="assets/images/spritemap.svg#sprite-page-product-tw"></use>
              </svg>
            </a>
          </div>
        </div>

        <div class="product__right-section">
          <div class="product__right-section-main">
            <div class="product__description">
              <div class="product__description-head">
                <div class="manufacturer">
                  <div class="manufacturer__img">
                    <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/page-product-chexia.png" data-zzload-source-srcset="assets/images/page-product-chexia.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                  </div>
                  <span class="manufacturer__text">Чехия</span>
                </div>
                <div class="rating  product__rating">
                  <div class="rating__stars product__stars" data-total="4">
                    <svg class="rating__stars-img product__star">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img product__star">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img product__star">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img product__star">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                    <svg class="rating__stars-img product__star">
                      <use xlink:href='assets/images/spritemap.svg#sprite-star'></use>
                    </svg>
                  </div>
                </div>
                <a class="link link--border" href="#">Отзывы<span>(65)</span></a>
                <a class="link link--border product__link-question" href="#">Вопросы<span>(3)</span></a>
              </div>

              <div class="product__description-inner">
                <div class="product__about">
                  <span class="product__about-mass">Вес: 7 кг</span>
                  <div class="product__choose-masses">
                    <a class="choose-mass" href="#">
                      <div class="choose-mass__text">2,72 кг<span>184,50 грн/кг</span></div>
                    </a>
                    <a class="choose-mass choose-mass--active" href="#">
                      <div class="choose-mass__text">7 кг<span>162,00 грн/кг</span></div>
                    </a>
                    <a class="choose-mass" href="#">
                      <div class="choose-mass__text">15 кг<span>154,20 грн/кг</span></div>
                    </a>
                  </div>
                  <div class="product__price">
                    <div class="product__price-inner">
                      <span class="product__price-text">Цена<br>со скидкой:</span>
                      <div class="product__price-cost">1241,00 ₴
                        <span class="product__price-cost-subprice">1280,00 ₴</span>
                        <span class="product__price-discount">-5%</span>
                      </div>
                      <span class="product__price-info">Бесплатная доставка
                        для этого товара</span>
                    </div>
                    <div class="product__price-inner">
                      <div class="product__price-auto-order">
                        <button class="updateBtn">
                          <svg class="product__price-updateBtn">
                            <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                          </svg>
                        </button>
                        <span class="product__price-text">Автозаказ</span>
                      </div>
                      <div class="product__price-cost">1180,20 ₴<br>
                        <div class="product__price-cost-subtext">Экономия до 10% на заказах с регулярными поставками
                          <svg class="product__price-cost-subtext-svg">
                            <use xlink:href="assets/images/spritemap.svg#sprite-question"></use>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="order product__order">
              <div class="order__check">
                <div class="order__input order__input--js">
                  <button class="order__input-btn order__input-btn--minus order__input-btn--js">
                  </button>
                  <span class="order__input-span--js">1</span>
                  <button class="order__input-btn order__input-btn--plus order__input-btn--js">
                  </button>
                </div>

                <div class="order__input-text"><span>Заказать упаковку х 8шт.</span><span>(+2% к скидке)</span></div>
              </div>
              <button class="btn order__btn">
                <svg class="btn__svg">
                  <use xlink:href="assets/images/spritemap.svg#sprite-userBuying"></use>
                </svg>
                <span>Купить</span>
              </button>
              <button class="btn-secondary order__btn">Купить в 1 клик</button>
              <div class="order__info">
                <div class="order__info-mark">
                  <svg class="order__info-svg">
                    <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                  </svg>
                </div>
                <span class="order__info-text">В наличии в 7 магазинах</span>
              </div>
            </div>
          </div>
          @foreach($productOptions as $productOption)
            @include('inc.drop-menu', $productOption)
          @endforeach
        </div>
      </div>  
    </div>
 
    @include('inc.about-product')
    @include('inc.reviews')

    <div class="small-cards">
      <div class="small-cards__inner">
        @foreach(config('mock.small-cards') as $smallCard)
          @include('inc.small-card')
        @endforeach
      </div>
      <a class="btn-secondary small-cards__btn-secondary" href="/goods" >Смотреть все</a>
    </div>
  </div>


</div>
</div>
@endsection