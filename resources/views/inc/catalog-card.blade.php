<div class="catalog-item">
  <div class="catalog-item__card">
    <a class="catalog-item__img-link" href="<?php echo $card['section']['link'] ?>">
      <img class="catalog-item__card-img js-lazy-load fade-in" data-zzload-source-img="<?php echo $card['img'] ?>" data-zzload-source-srcset="<?php echo $card['img'] ?>" src="data:image/svg+xml,&lt;svg" xmlns="http://www.w3.org/2000/svg" alt="#">
    </a>

    <div class="catalog-item__card-description">{{$card['section']['title']}}</div>
    <a class="catalog-item__card-watchAll" href="<?php echo $card['section']['link'] ?>">Смотреть все
      <svg class="catalog-item__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
        <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
      </svg>
    </a>
  </div>
  <div class="catalog-item__links">
    @foreach($card['links'] as $title => $link)
      <div class="catalog-item__links-item">
        <a class="catalog-item__link" href="<?php echo $link ?>">{{$title}}</a>
      </div>
    @endforeach
  </div>
</div>