@section('login-popup')
<div class="login-popup white-popup mfp-hide" id='login-popup'>
    <div class="login-popup__title">Вход/Регистрация</div>
    <div class="login-popup__inner">
      <input type="tel" class="login-popup__input" placeholder="Ваш номер телефона">
      <button class="btn login-popup__btn">Далее</button>
      <div class="login-popup__text">или с помощью</div>
      <div class="login-popup__socials">
        <a href="" class="login-popup__social" href="#">
          <svg class="login-popup__social-svg"  height='20px' width='20px'>
            <use xlink:href='assets/images/spritemap.svg#sprite-login-popup-social-1'></use>
          </svg>
        </a>
        <a href="" class="login-popup__social" href="#">
          <svg class="login-popup__social-svg" height='24px' width='12px'>
            <use xlink:href='assets/images/spritemap.svg#sprite-login-popup-social-2'></use>
          </svg>
        </a>
      </div>
      <div class="login-popup__checkbox">
        <input type="checkbox">
        <div class="login-popup__checkbox-text">Даю согласие на обработку своих персональных данных в соответствии<span>с данной офертой</span></div>
      </div>
      <div class="login-popup__action">
        <svg class="login-popup__action-svg" height='40px' width='40px' stroke='#202454' stroke-width='2'>
          <use xlink:href='assets/images/spritemap.svg#sprite-user'></use>
        </svg>
        <div class="login-popup__action-text">Акции, скидки и специальные предложения для зарегистрированных пользователей</div>
      </div>
    </div>
  </div>