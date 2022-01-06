<a class="small-card small-cards__small-card" href='{{$smallCard->url}}'>
  <img class="small-card__img js-lazy-load fade-in" data-zzload-source-img="{{$smallCard->img}}" data-zzload-source-srcset="{{$smallCard->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
  <div class="rating small-card__rating">
    <div class="rating__stars" data-total="{{$smallCard->stars}}">
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
    <span class='rating__text'>({{$smallCard->comments}})</span>
  </div>
  <div class="small-card__description">{{$smallCard->description}}</div>
</a>