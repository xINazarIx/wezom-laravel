<div class="avatar goods__sidebar--avatar">
  <div class="avatar__header">
    <div class="avatar__text">Товары для</div>
    <img class="avatar__bg js-lazy-load fade-in" data-zzload-source-img="assets/images/catalog-avatar-bg.png" data-zzload-source-srcset="assets/images/catalog-avatar-bg.webp" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
    <a class="link__question" href="#">
      <svg class="avatar__header-img" height='19px' width='15px' fill='white'>
        <use xlink:href='assets/images/spritemap.svg#sprite-question'></use>
      </svg>
    </a>
    <div class="avatar__img">
      <img class="avatar__dog js-lazy-load fade-in" data-zzload-source-img="{{$item->img}}" data-zzload-source-srcset="{{$item->img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
    </div>
  </div>
  <div class="avatar__name">{{$item->name}}
    <svg class="avatar__arrow-down" height='8px' width='13px' fill='none' stroke='#202454' stroke-width='2px'>
      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-down'></use>
    </svg>
  </div>
  <div class="avatar__dog-description">
    {{$item->description}}
  </div>
</div>