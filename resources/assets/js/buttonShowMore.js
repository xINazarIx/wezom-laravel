import $ from 'jquery';

$('.showMore--js').on('click', function(){
  $('.description__box--hidden').css('height', '100%')
  $('.description__box--hidden').css('opacity', '1')
  $(this).css('display', 'none')
})