@section('reg-popup')
<div class=" popup-auntification mfp-hide" id="reg-popup">
  <div class="popup-title">@lang('local.popupTitle')</div>
  <div class="popup-auntification__inner">
    <label class="popup-label">
      <span class="popup-label__phone-text">@lang('local.yourNumber')</span>
      <input class="popup-label__input" type="number" placeholder="+380 (97) 015-61-72">
    </label>
    <a class="reg-popup__back open-popup-link" href="#check-popup">
      <svg class="reg-popup__back-svg">
        <use xlink:href="assets/images/spritemap.svg#sprite-arrow-prev"></use>
      </svg>
      <div class="reg-popup__back-text">@lang('local.anotherNumber')</div>
    </a>
    <div class="reg-popup__text">@lang('local.numberQuestion')</div>
    <div class="reg-popup__reg-input">
      <div class="reg-popup__reg-input-text">@lang('local.ImReg')</div>
      <label class="popup-label popup-label--choice">
        <div class="popup-label__text">@lang('local.regAs')</div>
        <button class="popup-label__arrow-btn">
          <svg class="popup-label__svg-arrow-down">
            <use xlink:href="assets/images/spritemap.svg#sprite-arrow-down"></use>
          </svg>
        </button>
      </label>
    </div>
    <a class="btn btn--popup open-popup-link" href="#login-popup">@lang('local.reg')</a>
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