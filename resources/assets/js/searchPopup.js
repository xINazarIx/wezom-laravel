import $ from 'jquery';

$('#search').on('click', function(){
  $('.search-popup').css('display', 'block')
})

$('#search-close').on('click', function(){
  $('.search-popup').css('display', 'none')
})

$('.search-popup__input').on('input', function(){
  if($(this).val().length >= 2){
    $('.search-popup__text').css('display', 'none')
    $('.search-popup__content').css('display', 'block')
  }else{
    $('.search-popup__text').css('display', 'block')
    $('.search-popup__content').css('display', 'none')
  }
})

$('.search-popup__menu-item').on('click', function(){
  $(this).hasClass('search-popup__menu-item--active') ? closeSearchLinks($(this)) : openSearchLinks($(this));
});

function closeSearchLinks(item){
  item.removeClass('search-popup__menu-item--active')
  $('.search-popup__menu-links', item).css('display', 'none')
}

function openSearchLinks(item){
  item.addClass('search-popup__menu-item--active')
  $('.search-popup__menu-links', item).css('display', 'block')
}