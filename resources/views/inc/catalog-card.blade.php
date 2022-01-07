<div class="catalog-item js-catalog-item">
  <div class="catalog-item__card">
    <a class="catalog-item__img-link" href="{{$card->url}}">
      <img class="catalog-item__card-img js-lazy-load fade-in" data-zzload-source-img="{{$card->img}}" data-zzload-source-srcset="{{$card->img}}" src="data:image/svg+xml,&lt;svg" xmlns="http://www.w3.org/2000/svg" alt="#">
    </a>

    <div class="catalog-item__card-description">{{$card->title}}</div>
    <a class="catalog-item__card-watchAll" href="{{$card->url}}">Смотреть все
      <svg class="catalog-item__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
        <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
      </svg>
    </a>
  </div>
  <div class="catalog-item__links js-catalog-item-links">

    @foreach($card->links as $link)
      <div class="catalog-item__links-item">
        <a class="catalog-item__link" href="{{$link->url}}">{{$link->link}}</a>
      </div>
    @endforeach

    <a class="showMore showMore--solid js-catalog__showMore" href="/goods">
      Показать больше
    </a>
  </div>
</div>