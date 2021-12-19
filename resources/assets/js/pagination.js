import $ from 'jquery';

$('.pagination--js').children().on('click', function(e){
  if($(this).hasClass('pagination__link')){
    if($(this).hasClass('pagination__link--active')){
      e.preventDefault()
    }else{
      $('.pagination--js').children().removeClass('pagination__link--active')
      $(this).addClass('pagination__link--active')
    }
  }
})