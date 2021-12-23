import $ from 'jquery';

$('.about__tabs--js').children().on('click', function(){
  $('.about__tabs--js').children().each(function(){
    $(this).removeClass('about__tab--active')
  })

  $('.about__content--js').each(function(){
    $(this).addClass('about__content--hidden')
  })

  $($(this).attr('data-tab')).removeClass('about__content--hidden')
  $(this).addClass('about__tab--active')
})

$('.about__btn-secondary--js').on('click', function(){
  $('.about__content-inner', $(this).parent()).addClass('about__content-inner--more')
  $(this).remove()
})