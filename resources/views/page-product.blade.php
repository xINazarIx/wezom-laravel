@extends('layouts.app')

@section('content')
<div class="container">
  <div class="breadcrumbs">
    <a class="breadcrumbs__link" href="/">@lang('local.dogs')</a>
    <svg class="breadcrumbs__arrow">
      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
    </svg>
    <a class="breadcrumbs__link" href="/">@lang('local.dogFood')</a>
    <svg class="breadcrumbs__arrow">
      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
    </svg>
    @foreach(config('mock.product-card') as $item)
    <a class="breadcrumbs__link">{{$item->title}}</a>
    @endforeach
  </div>
  @foreach(config('mock.product-card') as $item)
  <div class="title title--regular product__title">{{$item->title}}</div>
  @endforeach
  <div class="page-product__content">
    @foreach(config('mock.product-card') as $item)
    <div class="product">
      <div class="product__inner">
        <div class="product__left-section">
          <div class="product__left-section-inner">
      
            <div class="product-card">
              <div class="product-card__images">
                @foreach($item->images as $img)
                <div class="product-card__sub-img">
                  <img class="js-lazy-load fade-in" data-zzload-source-img="{{$img->img}}" data-zzload-source-srcset="{{$img->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                </div>
                @endforeach
                <a class="video-review product__video-review" href="{{$item->sublink}}">
                  <svg class="video-review__svg">
                    <use xlink:href="assets/images/spritemap.svg#sprite-video-review"></use>
                  </svg>
                  <div class="video-review__text">@lang('local.videoReview')</div>
                </a>
              </div>
              <div class="product-card__inner">
                <img class="product-card__img js-lazy-load fade-in" data-zzload-source-img="{{$item->img}}" data-zzload-source-srcset="{{$item->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">

                <div class="widget widget--pink product-card__widget">
                  <p class="widget__text">@lang('local.discount') -{{$item->discount}}</p>
                </div>
                <div class="product-card__avatar">
                  <img class="js-lazy-load fade-in" data-zzload-source-img="{{$item->avatar}}" data-zzload-source-srcset="{{$item->avatar}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                </div>
                <div class="fav product-card__fav">
                  <svg class="fav__svg">
                    <use xlink:href="assets/images/spritemap.svg#sprite-fav"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <div class="share product__share">
            <div class="share__text">@lang('local.share')</div>
            @foreach(config('mock.share') as $item)
            <a class="share__icon-link" href="{{$item->url}}" target="_blank">
              <svg class="share__icon-svg" height='40px' width='40px'>
                <use xlink:href="{{$item->img}}"></use>
              </svg>
            </a>
            @endforeach
          </div>
        </div>

        <div class="product__right-section">
          <div class="product__right-section-main">
            <div class="product__description">
              <div class="product__description-head">
                @foreach(config('mock.product-card') as $item)
                <div class="manufacturer">
                  @foreach($item->manufacturer as $elem)
                  <div class="manufacturer__img">
                    <img class="js-lazy-load fade-in" data-zzload-source-img="{{$elem->img}}" data-zzload-source-srcset="{{$elem->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
                  </div>
                  <span class="manufacturer__text">{{$elem->title}}</span>
                  @endforeach
                </div>
                <div class="rating  product__rating">
                  <div class="rating__stars product__stars" data-total="{{$item->stars}}">
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

                @foreach($item->reviews as $review)
                <a class="link link--border  product__description-reviews" href="{{$review->url}}">{{$review->link}}<span>({{$review->number}}) </span></a>
                @endforeach

                @foreach($item->questions as $question)
                <a class="link link--border product__description-reviews" href="{{$question->url}}"> {{$question->link}}<span>({{$question->number}})</span></a>
                @endforeach

                @endforeach
              </div>

              <div class="product__description-inner">
                @foreach(config('mock.product-card') as $item)
                <div class="product__about">
                  <span class="product__about-mass">Вес: {{$item->weight}}</span>
                  <div class="product__choose-masses">
                    @foreach($item->weights as $weight)
                    <a class="choose-mass" href="#">
                      <div class="choose-mass__text">{{$weight->weight}}<span>{{$weight->price}}</span></div>
                    </a>
                    @endforeach
                  </div>
                  <div class="product__price">
                    <div class="product__price-inner">
                      <span class="product__price-text">{{$item->pricetext}}</span>
                      <div class="product__price-cost">{{$item->price}} ₴
                        <span class="product__price-cost-subprice">{{$item->lastprice}} ₴</span>
                        <span class="product__price-discount">-{{$item->discount}}</span>
                      </div>
                      <span class="product__price-info">{{$item->pricesubtext}}</span>
                    </div>
                    <div class="product__price-inner">
                      <div class="product__price-auto-order">
                        <button class="updateBtn">
                          <svg class="product__price-updateBtn">
                            <use xlink:href="assets/images/spritemap.svg#sprite-updateBtn"></use>
                          </svg>
                        </button>
                        <span class="product__price-text">{{$item->secondpricetext}}</span>
                      </div>
                      <div class="product__price-cost">{{$item->subprice}} ₴<br>
                        <div class="product__price-cost-subtext">{{$item->infotext}}
                          <a class="product__price-link" href="#">
                            <svg class="product__price-cost-subtext-svg">
                              <use xlink:href="assets/images/spritemap.svg#sprite-question"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>

            <div class="order product__order">
              <div class="order__check">
                <div class="order__input order__input--js">
                  <button class="order__input-btn order__input-btn--minus order__input-btn--js">
                  </button>
                  <span class="order__input-span--js">1</span>
                  <button class="order__input-btn order__input-btn--plus order__input-btn--js">
                  </button>
                </div>

                <div class="order__input-text"><span>{{$item->orderinfo}}</span></div>
              </div>
              <button class="btn order__btn">
                <svg class="btn__svg">
                  <use xlink:href="assets/images/spritemap.svg#sprite-userBuying"></use>
                </svg>
                <span>@lang('local.btnBuy')</span>
              </button>
              <button class="btn-secondary order__btn">@lang('local.buyOneClick')</button>
              <div class="order__info">
                <div class="order__info-mark">
                  <svg class="order__info-svg">
                    <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
                  </svg>
                </div>
                <span class="order__info-text">{{$item->info}}</span>
              </div>
            </div>
          </div>
          @foreach(config('mock.options') as $option)
            @include('inc.drop-menu')
          @endforeach
        </div>
      </div>  
    </div>
    @endforeach
 
    @include('inc.about-product')
    @include('inc.reviews')

    <div class="small-cards">
      <div class="small-cards__inner">
        @foreach(config('mock.small-cards') as $smallCard)
          @include('inc.small-card')
        @endforeach
      </div>
      <a class="btn-secondary small-cards__btn-secondary" href="/goods">@lang('local.watchAll')</a>
    </div>
  </div>


</div>
</div>
@endsection