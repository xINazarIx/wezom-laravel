<div class="slider-item">
  <a class="slider-item__card" href="{{$card->url}}">

    @foreach($card->info as $item)
    <div class="widget widget--{{$item->color}} slider-item__widget">
      <p class="widget__text">{{$item->title}}</p>
    </div>
    @endforeach

    <img class="slider-item__img js-lazy-load fade-in" data-zzload-source-img="{{$card->img}}" data-zzload-source-srcset="{{$card->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
  </a>
  <div class="slider-item__description">
    <a class="slider-item__description-text" href="{{$card->url}}">{{$card->description}}</a>
    <div class="rating slider-item__rating">
      <div class="rating__stars slider-item__rating-stars" data-total="{{$card->stars}}">
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
      <span class='rating__text'>({{$card->comments}})</span>
    </div>
    <div class="slider-item__updatePrice">
      <button class="updateBtn slider-item__updateBtn">
        <svg class="updateBtn__img">
          <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
        </svg>
      </button>
      <span class='slider-item__updatePrice-text'>{{$card->updatePrice}} ₴</span>
    </div>
    <div class="slider-item__prices">
      <span class="slider-item__prices-lastPrice">{{$card->lastPrice}}</span>
      <span class="slider-item__prices-currentlyPrice">{{$card->price}} ₴</span>
    </div>
    <button class="buyBtn slider-item__buyBtn">
      <svg class="buyBtn__img">
        <use xlink:href="assets/images/spritemap.svg#sprite-buyBtn"></use>
      </svg>
    </button>
  </div>
</div>