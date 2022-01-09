import $ from 'jquery';

switchImages($('.js-product-card__img').first(),$('.js-product-card__sub-images').first())

$('.js-product-card__sub-images').on('click', function(){
  $('.js-product-card__img').addClass('product-card__img--hidden')
  $('.js-product-card__sub-images').removeClass('product-card__sub-images--active')

  $(this).addClass('product-card__sub-images--active')
  $($(this).attr('id')).removeClass('product-card__img--hidden')
})

function switchImages(img,subImg){
  img.removeClass('product-card__img--hidden')
  subImg.addClass('product-card__sub-images--active')
}