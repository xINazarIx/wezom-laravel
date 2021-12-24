import $ from 'jquery';

$('.reviews__title--js').on('click', function(){
  $('.reviews__title--js').removeClass('reviews__title--active')
  $(this).addClass('reviews__title--active')
  $('.reviews__content--js').children().removeClass('reviews__content--active')
  $($(this).attr('data-id')).addClass('reviews__content--active')
})

$('.reviews__users--js').each(function(){
  $(this).children().each(function(i,elem){
    if(i >= 4){
      $(this).addClass('reviews__user--hidden')
    }else if(i == 3){
      $(this).addClass('reviews__user--disable')
    }
  })
})

$('.reviews__users--js').each(function(i,elem){
  if($(this).children().length <= 3){
    $('.reviews__showMore--js', $(this).parent()).remove()
  }
})

$('.reviews__showMore--js').on('click', function(){
  $('.reviews__users--js', $(this).parent()).children().each(function(i,elem){
    $(this).removeClass('reviews__user--hidden')
    if(i == 3){
      $(this).removeClass('reviews__user--disable')
    } 
  })
  $(this).remove()
})