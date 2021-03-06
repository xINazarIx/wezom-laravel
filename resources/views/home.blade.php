@extends('layouts.app')

@section('content')

  <div class="slider">
    <div class="container">
      <div class="slider__inner">

        <div class="slider__top">
          @foreach(config('mock.main-title') as $item)
          <h2 class="slider__title">{{$item->text}}</h2>
          @endforeach
          <ul class="petsNav slider__petsNav">
          @foreach(config('mock.main-cards') as $tab)
            <li class="petsNav__item"><button class="petsNav__btn" data-tab='#{{$tab->id}}'>{{$tab->tab}}</button>
            </li>
          @endforeach
          </ul>
        </div>
        @foreach(config('mock.main-cards') as $slider)
        <div class="slider__wrapper" id='{{$slider->id}}' data-check='false'>
          <div class="slider__items">

          @foreach($slider->cards as $card)
            @include('inc.slider-card')
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
        @endforeach
      </div>
    </div>
  </div>

  <div class="useful">
    <div class="container">
      <div class="useful__inner">
        <div class="useful__find">
          @foreach(config('mock.announcement') as $item) 
          <div class="useful__find-subtitle">{{$item->title}}</div>
            <img class="useful__find-paw js-lazy-load fade-in" data-zzload-source-img="{{$item->img}}" data-zzload-source-srcset="{{$item->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
          <div class="useful__find-title">{{$item->text}}</div>
          <div class="useful__find-text">{{$item->description}}</div>
          @endforeach
          <div class="useful__find-images">
            @foreach(config('mock.find-friend') as $link)
            <a class="useful__find-link" href='{{$link->url}}' target="_blank">
              <img  class="useful__find-img js-lazy-load fade-in" data-zzload-source-img="{{$link->img}}" data-zzload-source-srcset="{{$link->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
            </a>
            @endforeach
          </div>
          <div class="btn useful__find-btn">@lang('local.announcementsBtn')
            <svg class='useful__find-btn-svg' fill='none' height='13px' width='9px' stroke='white' stroke-width='2'>
              <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
            </svg>
          </div>
        </div>
        <div class="useful__materials">
          <div class="useful__materials-inner">
            @foreach(config('mock.useful-title') as $item)
            <div class="useful__materials-title">{{$item->title}}</div>
            @endforeach
            <div class="useful__materials-header">
              <div class="useful__materials-links">
                @foreach(config('mock.useful-materials-links') as $link)
                <a class="useful__materials-link" href="{{$link->url}}" target="_blank">{{$link->link}}</a>
                @endforeach
              </div>
              <a class="btn-secondary" href='#' target="_blank">@lang('local.goTo')</a>
            </div>
            <div class="useful__materials-items">
              @foreach(config('mock.useful-materials-card') as $card)
              <div class="useful__materials-item">
                <a class="useful__materials-item-card" href="{{$card->url}}" target="_blank">
                  @foreach($card->info as $label)
                  <div class="widget widget--{{$label->color}} useful__materials-item-widget">{{$label->title}}</div>
                  @endforeach
                  <img class="useful__materials-item-img js-lazy-load fade-in" data-zzload-source-img="{{$card->img}}" data-zzload-source-srcset="{{$card->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
                </a>
                <div class="useful__materials-item-description">
                  <div class="useful__materials-item-date">
                    <div class="useful__materials-item-num">{{$card->number}}</div>
                    <div class="useful__materials-item-mounth">{{$card->mounth}}</div>
                  </div>
                  <a class="useful__materials-item-text" href="{{$card->url}}" target='_blank'>{{$card->description}}</a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('inc.benefits')
  @include('inc.blog')

@endsection
