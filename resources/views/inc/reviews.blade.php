<div class="reviews">
  <span class="title title--normal reviews__title reviews__title--js reviews__title--active" data-id='#reviews-content'>Отзывы (65)</span>
  <span class="title title--normal reviews__title reviews__title--js" data-id='#reviews-questions'>Вопросы (3)</span>
  <div class="reviews__inner">
    <div class="reviews__content reviews__content--js">

      <div class="reviews__comments reviews__content--active" id='reviews-content'>
        <div class="reviews__users reviews__users--js">

          @foreach(config('mock.reviews') as $review)
            @include('inc.user-review')
          @endforeach

         </div>
          <button class="btn-secondary reviews__btn-secondary reviews__showMore--js">Показать все отзывы</button>
        </div>

        <div class="reviews__questions" id='reviews-questions'>
          <div class="reviews__users reviews__users--js">

            @foreach(config('mock.questions') as $question)
               @include('inc.user-question')
            @endforeach

           </div>
            <button class="btn-secondary reviews__btn-secondary reviews__showMore--js">Показать все вопросы</button>
          </div>
        </div>
        @foreach(config('mock.reviews-rating') as $elem)
          @include('inc.reviews-filter')
        @endforeach
      </div>
    </div>