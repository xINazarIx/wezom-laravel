import $ from 'jquery';
import 'slick-slider';

if($('.slider__items', $('.slider__wrapper--active')).children().length >= 6){
  inicializedSlider($('.slider__items', $('.slider__wrapper--active')), $('.slider__navBtn-prev', $('.slider__wrapper--active')), $('.slider__navBtn-next', $('.slider__wrapper--active')))
}else{
  $('.slider__navBtns', $('.slider__wrapper--active')).css('display', 'none')
} // если в слайдере меньше 6 єлементов не инициализируем его

$('.petsNav__btn').on('click', function(){
  $('.petsNav__btn').removeClass('petsNav__btn--active'); // Удаляем у таба класс актив
  $(this).addClass('petsNav__btn--active'); // Добавлем текущему табу класс актив
  $('.slider__wrapper').removeClass('slider__wrapper--active'); // Удаляем у слайдера класс актив
  $($(this).attr('data-tab')).addClass('slider__wrapper--active'); // Ищем слайдер с помощью айди таба

  if(($($(this).attr('data-tab')).attr('data-check')) == 'false'){  // Проверяем был ли слайдер проинициализирован с помощью атрибута data-check 
    inicializedSlider($('.slider__items', $('.slider__wrapper--active')), $('.slider__navBtn-prev', $('.slider__wrapper--active')), $('.slider__navBtn-next', $('.slider__wrapper--active'))) // Инициализируем слайдер с помощью функции, передаём имя слайдара и две кнопки, с помощью контекста slider__wrapper--active
    $($(this).attr('data-tab')).attr('data-check', 'true');  // Меняем атрибут на true (Слайдер проинициализирован)
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
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 581,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2,
        }
      }
    ]
  })
}