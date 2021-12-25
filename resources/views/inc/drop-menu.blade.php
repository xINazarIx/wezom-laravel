<div class="drop-menu product__drop-menu drop-menu--js">
  <div class="drop-menu__header">
    <div class="drop-menu__text">{{$productOption['title']}} <span>{{$productOption['city']}}</span></div>
    <svg class="drop-menu__header-svg">
      <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
    </svg>
  </div>
  <div class="drop-menu__options">

    @foreach($productOption['options'] as $option)
      <div class="drop-menu__option">
        <a class="drop-menu__link" href="#">{{$option['option']}}</a>
        <div class="drop-menu__text">{{$option['date']}}</div>
        <div class="drop-menu__text drop-menu__text--grey">{{$option['price']}}</div>
      </div>
    @endforeach

    @if((count($productOption['options'])) > 2)
      <a class="drop-menu__showMore" href="#">Все варианты и правила доставки
        <svg class="drop-menu__showMore-svg">
          <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
        </svg>
      </a>
    @endif
    
  </div>
</div>
