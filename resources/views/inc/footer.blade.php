<?php 

$footerInfoLinks = [
  'Условия использования сайта' => '#',
  'Защита персональных данных' => '#',
  'Карта сайта' => '#'
];

 $footerLinks = [
    ['Компания' => ['О комапании' => '#','Адреса магазинов «ZooBonus»' => '#', 'Вакансии' => '#', 'Благотворительность' => '#', 'Контакты' => '#',]],
    ['Покупателям' => ['Доставка и оплата' => '#', 'FAQ' => '#', 'Подарочные сертификаты' => '#', 'Акции' => '#', 'Породы животных' => '#', 'Дисконтная программа' => '#', 'Блог' => '#', 'Фотогалерея' => '#',]],
 ];

 $footerContacts = [
    '(044) 490 31 00' => 'info@wezom.com.ua'
 ];

 $footerConnections = [
  'Чат онлайн' => ['#', 'assets/images/spritemap.svg#sprite-chat'],
  'Написать нам' => ['#', 'assets/images/spritemap.svg#sprite-message']
 ];

 $footerSocials = [
  ['#','assets/images/spritemap.svg#sprite-facebook'],
  ['#','assets/images/spritemap.svg#sprite-inst'],
  ['#','assets/images/spritemap.svg#sprite-viber']
]


?>

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
          @foreach($footerSocials as $social)
          <li class="social__item">
            <a class="social__link" href="{{$social[0]}}" target="_blank">
              <svg class="social__img">
                <use xlink:href="{{$social[1]}}"></use>
              </svg>
            </a>
          </li>
          @endforeach
        </ul>
        <div class="footer__connections">
          @foreach($footerConnections as $title => $arr)
          <a class="connection footer__connection" href="{{$arr[0]}}">
            <svg class="connection__img" width="40" height="40">
              <use xlink:href="{{$arr[1]}}"></use>
            </svg>
            {{$title}}
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
          @foreach($footerInfoLinks as $titleLink => $link)
          <li class="footer__left-item"><a class="footer__left-link" href="{{$link}}">{{$titleLink}}</a></li>
          @endforeach
        </ul>
        <div class="footer__right">
        <div class="infoBoxes footer__infoBoxes">
          @foreach($footerLinks as $box)
          <div class="infoBoxes__box footer__infoBoxes-box">
            @foreach($box as $title => $links)
            <div class="infoBoxes__title footer__infoBoxes-title">{{$title}}</div>
            <ul class="infoBoxes__list footer__infoBoxes-list">
              @foreach($links as $titleLink => $link)
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="{{$link}}">{{$titleLink}}</a>
              </li>
              @endforeach
            </ul>
            @endforeach
          </div>
          @endforeach
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">Контакты</div>
            @foreach($footerContacts as $num => $email)
            <ul class="infoBoxes__list footer__infoBoxes-list">
              <li class="infoBoxes__item footer__infoBoxes-info">Информационая служба:</li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link footer__infoBoxes-tel" href="tel:{{$num}}">{{$num}}</a></li>
              <li class="infoBoxes__item footer__infoBoxes-item">Ежедневно с 08:30-21:00</li>
              <li class="infoBoxes__item footer__infoBoxes-item">Email:
                <a class="infoBoxes__link footer__infoBoxes-link  footer__infoBoxes-email" href="mailto:{{$email}}">
                {{$email}}</a>
              </li>
            </ul>
            @endforeach
          </div>
        </div>
    
        <div class="footer__bottom">
          <div class="payment footer__payment">
            <img class="payment__item js-lazy-load fade-in" data-zzload-source-img="assets/images/payment-1.png" data-zzload-source-srcset="assets/images/payment-1.webp" alt="#" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;'>
            <img class="payment__item js-lazy-load fade-in" data-zzload-source-img="assets/images/payment-2.png" data-zzload-source-srcset="assets/images/payment-2.webp" alt="#" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;'>
            <img class="payment__item js-lazy-load fade-in" data-zzload-source-img="assets/images/payment-3.png" data-zzload-source-srcset="assets/images/payment-3.webp" alt="#" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="640" height="320"&gt;&lt;/svg&gt;'>
          </div>
          <a class="footer__bottom-text" href='#' target="_blank">Разработано в <span>WEZOM</span></a>
        </div>
        </div>
      </div>
    </div>
  </footer>