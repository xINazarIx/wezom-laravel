import $ from 'jquery';

$('.btn-clean-filters--js').on('click', function(){
  $('.filters--js').remove()
})

$('.filter-close-btn--js').on('click', function(){
  $('.filters--js').children().length <= 2 ? $('.filters--js').remove() : $(this).parent().remove() 
})

$('.showFilters--js').on('click', function(){
  $('.goods__sidebar--js').addClass('goods__sidebar--active')
  $('body').addClass('body--disable')
  $('.burgerMask').addClass('burgerMask--active')
})