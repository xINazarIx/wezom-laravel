<div class="reviews__user">
  <div class="reviews__user-info">
    <div class="rating reviews__rating">
      <div class="rating__stars" data-total="{{$review->stars}}">
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
    </div>
    <div class="reviews__user-name">{{$review->name}}<br><span>{{$review->date}}</span></div>
  </div>
  <div class="reviews__user-description">
    <div class="reviews__user-title">{{$review->title}}</div>
    <div class="reviews__user-text">{{$review->description}}</div>
    <div class="reviews__user-images js-reviews__user-images">
      @if(count($review->images) > 0)
        @foreach($review->images as $img)
          <a class='reviews__user-link js-reviews__user-link' href="{{$img->imgBig}}">
            <img class="reviews__user-img js-lazy-load fade-in" data-zzload-source-img="{{$img->imgSmall}}" data-zzload-source-srcset="{{$img->imgSmall}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
          </a>
        @endforeach
      @endif
    </div>
  </div>
  <div class="user-like reviews__user-like">
    <div class="user-like__icon">
      <svg class="user-like__svg">
        <use xlink:href="assets/images/spritemap.svg#sprite-like"></use>
      </svg>
    </div>
    <span class="user-like__col">{{$review->likes}}</span>
  </div>
</div>