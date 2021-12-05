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
            <img  class="useful__find-paw js-lazy-load fade-in" data-zzload-source-img="assets/images/paw.png" data-zzload-source-srcset="assets/images/paw.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
          <div class="useful__find-title">Найди друга</div>
          <div class="useful__find-text">Ищете питомца? Посмотрите сотни объявлений от проверенных разводителей.</div>
          <!-- <div class="useful__find-images">
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
          </div> -->
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

@endsection