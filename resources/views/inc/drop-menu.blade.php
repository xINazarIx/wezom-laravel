<div class="drop-menu product__drop-menu drop-menu--js">
  <div class="drop-menu__header">
    <div class="drop-menu__text">{{$option->title}}</div>
    <svg class="drop-menu__header-svg">
      <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
    </svg>
  </div>
  <div class="drop-menu__options">

    @foreach($option->items as $item)
    <div class="drop-menu__option">
      <a class="drop-menu__link" href="#">{{$item ->description}}</a>
      <div class="drop-menu__text">{{$item->date}}</div>
      <div class="drop-menu__text drop-menu__text--grey">{{$item->price}}</div>
    </div>
    @endforeach


    <a class="drop-menu__showMore" href="{{$option->url}}">Все варианты и правила доставки
      <svg class="drop-menu__showMore-svg">
        <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
      </svg>
    </a>
   
    
  </div>
</div>
