import $ from 'jquery';

$('.goods__cards--js').children().each(function(i,elem){
  if(i >= 24){
    $(this).addClass('goods__card--hidden')
  }
})

$('.goods__btn-showMore--js').on('click', function(){
  $('.goods__cards--js').children().each(function(){
    $(this).removeClass('goods__card--hidden')
  })
  $(this).remove()
})