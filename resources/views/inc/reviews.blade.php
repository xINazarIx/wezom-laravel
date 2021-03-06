<div class="reviews" id='reviews-scroll'>

  @foreach(config('mock.number-of-reviews') as $item)
  <span class="title title--normal reviews__title reviews__title--js reviews__title--active" id="reviews-btn" data-href='#reviews-content'>@lang('local.reviews') ({{$item->number}})</span>
  @endforeach

  @foreach(config('mock.number-of-questions') as $item)
  <span class="title title--normal reviews__title reviews__title--js" id="questions-btn" data-href='#reviews-questions'>@lang('local.questions') ({{$item->number}})</span>
  @endforeach

  <div class="reviews__inner">
    <div class="reviews__content reviews__content--js">

      <div class="reviews__comments reviews__content--active" id='reviews-content'>
        <div class="reviews__users reviews__users--js">

          @foreach(config('mock.reviews') as $review)
            @include('inc.user-review')
          @endforeach

         </div>
          <button class="btn-secondary reviews__btn-secondary reviews__showMore--js">@lang('local.showAllReviews')</button>
        </div>

        <div class="reviews__questions" id='reviews-questions'>
          <div class="reviews__users reviews__users--js">

            @foreach(config('mock.questions') as $question)
               @include('inc.user-question')
            @endforeach

           </div>
            <button class="btn-secondary reviews__btn-secondary reviews__showMore--js">@lang('local.showAllQuestions')</button>
          </div>
        </div>
        @foreach(config('mock.reviews-rating') as $elem)
          @include('inc.reviews-filter')
        @endforeach
      </div>
    </div>