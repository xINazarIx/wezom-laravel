<div class="slider-item">
  <a class="slider-item__card" href="{{$card['link']}}">
  
    @foreach($card['info'] as $info)
      @if($info == 'Топ продаж')
        <div class="widget widget--purpure slider-item__widget">
          <p class="widget__text">Топ продаж</p>
        </div>
      @elseif($info == 'Скидка -5%')
        <div class="widget widget--pink slider-item__widget">
          <p class="widget__text">Скидка -5%</p>
        </div>
      @elseif($info == 'Новинка')
        <div class="widget widget--green slider-item__widget">
          <p class="widget__text">Новинка</p>
        </div>
      @endif
    @endforeach
    <img class="slider-item__item-img js-lazy-load fade-in" data-zzload-source-img="{{$card['img']}}" data-zzload-source-srcset="{{$card['img']}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
  </a>
  <div class="slider-item__description">
    <a class="slider-item__description-text" href="{{$card['link']}}">{{$card['description']}}</a>
    <div class="rating slider-item__rating">
      <div class="rating__stars slider-item__rating-stars" data-total="{{$card['rating']['star']}}">
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
      <span class='slider-item__stars-text'>({{$card['rating']['coments']}})</span>
    </div>
    <div class="slider-item__updatePrice">
      <button class="updateBtn slider-item__updateBtn">
        <svg class="updateBtn__img">
          <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
        </svg>
      </button>
      <span class='slider-item__updatePrice-text'>{{$card['updatePrice']}}₴</span>
    </div>
    <div class="slider-item__prices">
      <span class="slider-item__prices-lastPrice">{{$card['lastPrice']}}</span>
      <span class="slider-item__prices-currentlyPrice">{{$card['price']}} ₴</span>
    </div>
    <button class="buyBtn slider-item__buyBtn">
      <svg class="buyBtn__img">
        <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
      </svg>
    </button>
  </div>
</div>