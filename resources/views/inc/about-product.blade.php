<div class="about">
  <div class="about__inner">
    <div class="about__product">
      <div class="title title--normal about__title">О товаре</div>
      <div class="about__tabs about__tabs--js">
        <div class="about__tab about__tab--active" data-tab="#about__description">Описание</div>
        <div class="about__tab" data-tab="#about__consist">Состав</div>
        <div class="about__tab" data-tab="#about__video-review">Видеообзор</div>
        <div class="about__tab" data-tab="#about__guide">Руководство по кормлению</div>
      </div>
      <div class="about__content about__content--js" id='about__description'>
        <div class="about__content-inner">
          <div>Корм для взрослых собак Hill's Science Plan с ягненком и рисом специально разработан для обеспечения энергетических потребностей собак в самом расцвете их жизни. Сделан из высококачественных, легко усваиваемых ингредиентов.</div>
          <h6>Особенности HILLS Mature Adult 7+ ягненок и рис:</h6>
          <ul>
            <li>Омега-6 жирные кислоты и витамин Е для красивой кожи и шерсти</li>
            <li>Высококачественные ингредиенты: ягненок и рис для собак с чувствительным пищеварением</li>
            <li>Высококачественный белок для поддержания мышечной массы</li>
          </ul>
          <div>Hill's Science Plan Active Longevity помогает сохранить функцию почек и других жизненно важных органов собак мелких и средних пород старше 7 лет: - Разработан с антиоксидантами с клинически подтвержденным эффектом, Омега-3 жирными кислотами и сниженным содержанием фосфора. - Антиоксидантные витамины Е и С для сохранения функции почек. - Высоко перевариваемые ингредиенты для легкого пищеварения. - Поддерживает функцию жизненно важных органов с помощью сбалансированного уровня минералов. - 100% гарантия качества, консистенции и вкуса Повседневный рацион для собак старше 7 лет Пробуете этот рацион впервые? Постепенно в течение 7 дней переводите животное на новый рацион, увеличивая его содержание по отношению к прежнему. Обеспечьте питомцу свободный доступ к свежей воде. Суточная норма, обозначенная на упаковке, требует корректировки для поддержания оптимального веса питомца. Не рекомендуется Кошкам Щенкам Беременным и кормящим сукам. */</div>
        </div>
        <button class="btn-secondary about__btn-secondary about__btn-secondary--js">Читать полностью</button>
      </div>
      <div class="about__content about__content--hidden about__content--js" id='about__consist'>
        <div class="about__content-inner">
          <h6>Состав</h6>
        </div>
      </div>
      <div class="about__content about__content--hidden about__content--js" id='about__video-review'>
        <div class="about__content-inner">
          <h6>Видеообзор</h6>
        </div>
      </div>
      <div class="about__content about__content--hidden about__content--js" id='about__guide'>
        <div class="about__content-inner">
          <h6>Руководство</h6>
        </div>
      </div>
    </div>

    <div class="about__characteristic">
      <div class="title title--normal about__title">Характеристика</div>
      <div class="about__info">
        @foreach($aboutProduct as $char)
        <div class="about__info-item">
          <div class="about__info-text">{{$char['desc']}}</div>
          <div class="about__info-result">{{$char['result']}}</div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>