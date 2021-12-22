import $ from 'jquery';

$('.btn-clean-filters--js').on('click', function(){
  $('.goods__filters').remove()
})

$('.filter-close-btn--js').on('click', function(){
  $('.filters--js').children().length <= 2 ? $('.filters--js').remove() : $(this).parent().remove() 
})