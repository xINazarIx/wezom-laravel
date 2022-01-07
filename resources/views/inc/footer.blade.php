@section('footer')
<div class="underFooter">
    <div class="container">
      <div class="underFooter__inner">
        <div class="underFooter__title">Акции, скидки и специальные предложения для зарегистрированных пользователей</div>
        <button class="btn underFooter__btn">Зарегестрироваться</button>
        <img  class="underFooter__img js-lazy-load fade-in" data-zzload-source-img="assets/images/cat-dog.png" data-zzload-source-srcset="assets/images/cat-dog.webp"  src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;' alt="#">
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer__logo">
          <a class="logo" href="">
            <svg class="logo__img">
              <use xlink:href='assets/images/spritemap.svg#sprite-logo'></use>
            </svg>
          </a>
          <p class="footer__logo-text">© 2020 Интернет-магазин</p>
        </div>
        <ul class="social footer__social">
          @foreach(config('mock.socials') as $link)
          <li class="social__item">
            <a class="social__link" href="{{$link->url}}" target="_blank">
              <svg class="social__img">
                <use xlink:href="{{$link->img}}"></use>
              </svg>
            </a>
          </li>
          @endforeach
        </ul>
        <div class="footer__connections">
          @foreach(config('mock.connections') as $link)
          <a class="connection footer__connection" href="{{$link->url}}">
            <svg class="connection__img" width="40" height="40">
              <use xlink:href="{{$link->img}}"></use>
            </svg>
            {{$link->text}}
          </a>
          @endforeach
        </div>
        <button class="btnUp btnUp--js footer__btnUp">
          Вверх
          <span class="btnUp__img">
              <svg class="btnUp__img-sprite">
                <use xlink:href="assets/images/spritemap.svg#sprite-arrow-up"></use>
              </svg>
          </span>
        </button>
      </div>
      <div class="footer__main">
        <ul class="footer__left-list">
          @foreach(config('mock.footer-sub-links') as $link)
          <li class="footer__left-item"><a class="footer__left-link" href="{{$link->url}}">{{$link->link}}</a></li>
          @endforeach
        </ul>
        <div class="footer__right">
        <div class="infoBoxes footer__infoBoxes">
          @foreach(config('mock.footer-links') as $item)
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">{{$item->title}}</div>
            <ul class="infoBoxes__list footer__infoBoxes-list">
              @foreach($item->links as $link)
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="{{$link->url}}">{{$link->link}}</a>
              </li>
              @endforeach
            </ul>
          </div>
          @endforeach
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">Контакты</div>
            @foreach(config('mock.contacts') as $item)
            <ul class="infoBoxes__list footer__infoBoxes-list">
              <li class="infoBoxes__item footer__infoBoxes-info">Информационая служба:</li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link footer__infoBoxes-tel" href="tel:{{$item->tel}}">{{$item->tel}}</a></li>
              <li class="infoBoxes__item footer__infoBoxes-item">{{$item->text}}</li>
              <li class="infoBoxes__item footer__infoBoxes-item">Email:
                <a class="infoBoxes__link footer__infoBoxes-link  footer__infoBoxes-email" href="mailto:{{$item->email}}">
                {{$item->email}}</a>
              </li>
            </ul>
            @endforeach
          </div>
        </div>
    
        <div class="footer__bottom">
          <div class="payment footer__payment">
            @foreach(config('mock.paytions') as $item)
            <img class="payment__item js-lazy-load fade-in" data-zzload-source-img="{{$item->img}}" data-zzload-source-srcset="{{$item->img}}" alt="#" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;'>
            @endforeach
          </div>
          <a class="footer__bottom-text" href='#' target="_blank">Разработано в <span>WEZOM</span></a>
        </div>
        </div>
      </div>
    </div>
  </footer>