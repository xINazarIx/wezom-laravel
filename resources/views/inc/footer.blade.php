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
          <li class="social__item">
            <a class="social__link" href="#" target="_blank">
              <svg class="social__img-facebook">
                <use xlink:href="assets/images/spritemap.svg#sprite-facebook"></use>
              </svg>
            </a>
          </li>
          <li class="social__item">
            <a class="social__link" href="#" target="_blank">
              <svg class="social__img-inst">
                <use xlink:href="assets/images/spritemap.svg#sprite-inst"></use>
              </svg>
            </a>
          </li>
          <li class="social__item">
            <a class="social__link" href="#" target="_blank">
              <svg class="social__img-viber">
                <use xlink:href="assets/images/spritemap.svg#sprite-viber"></use>
              </svg>
            </a>
          </li>
        </ul>
        <div class="footer__connections">
          <a class="connection footer__connection" href="#">
            <svg class="connection__img" width="40" height="40">
              <use xlink:href="assets/images/spritemap.svg#sprite-chat"></use>
            </svg>
            Чат онлайн
          </a>
          <a class="connection footer__connection" href="#">
            <svg class="connection__img" width="40" height="40">
              <use xlink:href="assets/images/spritemap.svg#sprite-message"></use>
            </svg>
            Написать нам
          </a>
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
          <li class="footer__left-item"><a class="footer__left-link" href="#">Условия использования сайта</a></li>
          <li class="footer__left-item"><a class="footer__left-link" href="#">Защита персональных данных</a></li>
          <li class="footer__left-item"><a class="footer__left-link" href="#">Карта сайта</a></li>
        </ul>
        <div class="footer__right">
        <div class="infoBoxes footer__infoBoxes">
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">Компания</div>
            <ul class="infoBoxes__list footer__infoBoxes-list">
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">О компании</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Адреса магазинов «ZooBonus»</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Вакансии</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Благотворительность</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Контакты</a>
              </li>
            </ul>
          </div>
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">Покупателям</div>
            <ul class="infoBoxes__list footer__infoBoxes-list">
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Доставка и оплата</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">FAQ</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Подарочные сертификаты</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Акции</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Породы животных</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Дисконтная программа</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Блог</a>
              </li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link" href="#">Фотогалерея</a>
              </li>
            </ul>
          </div>
          <div class="infoBoxes__box footer__infoBoxes-box">
            <div class="infoBoxes__title footer__infoBoxes-title">Контакты</div>
            <ul class="infoBoxes__list footer__infoBoxes-list">
              <li class="infoBoxes__item footer__infoBoxes-info">Информационая служба:</li>
              <li class="infoBoxes__item footer__infoBoxes-item">
                <a class="infoBoxes__link footer__infoBoxes-link footer__infoBoxes-tel" href="tel:0444903100">(044) 490 3100</a></li>
              <li class="infoBoxes__item footer__infoBoxes-item">Ежедневно с 08:30-21:00</li>
              <li class="infoBoxes__item footer__infoBoxes-item">Email:
                <a class="infoBoxes__link footer__infoBoxes-link  footer__infoBoxes-email" href="mailto:info@wezom.com.ua">
                  info@wezom.com.ua</a>
              </li>
            </ul>
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