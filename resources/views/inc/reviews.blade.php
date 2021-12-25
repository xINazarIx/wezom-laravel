<?php


$reviews = (object)[
  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'stars' => '5', 'title' => 'Отличный корм! Хороший состав',
  'text' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.', 'images' => ['assets/images/user-1.jpeg', 'assets/images/user-2.jpeg'], 'likes' => '78'],

  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'stars' => '4', 'title' => 'Супер корм!!!',
  'text' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.', 'images' => [], 'likes' => '43'],

  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'stars' => '5', 'title' => 'Поделюсь своим опытом',
  'text' => 'Перевёл Николь с натурального питания на 1st Choice Sensitive Skin&Coat Adult Lumb&Fish и остался очень доволен. Со стулом всё наладилось ( раньше переодично сталкивались с диареей), собака кушает с удовольствием и то, что заметили все знакомые - улучшилось состояние шерсти!! Восторг просто! Очень порадовал ещё тот факт, что консультант дал корм на пробу бесплатно, сейчас такое редко где встретишь. Это похвально, господа. Спасибо за внимание и дельные советы по питанию и уходу.', 'images' => ['assets/images/user-3.jpeg'], 'likes' => '78'],

  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'stars' => '5', 'title' => 'Моей собаке очень подошел этот корм!',
  'text' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.', 'images' => [], 'likes' => '78'],

  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'stars' => '3', 'title' => 'Супер корм!!!',
  'text' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.', 'images' => [], 'likes' => '43'],

  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'stars' => '4', 'title' => 'Моей собаке очень подошел этот корм!',
  'text' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.', 'images' => [], 'likes' => '78'],
];

$questions = (object)[
  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'title' => 'Сколько стоит такой корм?',
  'text' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.', 'images' => ['assets/images/user-1.jpeg', 'assets/images/user-2.jpeg']],

  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'title' => 'Как заказать по НП?',
  'text' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.', 'images' => []],

  ['name' => 'Татьяна Куприна', 'date' => '12 апреля 2021', 'title' => 'Вопрос?',
  'text' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.', 'images' => []]
]



?>

<div class="reviews">
  <span class="title title--normal reviews__title reviews__title--js reviews__title--active" data-id='#reviews-content'>Отзывы (65)</span>
  <span class="title title--normal reviews__title reviews__title--js" data-id='#reviews-questions'>Вопросы (3)</span>
  <div class="reviews__inner">
    <div class="reviews__content reviews__content--js">

      <div class="reviews__comments reviews__content--active" id='reviews-content'>
        <div class="reviews__users reviews__users--js">

          @foreach($reviews as $review)
            @include('inc.user-review', $review)
          @endforeach

         </div>
          <button class="btn-secondary reviews__btn-secondary reviews__showMore--js">Показать все отзывы</button>
        </div>

        <div class="reviews__questions" id='reviews-questions'>
          <div class="reviews__users reviews__users--js">

            @foreach($questions as $question)
               @include('inc.user-question', $question)
            @endforeach

           </div>
            <button class="btn-secondary reviews__btn-secondary reviews__showMore--js">Показать все вопросы</button>
          </div>
        </div>

        @include('inc.reviews-filter')
      </div>
    </div>