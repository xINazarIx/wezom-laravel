import $ from 'jquery';


$('.curtain__checkboxes--js').each(function(){
  if($(this).children().length == 0){
    $(this).css('margin-top', '0')
    $(this).addClass('curtain__checkboxes--hidden')
    $('.curtain__arrow-up', $(this).parent()).css('transform', 'rotate(0deg)')
  }else{
  $(this).children().each(function(i,elem){
    if(i >= 9 && $(this).children().hasClass('curtain__showMore--js') !== true){
      $(this).addClass('curtain__checkbox--hidden')
    }
  })}
})

$('.curtain__showMore--js').on('click', function(){
  $('.curtain__checkboxes--js').children().each(function(){
    $(this).removeClass('curtain__checkbox--hidden')
  })
  $(this).remove()
})

$('.curtain__header').on('click', function(){
  $('.curtain__checkboxes--js', $(this).parent()).hasClass('curtain__checkboxes--hidden') ? openCurtain($('.curtain__checkboxes--js', $(this).parent()), $('.curtain__arrow-up', $(this))) : closeCurtain($('.curtain__checkboxes--js', $(this).parent()), $('.curtain__arrow-up', $(this)))
})

function closeCurtain(elem, arrow){
  elem.addClass('curtain__checkboxes--hidden')
  arrow.css('transform', 'rotate(0deg)')
}

function openCurtain(elem, arrow){
  elem.removeClass('curtain__checkboxes--hidden')
  arrow.css('transform', 'rotate(-180deg)')
}