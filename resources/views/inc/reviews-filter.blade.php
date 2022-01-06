<div class="reviews-filter reviews__filter">
  <div class="reviews-filter__inner">
    <div class="reviews-filter__recomend">
      <div class="reviews-circle reviews-filter__reviews-circle">
        <svg viewBox="0 0 36 36" class="reviews-circle__svg">
          <path class="reviews-circle__circle-bg" d="M18 2.0845
                      a 15.9155 15.9155 0 0 1 0 31.831
                      a 15.9155 15.9155 0 0 1 0 -31.831" />

          <path class="reviews-circle__circle" stroke-dasharray="{{$elem->mainProcent}}, 100" d="M18 2.0845
                      a 15.9155 15.9155 0 0 1 0 31.831
                      a 15.9155 15.9155 0 0 1 0 -31.831" />

          <text x="19.5" y="21" class="reviews-circle__text">{{$elem->mainProcent}}%</text>
        </svg>
      </div>
      <div class="reviews-filter__recomend-text">пользователей рекомендуют этот продукт</div>
    </div>
    <div class="reviews-filter__values">
      <div class="reviews-filter__title">Фильтровать по оценке</div>
      <div class="reviews-filter__items">
        @foreach($elem->procentes as $item)
        <div class="reviews-filter__item">
          <div class="reviews-filter__star">
            <svg class="reviews-filter__star-svg">
              <use xlink:href="assets/images/spritemap.svg#sprite-star"></use>
            </svg>
            <span>{{$item->star}}</span>
            <div class="reviews-filter__line-wrapper">
              <div class="reviews-filter__line" style="width: <?php echo $item->procent?>"></div>
            </div>
          </div>
          <div class="reviews-filter__procent">{{$item->procent}}</div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <button class="btn reviews-filter__btn">Написать отзыв</button>
</div>