@section('login-popup')
<div class="popup-auntification mfp-hide" id="login-popup">
  <div class="popup-title">Вход/Регистрация</div>
  <div class="popup-auntification__inner">
    <label class="popup-label popup-label--login">
      <div class="popup-label__inner">
        <span class="popup-label__phone-text">Ваш номер телефона</span>
        <input class="popup-label__input" type="number" placeholder="+380 (97) 015-61-72">
      </div>
      <svg class="login-popup__label-svg-check">
        <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
      </svg>
    </label>
    <label class="popup-label popup-label--password">
      <input type="password" class="popup-label__input--password" placeholder="Пароль">
      <svg class="login-popup__label-svg-showPassword">
        <use xlink:href="assets/images/spritemap.svg#sprite-show-password"></use>
      </svg>
    </label>
    <div class="login-popup__remaind">
      <a class="login-popup__remaind-link" href="#">Напомнить пароль</a>
    </div>
    <a class="btn btn--popup" href="#">Войти</a>
    <div class="popup-with-help">или с помощью</div>
    <div class="popup-socials">
      <a href="" class="popup-socials__link" href="#">
        <svg class="popup-socials__link-svg" height='20px' width='20px'>
          <use xlink:href='assets/images/spritemap.svg#sprite-login-popup-social-1'></use>
        </svg>
      </a>
      <a href="" class="popup-socials__link" href="#">
        <svg class="popup-socials__link-svg" height='24px' width='12px'>
          <use xlink:href='assets/images/spritemap.svg#sprite-login-popup-social-2'></use>
        </svg>
      </a>
    </div>
    <label class="checkbox checkbox--popup">
      <input type="checkbox" class="checkbox__real">
      <span class="checkbox__fake checkbox__fake--popup">
        <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
          <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
        </svg>
      </span>
      <div class="checkbox__text checkbox__text--popup">Даю согласие на обработку своих персональных данных в соответствии с данной офертой c <span>данной офертой</span></div>
    </label>
    <div class="popup-info">
      <svg class="popup-info__svg" stroke='#202454' stroke-width='2px'>
        <use xlink:href='assets/images/spritemap.svg#sprite-user'></use>
      </svg>
      <div class="popup-info__text">Акции, скидки и специальные предложения для зарегистрированных пользователей</div>
    </div>
  </div>
</div>