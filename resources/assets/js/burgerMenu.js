import $ from 'jquery';

$('.burger--js').on('click', function(){
  $('.burger--js').hasClass('burger--active') ? closeBurgerMenu() : openBergerMenu();
})

$('.burgerMask').on('click', function(){
  closeBurgerMenu();
})


function openBergerMenu(){
  $('.burger--js').addClass('burger--active')
  $('.burgerMenu').addClass('burgerMenu--active')
  $('body').addClass('body--disable')
  $('.burgerMask').addClass('burgerMask--active')
}

function closeBurgerMenu(){
  $('.burger--js').removeClass('burger--active')
  $('.burgerMenu').removeClass('burgerMenu--active')
  $('body').removeClass('body--disable')
  $('.burgerMask').removeClass('burgerMask--active')
}
