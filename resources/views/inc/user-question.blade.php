<div class="reviews__user">
  <div>
    <div class="reviews__user-name">{{$question['name']}}<br><span>{{$question['date']}}</span></div>
    <div class="reviews__user-images">

      @if(count($question['images']) > 0)
        @foreach($question['images'] as $img)
        <img class="reviews__user-img js-lazy-load fade-in" data-zzload-source-img="{{$img}}" data-zzload-source-srcset="{{$img}}" src='data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="1" height="1"&gt;&lt;/svg&gt;' alt="#">
        @endforeach
      @endif

    </div>
  </div>
  <div class="reviews__user-description">
    <div class="reviews__user-title">{{$question['title']}}</div>
    <div class="reviews__user-text">{{$question['text']}}</div>
  </div>
</div>