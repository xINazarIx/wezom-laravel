@extends('layouts.app')

@section('content')
<div class="container">
  <div class="breadcrumbs">
    <a class="breadcrumbs__link" href="#">@lang('local.dogs')</a>
    <svg class="breadcrumbs__arrow">
      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
    </svg>
    <div class="breadcrumbs__link">@lang('local.dogFood')</div>
  </div>

  <div class="goods">
    <div class="goods__sidebar goods__sidebar--js">
      
      @foreach(config('mock.avatar-auth') as $item)
        @include('inc.avatar-auth')
      @endforeach

      <div class="categories">
        <div class="categories__title">@lang('local.categories')</div>
        <div class="categories__links">
          @foreach(config('mock.categories') as $link)
          <div class="categories__item">
            <a class="categories__link" href="{{$link->url}}">{{$link->link}}</a>
            <div class="categories__num">({{$link->number}})</div>
          </div>
          @endforeach
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
            <div class="auto-order__text">@lang('local.autoOrder')</div>
          </label>
          <a class="auto-order__question-link" href="#">
            <svg class="auto-order__question-svg" height="15px" width="15px">
              <use xlink:href="assets/images/spritemap.svg#sprite-question"></use>
            </svg>
          </a>
        </div>
        @foreach(config('mock.auto-order-text') as $item)
        <div class="auto-order__subtext">{{$item->text}}</div>
        @endforeach
      </div>


      @foreach(config('mock.filters') as $item)
      @if($item->title == 'Цена')
      <div class="curtain">
        <div class="curtain__header">
          <div class="curtain__title">Цена, ₴</div>
          <svg class="curtain__arrow-up" stroke="#202454" stroke-width="2px">
            <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
          </svg>
        </div>
        <div class="curtain__checkboxes curtain__checkboxes--js">
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
      @else
      <div class="curtain">
        <div class="curtain__header">
          <div class="curtain__title">{{$item->title}}</div>
          <svg class="curtain__arrow-up" stroke="#202454" stroke-width="2px">
            <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
          </svg>
        </div>
        <div class="curtain__checkboxes curtain__checkboxes--js">

          @foreach($item->items as $item)
          <label class="checkbox curtain__checkbox" data-check="false">
            <input type="checkbox" class="checkbox__real">
            <span class="checkbox__fake">
              <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
                <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
              </svg>
            </span>
            <div class="checkbox__text">{{$item->text}}<span>({{$item->number}})</span></div>
          </label>
          @endforeach

          <div class="showMore checkbox__showMore checkbox__showMore--js">
            <button class="showMore-link curtain__showMore--js">+ @lang('local.showAll')</button>
          </div>
  
        </div>
      </div>
      @endif
      @endforeach
    </div>

    <div class="goods__content">
      <div class="sort goods__sort">
        <div>
          <div class="sort__subtext">@lang('local.sort')</div>
          @foreach(config('mock.sort') as $item)
          <div class="sort__text">{{$item->text}}</div>
          @endforeach
        </div>
        <svg class="sort__svg">
          <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
        </svg>
      </div>
      @foreach(config('mock.goods-result') as $item)
      <div class="title goods__title">{{$item->text}} <span>Найдено {{$item->result}} товара</span></div>
      @endforeach
      <div class="goods__filters">
        <div class="goods__filters-inner filters--js">
          <div class="filter goods__filter">
            <div class="filter__text">Nature's Protection</div>
            <svg class="filter__svg filter-close-btn--js">
              <use xlink:href='assets/images/spritemap.svg#sprite-filter-close'></use>
            </svg>
          </div>
          <div class="filter goods__filter">
            <div class="filter__text">С Автозаказом</div>
            <svg class="filter__svg filter-close-btn--js">
              <use xlink:href='assets/images/spritemap.svg#sprite-filter-close'></use>
            </svg>
          </div>
          <div class="filter goods__filter">
            <div class="filter__text">Суперпремиум</div>
            <svg class="filter__svg filter-close-btn--js">
              <use xlink:href='assets/images/spritemap.svg#sprite-filter-close'></use>
            </svg>
          </div>
          <button class="showMore goods__filters-btn-clean btn-clean-filters--js">@lang('local.clearFilters')</button>
        </div>
        <button class="btn filter__btn goods__filter-btn showFilters--js">@lang('local.filters') <span></span></button>
      </div>
      <img class="goods__bunner js-lazy-load fade-in" data-zzload-source-img="assets/images/goods/goods_bunner.jpg" data-zzload-source-srcset="assets/images/goods/goods_bunner.jpeg" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
      <div class="goods__info">
        @foreach(config('mock.avatar-info') as $item)
        <img class="goods__info-img js-lazy-load fade-in" data-zzload-source-img="{{$item->img}}" data-zzload-source-srcset="{{$item->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
        <div class="goods__info-text">{{$item->text}}</div>
        @endforeach
      </div>

      <div class="goods__cards goods__cards--js">
        @for($i = 1; $i <= 10; $i++)
          @foreach(config('mock.goods-cards') as $card)
            @include('inc.slider-card')
          @endforeach
        @endfor
      </div>

      <button class="btn-showMore goods__btn-showMore goods__btn-showMore--js">
        <svg class="btn-showMore__svg">
          <use xlink:href="assets/images/spritemap.svg#sprite-update-arrow"></use>
        </svg>
        <div class="btn-showMore__text">Показать<br> еще 24 товара</div>
      </button>

      <div class="pagination goods__pagination pagination--js">
        <a class="pagination__link pagination__link--active" href="/">1</a>
        <a class="pagination__link" href="#">2</a>
        <a class="pagination__link" href="#">3</a>
        <a class="pagination__link" href="#">4</a>
        <a class="pagination__link" href="#">5</a>
        <span>...</span>
        <a class="pagination__link" href="#">18</a>
        <a class="pagination__svg-link" href="#">
           <svg class="pagination__svg-arrow">
             <use xlink:href="assets/images/spritemap.svg#sprite-arrow-next"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>

  @include('inc.benefits')
  @include('inc.blog')
</div>
@endsection