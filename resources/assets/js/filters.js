import $ from 'jquery';

$('.btn-clean-filters--js').on('click', function(){
  $('.goods__filters').addClass('goods__filters--hidden')
})

$('.filter-close-btn--js').on('click', function(){
  $(this).parent().addClass('filter--hidden')
})