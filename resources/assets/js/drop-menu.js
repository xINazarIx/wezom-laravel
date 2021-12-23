import $ from 'jquery';


($('.drop-menu__header')).on('click', function(){
  ($(this).parent()).hasClass('drop-menu--active') ? closeDropMenu($(this).parent()) :
  openDropMenu($(this).parent())
})

function openDropMenu(elem){
  elem.addClass('drop-menu--active')
}

function closeDropMenu(elem){
  elem.removeClass('drop-menu--active')
}