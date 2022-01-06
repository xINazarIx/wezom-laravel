import $ from 'jquery';
import 'slick-slider';


$('.slider__wrapper').each(function(i,elem){ // Выдаём первому слайдеру класс ектив + дататаб что он инициализирован
  if(i == 0){
    $(this).attr('data-check', 'true')
    $(this).addClass('slider__wrapper--active')
  }
})

$('.petsNav__btn').each(function(i,elem){ // Выдаём первому табу класс ектив
  if(i == 0){
    $(this).addClass('petsNav__btn--active')
  }
})

if($('.slider__items', $('.slider__wrapper--active')).children().length >= 6){
  inicializedSlider($('.slider__items', $('.slider__wrapper--active')), $('.slider__navBtn-prev', $('.slider__wrapper--active')), $('.slider__navBtn-next', $('.slider__wrapper--active')))
}else{
  $('.slider__navBtns', $('.slider__wrapper--active')).css('display', 'none')
} // если в слайдере меньше 6 eлементов не инициализируем его

$('.petsNav__btn').on('click', function(){
  $('.petsNav__btn').removeClass('petsNav__btn--active'); // Удаляем у таба класс актив
  $(this).addClass('petsNav__btn--active'); // Добавлем текущему табу класс актив
  $('.slider__wrapper').removeClass('slider__wrapper--active'); // Удаляем у слайдера класс актив
  $($(this).attr('data-tab')).addClass('slider__wrapper--active'); // Ищем слайдер с помощью айди таба

  if(($($(this).attr('data-tab')).attr('data-check')) == 'false' && $('.slider__items', $($(this).attr('data-tab'))).children().length >= 6){  // Проверяем был ли слайдер проинициализирован с помощью атрибута data-check 
    inicializedSlider($('.slider__items', $('.slider__wrapper--active')), $('.slider__navBtn-prev', $('.slider__wrapper--active')), $('.slider__navBtn-next', $('.slider__wrapper--active'))) // Инициализируем слайдер с помощью функции, передаём имя слайдара и две кнопки, с помощью контекста slider__wrapper--active
    $($(this).attr('data-tab')).attr('data-check', 'true');  // Меняем атрибут на true (Слайдер проинициализирован)
   }else if($('.slider__items', $($(this).attr('data-tab'))).children().length <= 6 && ($($(this).attr('data-tab')).attr('data-check')) == 'false'){ // не инициализируем слайдер если в нём меньше 6 элементов
    $('.slider__navBtns', $($(this).attr('data-tab'))).css('display', 'none')
   }
})

function inicializedSlider(nameSlider, prevBtn, nextBtn){
  $(nameSlider).slick({
    dots: true,
    infinite: false,
    arrows: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 2,
    prevArrow: prevBtn,
    nextArrow: nextBtn,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 881,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
        }
      },
      {
        breakpoint: 610,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        }
      },
      {
        breakpoint: 460,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 350,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      
    ]
  })
}