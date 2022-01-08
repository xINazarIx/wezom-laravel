<div class="about">
  <div class="about__inner">
    <div class="about__product">
      <div class="title title--normal about__title">@lang('local.aboutProduct')</div>

      <div class="about__tabs about__tabs--js">
        @foreach(config('mock.about-product-content') as $item)
          <div class="about__tab" data-tab="#{{$item->id}}">{{$item->title}}</div>
        @endforeach
      </div>

      @foreach(config('mock.about-product-content') as $item)
      <div class="about__content about__content--hidden about__content--js" id='{{$item->id}}'>
        <div class="about__content-inner">
          @foreach($item->content as $elem)
          <h6>{{$elem->title}}</h6>
          <div>{{$elem->text}}</div>
          @endforeach
        </div>
        <button class="btn-secondary about__btn-secondary about__btn-secondary--js">@lang('local.readAll')</button>
      </div>
      @endforeach
    </div>

    <div class="about__characteristic">
      <div class="title title--normal about__title">@lang('local.characteristics')</div>
      <div class="about__info">
        @foreach(config('mock.about-product') as $elem)
          <div class="about__info-item">
            <div class="about__info-text">{{$elem->description}}</div>
            <div class="about__info-result">{{$elem->result}}</div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>