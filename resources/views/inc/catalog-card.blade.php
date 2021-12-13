<?php 
  foreach($catalogCards as $card){
    ?>

    <div class="sections__item">
      <div class="sections__card">
        <a class="sections__img-link" href="<?php echo $card['section']['link']?>">
         <img class="sections__card-img js-lazy-load fade-in" data-zzload-source-img="<?php echo $card['img']?>" data-zzload-source-srcset="<?php echo $card['img']?>" src="data:image/svg+xml,&lt;svg" xmlns="http://www.w3.org/2000/svg" alt="#">
        </a>

        <div class="sections__card-description"><?php echo $card['section']['title'] ?></div>
        <a class="sections__card-watchAll" href="<?php echo $card['section']['link']?>">Смотреть все
          <svg class="sections__card-svg" fill='none' height='10px' width='6px' stroke='white' stroke-width='2px'>
            <use xlink:href='assets/images/spritemap.svg#sprite-arrow-next'></use>
          </svg>
        </a>
      </div>
      <div class="sections__links">
        <?php
        foreach ($card['links'] as $title => $link) {
        ?>
          <div class="sections__links-item">
            <a class="sections__link" href="<?php echo $link?>"><?php echo $title?></a>
          </div>
        <?php
        }
        ?>
        <?php
        $length = count(($card['links']));
        if ($length > 4) {
          echo
          '<div class="sections__showMore">
            <a class="sections__showMore-link" href="">Больше категорий</a>
          </div>';
        };
        ?>
      </div>
    </div>

<?php  
  };
     ?>