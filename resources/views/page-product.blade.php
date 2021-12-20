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
  <div class="title title--normal page-product__title">Royal Canin Maxi Adult Сухой корм для собак крупных пород, 7 кг</div>
  <div class="page-product__content">
    <div class="product">
      <div class="product__inner">
        <div class="product__images">
          <div class="product__sub-img">
            <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/product-1.png" data-zzload-source-srcset="assets/images/product-1.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
          </div>
          <div class="product__sub-img">
            <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/product-2.png" data-zzload-source-srcset="assets/images/product-2.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
          </div>
          <div class="product__sub-img">
            <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/product-3.png" data-zzload-source-srcset="assets/images/product-3.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
          </div>
          <div class="product__sub-img">
            <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/product-4.png" data-zzload-source-srcset="assets/images/product-4.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
          </div>
          <a class="video-review product__video-review" href="#">
            <svg class="video-review__svg">
              <use xlink:href="assets/images/spritemap.svg#sprite-video-review"></use>
            </svg>
            <div class="video-review__text">Видеообзор</div>
          </a>
        </div>
        <div class="product-card">
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

        <div class="product__description">
          <div class="product__description-head">
            <div class="manufacturer">
              <div class="manufacturer__img">
                <img class="js-lazy-load fade-in" data-zzload-source-img="assets/images/page-product-chexia.png" data-zzload-source-srcset="assets/images/page-product-chexia.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
              </div>
              <span class="manufacturer__text">Чехия</span>
            </div>
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
            <a class="link link--border" href="#">Отзывы<span>(65)</span></a>
            <a class="link link--border product__link-question" href="#">Вопросы<span>(3)</span></a>
          </div>

          <div class="product__description-inner">
            <div class="product__about">
              <span class="product__about-mass">Вес: 7 кг</span>
              <div class="product__choose-masses">
                <div class="choose-mass">
                  <div class="choose-mass__text">2,72 кг<span>184,50 грн/кг</span></div>
                </div>
                <div class="choose-mass choose-mass--active">
                  <div class="choose-mass__text">7 кг<span>162,00 грн/кг</span></div>
                </div>
                <div class="choose-mass">
                  <div class="choose-mass__text">15 кг<span>154,20 грн/кг</span></div>
                </div>
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
      </div>
    </div>
  </div>
</div>
@endsection