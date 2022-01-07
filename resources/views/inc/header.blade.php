@section('header')
  <header class="header">
    <div class="header__inner">
      <div class="header__top">
        <button class="location header__location">
            <svg class='location__img header__location-img'>
              <use xlink:href="assets/images/spritemap.svg#sprite-location"></use>
            </svg>
          <span class="location__text header__location-text">Херсон</span>
        </button>
        <ul class="info header__info">
          @foreach(config('mock.head-links') as $link)
          <li class="info__item header__info-item">
            <a class="info__link header__info-link" href="{{$link->url}}">{{$link->link}}</a>
          </li>
          @endforeach
        </ul>
        <div class="consultation header__consultation">
          <p class="consultation__text header__consultation-text">Консультация:</p>
          @foreach(config('mock.consultation-number') as $number)
          <a class="consultation__phone header__consultation-phone" href="tel:{{$number->number}}">
            {{$number->number}}
              <svg class='consultation__img header__consultation-img'>
                <use xlink:href='assets/images/spritemap.svg#sprite-arrow-down'></use>
              </svg>
          </a>
          @endforeach
        </div>

        <div class="languages header__languages">
          <a class="languages__link header__languages-link" href="#">УКР</a>
          <a class="languages__link header__languages-link languages__link--active" href="#">РУС</a>
          <a class="languages__link header__languages-link" href="#">ENG</a>
        </div>

      </div>
      <div class="header__bottom">
        <a class="logo header__logo" href="/">
            <svg class="logo__img">
              <use xlink:href='assets/images/spritemap.svg#sprite-logo'></use>
            </svg>
        </a>

        <ul class="menu header__menu">
          @foreach(config('mock.header-links') as $link)
          <li class="menu__item header__menu-item header__menu-item--menu">
            <a class="menu__link header__menu-link" href="{{$link->url}}">
              {{$link->link}}

                @if(count($link->subLinks) >= 1)
                <svg class="menu__img header__menu-img">
                  <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
                </svg>
                @endif

            </a>
            @if(count($link->subLinks) >= 1)
            <div class="menu__sub-menu">
              <div class="menu__sub-menu-links">
                @foreach($link->subLinks as $subLink)
                <div class="menu__sub-menu-item">
                  <a class="menu__sub-menu-link" href="{{$subLink['url']}}">
                    <svg class="menu__sub-menu-icon" fill='none'>
                      <use xlink:href="{{$subLink['sprite']}}"></use>
                    </svg>
                    <span class="menu__sub-menu-text">{{$subLink['link']}}</span>
                    <svg class="menu__sub-menu-arrow">
                      <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
                    </svg>
                  </a>
                  @if(count($subLink['subLinks']) >= 1)
                  <div class="menu__sub-menu-boxes">
                    @foreach($subLink['subLinks'] as $subLink)
                    <div class="menu__sub-menu-box">
                      <div class="menu__sub-menu-box-title">{{$subLink['title']}}</div>
                      @foreach($subLink['links'] as $link => $url)
                      <a class="menu__sub-menu-box-link" href='{{$url}}'>{{$link}}</a>
                      @endforeach
                      @if(count($subLink['links']) > 3)
                      <a class="menu__sub-menu-box-watchAll" href='#'>Смотреть все ></a>
                      @endif
                    </div>
                    @endforeach
                    <img class="menu__sub-menu-boxes-bunner js-lazy-load fade-in" data-zzload-source-img="assets/images/submenu-banner.jpg" data-zzload-source-srcset="assets/images/submenu-banner.jpeg" alt="#">
                    <img class="menu__sub-menu-boxes-dog js-lazy-load fade-in" data-zzload-source-img="assets/images/submenu-dog.png" data-zzload-source-srcset="assets/images/submenu-dog.webp" alt="#">
                  </div>
                  @endif
                </div>
                @endforeach
              <div class="menu__sub-menu-content"></div>
            </div>
            @endif
          </li>
          @endforeach
        </ul>

        <div class="search header__search">
          <a class="search__btn" id='search'>
              <svg class="search__img">
                <use xlink:href="assets/images/spritemap.svg#sprite-search"></use>
              </svg>
            Поиск</a>
        </div>

        <div class="userIcons header__userIcons">
          <a class="userIcons__btn open-popup-link" href='#check-popup'>
             <svg class="userIcons__img header__userIcons-img" stroke='#202454' stroke-width='2' height='32px' width='30px'>
               <use xlink:href='assets/images/spritemap.svg#sprite-user' height='27px' width='25px'></use>
             </svg>
          </a>
          <a class="userIcons__btn" href="#">
            <svg class="userIcons__img header__userIcons-img" stroke='#202454' stroke-width='2' height='32px' width='30px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-fav'></use>
            </svg>
          </a>
          <a class="userIcons__btn" href="#">
            <svg class="userIcons__img header__userIcons-img" stroke='#202454' stroke-width='2' height='32px' width='30px'>
              <use xlink:href='assets/images/spritemap.svg#sprite-userBuying'></use>
            </svg>
          </a>
        </div>
        <div class="burger burger--js header__burger">
          <span></span>
        </div>
      </div>
    </div>
  </header>