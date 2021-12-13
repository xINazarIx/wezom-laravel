@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="breadcrumbs">
      <a class="breadcrumbs__link" href="#">Собаки</a>
      <svg class="breadcrumbs__arrow">
        <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
      </svg>
      <div class="breadcrumbs__link">Корм для собак</div>
    </div>
  </div>

  <div class="container">
    <div class="goods">
      <div class="goods__sidebar">

        <div class="avatar goods__sidebar--avatar">
          <div class="avatar__header">
            <div class="avatar__text">Товары для</div>
              <img class="avatar__bg js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-avatar-bg.png" data-zzload-source-srcset="assets/images/catalog-avatar-bg.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
              <a class="link__question" href="#">
                <svg class="avatar__header-img" height='19px' width='15px' fill='white'>
                  <use xlink:href='assets/images/spritemap.svg#sprite-question'></use>
                </svg>
              </a>
              <div class="avatar__img">
              <img class="avatar__dog js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-dog-avatar.png" data-zzload-source-srcset="assets/images/catalog-dog-avatar.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </div>
          </div>
          <div class="avatar__name">Джексон
            <svg class="avatar__arrow-down" height='8px' width='13px' fill='none' stroke='#202454' stroke-width='2px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-arrow-down'></use>
            </svg>
          </div>
          <div class="avatar__dog-description">
          Английский кокер-спаниель Взрослая
          </div>
        </div>

        <div class="categories">
          <div class="categories__title">Категории</div>
          <div class="categories__links">
            <div class="categories__item">
              <a class="categories__link" href="#">Сухой корм</a>
              <div class="categories__num">(584)</div>
            </div>
            <div class="categories__item">
              <a class="categories__link" href="#">Консервы</a>
              <div class="categories__num">(317)</div>
            </div>
            <div class="categories__item">
              <a class="categories__link" href="#">Ветеринарные диеты</a>
              <div class="categories__num">(158)</div>
            </div>
            <div class="categories__item">
              <a class="categories__link" href="#">Заменители молока</a>
              <div class="categories__num">(59)</div>
            </div>
          </div>
        </div>

        <div class="auto-order">
          <div class="auto-order__inner">
            <input class="auto-order__checkbox" type="checkbox" id='auto-order'>
            <label class="auto-order__label" for="auto-order">
              <span class='auto-order__checkbox--fake'>
                <svg class="auto-order__checkbox-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
            </label>
            <button class="updateBtn">
              <svg class="updateBtn__img auto-order__updateBtn">
                  <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
              </svg>
            </button>
            <label class="auto-order__label" for="auto-order">
              <div class="auto-order__text">Автозаказ</div>
            </label>
            <a class="auto-order__question-link" href="#">
              <svg class="auto-order__question-svg" height="15px" width="15px">
                <use xlink:href="assets/images/spritemap.svg#sprite-question"></use>
              </svg>
            </a>
          </div>
          <div class="auto-order__subtext">Экономия до 10% на заказах</div>
        </div>

        <div class="curtain">
          <div class="curtain__header">
            <div class="curtain__title">Бренд</div>
            <svg class="curtain__arrow-up" stroke="#202454" stroke-width="2px" data-id='#curtain-checkboxes-brand'>
              <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
            </svg>
          </div>
          <div class="curtain__checkboxes curtain__checkboxes--active" id='curtain-checkboxes-brand'>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">ROYAL CANIN<span>(24)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">1st Choice<span>(36)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Home Food<span>(12)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Acana<span>(15)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real" checked>
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Nature's Protection<span>(38)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Purina Pro Plan<span>(49)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Advance<span>(4)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">AnimAll VetLine<span>(17)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Brit Care<span>(19)</span></div>
            </label>
            <label class="checkbox curtain__checkbox curtain__checkbox--hidden">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">ROYAL CANIN<span>(24)</span></div>
            </label>
            <label class="checkbox curtain__checkbox curtain__checkbox--hidden">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">ROYAL CANIN<span>(24)</span></div>
            </label>
            <label class="checkbox curtain__checkbox curtain__checkbox--hidden">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">ROYAL CANIN<span>(24)</span></div>
            </label>
            <div class="showMore checkbox__showMore">
            <button class="showMore-link curtain__showMore--js">+ показать все</button>
          </div>
          </div>
        </div>

        <div class="curtain">
          <div class="curtain__header">
            <div class="curtain__title">Цена, ₴</div>
            <svg class="curtain__arrow-up" stroke="#202454" stroke-width="2px" data-id='#curtain__checkboxes--price'>
              <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
            </svg>
          </div>
          <div class="curtain__checkboxes curtain__checkboxes--active" id='curtain__checkboxes--price'>
            <div class="curtain__price-inputs">
              <label for="" class="curtain__price-label">
                <input class="curtain__price-input" type="number" min="0" max="10000" placeholder="0" id='curtain__price-input--0'>
              </label>
              <span></span>
              <label for="" class="curtain__price-label">
                <input class="curtain__price-input" type="number" min="0" max="10000" placeholder="6597" id='curtain__price-input--1'>
              </label>
              <button class="curtain__price-btn">Ок</button>
            </div>
            <div class="curtain__price-slider curtain__price-slider--js" id="range-slider"></div>
          </div>
        </div>

        <div class="curtain">
          <div class="curtain__header">
            <div class="curtain__title">Класс</div>
            <svg class="curtain__arrow-up" stroke="#202454" stroke-width="2px" data-id='#curtain__checkboxes--class'>
              <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
            </svg>
          </div>
          <div class="curtain__checkboxes curtain__checkboxes--active" id='curtain__checkboxes--class'>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Премиум<span>(24)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real" checked>
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Суперпремиум<span>(36)</span></div>
            </label>
            <label class="checkbox curtain__checkbox">
              <input type="checkbox" class="checkbox__real">
              <span class="checkbox__fake">
                <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                  <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                </svg>
              </span>
              <div class="checkbox__text">Холистик<span>(12)</span></div>
            </label>
          </div>
        </div>

        <div class="curtain">
          <div class="curtain__header">
            <div class="curtain__title">
              Ингредиенты
            </div>
             <svg class="curtain__arrow-up curtain__arrow-down" stroke="#202454" stroke-width="2px">
              <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
             </svg>
          </div>
        </div>

        <div class="curtain">
          <div class="curtain__header">
            <div class="curtain__title">
              Особенности
            </div>
            <svg class="curtain__arrow-up curtain__arrow-down" stroke="#202454" stroke-width="2px">
              <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
            </svg>
          </div>
        </div>

        <div class="curtain">
          <div class="curtain__header">
            <div class="curtain__title">
              Вес упаковки
            </div>
            <svg class="curtain__arrow-up curtain__arrow-down" stroke="#202454" stroke-width="2px">
              <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
            </svg>
          </div>
        </div>

        <div class="curtain">
          <div class="curtain__header">
            <div class="curtain__title">
              Порода
            </div>
            <svg class="curtain__arrow-up curtain__arrow-down" stroke="#202454" stroke-width="2px">
              <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
            </svg>
          </div>
        </div>

      </div>

      <div class="goods__content">
        @include('inc.benefits')
        @include('inc.description')
      </div>
    </div>
  </div>
@endsection