<?php 

  return[
    (object)[
      'link' => 'Товары по питомцам',
      'url' => '/catalog',
      'subLinks' => [
        [
          'link' => 'Собаки',
          'url' => '#',
          'sprite' => 'assets/images/spritemap.svg#sprite-submenu-icon-1',
          'subLinks' => [
            [
            'title' => 'Корм',
            'links' => ['Сухой корм' => '#', 'Консервы' => '#','Ветеринарные диеты' => '#','Заменители молока' => '#']
            ],
            [
              'title' => 'Игрушки',
              'links' => ['Интерактивные' => '#', 'Удочки и дразнилки' => '#','Мышки' => '#','Мячики' => '#']
            ],
            [
              'title' => 'Здровье',
              'links' => ['Средства от блох и клещей' => '#', 'Витамины и добавки' => '#','Средства от глистов' => '#','Ветеринарные препараты' => '#']
            ],
            [
              'title' => 'Одежда и обудь',
              'links' => ['Комбинезоны' => '#', 'Костюмы' => '#','Дождевики' => '#','Свитера' => '#']
            ],
            [
              'title' => 'Товары для дома',
              'links' => ['Домики', 'Когтеточки' => '#','Спальные места' => '#','Миски и поилки' => '#']
            ],
            [
              'title' => 'Лакомства',
              'links' => ['Кости' => '#', 'Печенье' => '#','Для дрессировки' => '#','Сушеные лакомства' => '#']
            ],
            [
              'title' => 'Уход',
              'links' => ['Средства по уходу' => '#', 'Инструменты для груминга' => '#','Туалеты и пеленки' => '#']
            ],
            [
              'title' => 'Косметика',
              'links' => ['Шампуни' => '#', 'Духи' => '#','Кондиционеры и спреи' => '#','Профессиональная и выставочная косметика' => '#']
            ],
            [
              'title' => 'Амуниция',
              'links' => ['Поводки' => '#', 'Ошейники' => '#','Шлейки' => '#','Рулетки' => '#']
            ],
            [
              'title' => 'Путешествия',
              'links' => ['Сумки и переноски' => '#', 'Автоаксессуары' => '#']
            ],
          ]
        ],
        [
          'link' => 'Кошки',
          'url' => '#',
          'sprite' => 'assets/images/spritemap.svg#sprite-submenu-icon-2',
          'subLinks' => []
        ],
        [
          'link' => 'Птицы',
          'url' => '#',
          'sprite' => 'assets/images/spritemap.svg#sprite-submenu-icon-3',
          'subLinks' => []
        ],
        [
          'link' => 'Грызуны',
          'url' => '#',
          'sprite' => 'assets/images/spritemap.svg#sprite-submenu-icon-4',
          'subLinks' => []
        ],
        [
          'link' => 'Новинки',
          'url' => '#',
          'sprite' => 'assets/images/spritemap.svg#sprite-submenu-star',
          'subLinks' => []
        ],
        [
          'link' => 'Акции',
          'url' => '#',
          'sprite' => 'assets/images/spritemap.svg#sprite-submenu-procent',
          'subLinks' => []
        ],
      ],
    ],
    (object)[
      'link' => 'Бренды',
      'url' => '/goods',
      'subLinks' => []
    ],

    (object)[
      'link' => 'Ветаптека',
      'url' => '/page-product',
      'subLinks' => []
    ],

    (object)[
      'link' => 'Найди друга',
      'url' => '/catalog',
      'subLinks' => []
    ],

    (object)[
      'link' => 'Ветклиники',
      'url' => '/catalog',
      'subLinks' => []
    ]
    
  ]
?>