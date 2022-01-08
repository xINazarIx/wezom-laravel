@section('check-popup')
<div class="popup-auntification mfp-hide" id="check-popup">
  <div class="popup-title">@lang('local.popupTitle')</div>
  <div class="popup-auntification__inner">
    <input type="number" class="popup-input" placeholder="@lang('local.yourNumber')">
    <a class="btn btn--popup open-popup-link" href="#reg-popup">@lang('local.next')</a>
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
      <span class="checkbox__fake checkbox__fake--popup" >
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