@section('burgerMenu')
<div class="burgerMenu">
    <div class="burgerMenu__inner">
      <div class="burgerMenu__header">
        <button class="location burgerMenu__location">
          <svg class='location__img burgerMenu__location-img'>
            <use xlink:href="assets/images/spritemap.svg#sprite-location"></use>
          </svg>
          <span class="location__text burgerMenu__location-text">@lang('local.kherson')</span>
        </button>
        <div class="languages burgerMenu__languages">
          <a class="languages__link burgerMenu__languages-link" href="">@lang('local.ua')</a>
          <a class="languages__link burgerMenu__languages-link--active burgerMenu__languages-link" href="">@lang('local.ru')</a>
          <a class="languages__link burgerMenu__languages-link" href="">@lang('local.en')</a>
        </div>
      </div>
      <div class="userIcons burgerMenu__userIcons">
        <button class="userIcons__btn open-popup-link" href='#check-popup'>
            <svg class="userIcons__img burgerMenu__userIcons-img" stroke='white' stroke-width='2' height='28px' width='28px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-user'></use>
            </svg>
        </button>
        <button class="userIcons__btn">
            <svg class="userIcons__img burgerMenu__userIcons-img" stroke='white' stroke-width='2' height='32px' width='30px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-fav'></use>
            </svg>
        </button>
        <button class="userIcons__btn">
            <svg class="userIcons__img burgerMenu__userIcons-img" stroke='white' stroke-width='2' height='32px' width='30px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-userBuying'></use>
            </svg>
        </button>
      </div>
      <div class="consultation burgerMenu__consultation">
        <p class="consultation__text burgerMenu__consultation-text">@lang('local.consultation'):</p>
        @foreach(config('mock.consultation-number') as $number)
        <a class="consultation__phone burgerMenu__consultation-phone" href="tel:0444903100">
          {{$number->number}}
            <svg class='consultation__img burgerMenu__consultation-img'>
              <use xlink:href='assets/images/spritemap.svg#sprite-arrow-down'></use>
            </svg>
        </a>
        @endforeach
      </div>
      <ul class="menu burgerMenu__menu">
        @foreach(config('mock.header-links') as $link)
        <li class="menu__item burgerMenu__menu-item">
          <a class="menu__link burgerMenu__menu-link" href="{{$link->url}}">
            {{$link->link}}
              
            @if(count($link->subLinks) >= 1)
            <svg class="menu__img header__menu-img">
              <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
            </svg>
            @endif

          </a>
        </li>
        @endforeach
      </ul>

      <ul class="info burgerMenu__info">
        @foreach(config('mock.head-links') as $link)
        <li class="info__item burgerMenu__info-item">
          <a class="info__link burgerMenu__info-link" href="{{$link->url}}">{{$link->link}}</a>
        </li>
        @endforeach
      </ul>
      <div class="burgerMenu__infoBoxes">
        @foreach(config('mock.footer-links') as $item)
        <div class="infoBoxes__box burgerMenu__infoBoxes-box">
          <div class="infoBoxes__title burgerMenu__infoBoxes-title">{{$item->title}}</div>
          <ul class="infoBoxes__list burgerMenu__infoBoxes-list">
            @foreach($item->links as $link)
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link" href="{{$link->url}}">{{$link->link}}</a>
            </li>
            @endforeach
          </ul>
        </div>
        @endforeach
        @foreach(config('mock.contacts') as $item)
        <div class="infoBoxes__box burgerMenu__infoBoxes-box">
          <div class="infoBoxes__title burgerMenu__infoBoxes-title">@lang('local.contacts')</div>
          <ul class="infoBoxes__list burgerMenu__infoBoxes-list">
            <li class="infoBoxes__item burgerMenu__infoBoxes-info">@lang('local.infoService'):</li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-item">
              <a class="infoBoxes__link burgerMenu__infoBoxes-link burgerMenu__infoBoxes-tel" href="tel:{{$item->tel}}">{{$item->tel}}</a></li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-text">{{$item->text}}</li>
            <li class="infoBoxes__item burgerMenu__infoBoxes-text">Email:
              <a class="infoBoxes__link burgerMenu__infoBoxes-link  burgerMenu__infoBoxes-email" href="mailto:{{$item->email}}">
                {{$item->email}}</a>
            </li>
          </ul>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="burgerMask"></div>