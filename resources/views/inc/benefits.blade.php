<div class="benefits">
  <div class="container">
    <div class="benefits__inner">
      <div class="benefits__items">
        @foreach(config('mock.benefits') as $item)
        <div class="benefits__item">
          <a class="benefits__item-icon" href="{{$item->url}}" target="_blank">
            <svg class="benefits__item-img">
              <use xlink:href="{{$item->img}}"></use>
            </svg>
          </a>
          <div class="benefits__item-text">{{$item->description}}</div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>