@section('login-popup')
<div class="popup-auntification mfp-hide" id="login-popup">
  <div class="popup-title">@lang('local.popupTitle')</div>
  <div class="popup-auntification__inner">
    <label class="popup-label popup-label--login">
      <div class="popup-label__inner">
        <span class="popup-label__phone-text">@lang('local.yourNumber')</span>
        <input class="popup-label__input" type="number" placeholder="+380 (97) 015-61-72">
      </div>
      <svg class="login-popup__label-svg-check">
        <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
      </svg>
    </label>
    <label class="popup-label popup-label--password">
      <input type="password" class="popup-label__input--password" placeholder="@lang('local.password')">
      <svg class="login-popup__label-svg-showPassword">
        <use xlink:href="assets/images/spritemap.svg#sprite-show-password"></use>
      </svg>
    </label>
    <div class="login-popup__remaind">
      <a class="login-popup__remaind-link" href="#">@lang('local.remindPass')</a>
    </div>
    <a class="btn btn--popup" href="#">@lang('local.enter')</a>
    <div class="popup-with-help">@lang('local.orWithHelp')</div>
    <div class="popup-socials">

      @foreach(config('mock.into-with') as $link)
      <a href="" class="popup-socials__link" href="{{$link->url}}">
        <svg class="popup-socials__link-svg" height='20px' width='20px'>
          <use xlink:href='{{$link->img}}'></use>
        </svg>
      </a>
      @endforeach

    </div>
    <label class="checkbox checkbox--popup">
      <input type="checkbox" class="checkbox__real">
      <span class="checkbox__fake checkbox__fake--popup">
        <svg class="checkbox__fake-mark" height="18px" width="15px" stroke="black" stroke-width="2px" fill="none">
          <use xlink:href="assets/images/spritemap.svg#sprite-check-mark"></use>
        </svg>
      </span>
      @foreach(config('mock.popup-agree') as $item)
      <div class="checkbox__text checkbox__text--popup">{{$item->text}}</div>
      @endforeach
    </label>
    <div class="popup-info">
      <svg class="popup-info__svg" stroke='#202454' stroke-width='2px'>
        <use xlink:href='assets/images/spritemap.svg#sprite-user'></use>
      </svg>
      @foreach(config('mock.popup-info') as $item)
      <div class="popup-info__text">{{$item->text}}</div>
      @endforeach
    </div>
  </div>
</div>