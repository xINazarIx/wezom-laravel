import $ from 'jquery';

$('.order__input-btn--js').on('click', function(){
  let i = $('.order__input-span--js').text() 
  if($(this).hasClass("order__input-btn--minus") && $('.order__input-span--js').text() > 1){
    $('.order__input-span--js').text(--i)  
  }else if($(this).hasClass("order__input-btn--plus")){
    $('.order__input-span--js').text(++i)  
  }
})
