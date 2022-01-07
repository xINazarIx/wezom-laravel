@extends('layouts.app')

@section('content')

  <div class="catalog">
    <div class="container">
    <div class="catalog__inner">
      @include('inc.avatar')

      <div class="catalog__content">
        <div class="catalog__title">Каталог товаров<br> <span>для собак</span></div>
        <div class="catalog__subtitle">Товары и аксессуары для собак и щенков </div>
        <div class="catalog__links">

        @foreach(config('mock.catalog-links') as $link)
          <a class="catalog__link" href="{{$link->url}}">{{$link->link}}</a>   
        @endforeach

        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="sections">
    <div class="container">
      <div class="sections__inner">
        @foreach(config('mock.catalog-card') as $card)
          @include('inc.catalog-card')
        @endforeach
      </div>
    </div>
  </div>
  
  @include('inc.blog')
@endsection


