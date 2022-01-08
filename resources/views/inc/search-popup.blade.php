@section('search-popup')
<div class="search-popup">
    <div class="search-popup__inner">
      <input class='search-popup__input' type="text" placeholder="Поиск...">
      <svg class="search-popup__icon" stroke-width='2' id='search-close'>
        <use xlink:href='assets/images/spritemap.svg#sprite-search-popup-close'></use>
      </svg>
    </div>
    <div class="search-popup__text">Начните вводить категорию или название товара (артикул), бренда или клиники</div>
    <div class="search-popup__content">
      <div class="search-popup__content-inner">
        <div class="search-popup__menu">
          @foreach(config('mock.search-links') as $item)
          <div class="search-popup__menu-item">
            <div class="search-popup__menu-item-text">{{$item->title}} <span>{{$item->number}}</span></div>
            <div class="search-popup__menu-links">
              @foreach($item->links as $link)
              <a href="{{$link->url}}" class="search-popup__menu-link">{{$link->link}} ({{$link->number}})</a>
              @endforeach
            </div>
          </div> 
          @endforeach   
        </div>

        <div class="search-popup__goods">
          @foreach(config('mock.search-cards') as $card)
          <div class="search-popup__goods-box">
            <div class="search-popup__goods-title">
              {{$card->title}}
            </div>
            @foreach($card->items as $link)
            <div class="search-popup__good">
              <a class="search-popup__good-link" href="{{$link->url}}">
                <img class="search-popup__good-img js-lazy-load fade-in" data-zzload-source-img="{{$link->img}}" data-zzload-source-srcset="{{$link->img}}" src="data:image/svg+xml,&lt;svg" xmlns="http://www.w3.org/2000/svg" alt="#">
              </a>
              <div class='search-popup__good-description'>
                <a class="search-popup__good-link" href="{{$link->url}}"><div class="search-popup__good-description-text">{{$link->description}}</div></a>
                <span class="search-popup__good-last-price">{{$link->lastprice}}</span>
                <span class="search-popup__good-price">{{$link->price}} ₴</span>
              </div>
            </div>
            @endforeach
            <a class="search-popup__goods-more" href="{{$card->url}}">{{$card->link}}></a>
          </div>
          @endforeach
        </div>
      </div>

      <a class="btn search-popup__btn" href="/goods">@lang('local.allGoods')</a>
    </div>
  </div>