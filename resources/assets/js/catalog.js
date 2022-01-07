import $ from 'jquery';

$('.js-catalog-item-links').each(function(i,elem){
  if($(this).children().length <= 5){
    $('.js-catalog__showMore', $(this)).remove()
  }

  $(this).children().each(function(i,elem){
    if(i > 3 && $(this).hasClass('js-catalog__showMore') == false){
      $(this).remove()
    }
  })
})