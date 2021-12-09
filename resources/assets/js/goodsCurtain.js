import $ from 'jquery';

$('.curtain__arrow-up').on('click', function(){
  $($(this).attr('data-id')).hasClass('curtain__checkboxes--active') ? closeCurtain($($(this).attr('data-id')), $(this)) : openCurtain($($(this).attr('data-id')), $(this))
})


function closeCurtain(checkboxes, arrow){
  checkboxes.css('display', 'none')
  checkboxes.css('margin-top', '0')
  arrow.css('transform', 'rotate(0)')
  checkboxes.removeClass('curtain__checkboxes--active')
}

function openCurtain(checkboxes, arrow){
  checkboxes.css('display', 'block')
  checkboxes.css('margin-top', '24px')
  arrow.hasClass('curtain__arrow-down') ? arrow.css('transform', 'rotate(0)') : arrow.css('transform', 'rotate(180deg)')
  checkboxes.addClass('curtain__checkboxes--active')
}

$('.curtain__showMore--js').on('click', function(){
  $('.checkbox__showMore').css('display', 'none')
  $('.curtain__checkbox').removeClass('curtain__checkbox--hidden')
})