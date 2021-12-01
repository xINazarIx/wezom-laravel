import $ from 'jquery';

$('#search').on('click', function(){
  $('.search-popup').css('display', 'block')
})

$('#search-close').on('click', function(){
  $('.search-popup').css('display', 'none')
})