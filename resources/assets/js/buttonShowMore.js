import $ from 'jquery';
import { after } from 'lodash';

$('.blog__inner').children().each(function(i){
  i >= 4 ? $(this).css('display', 'none') : $(this).css('display', 'block') 
})

$('.blog__showMore--js').on('click', function(){
  $('.blog__inner').children().each(function(i){
    $(this).css('display', 'block')
  })
  $('.blog__inner').css('padding-bottom', '36px')
  $('.blog').css('margin-bottom', '128px')
  $('.blog__showMore').css('display', 'none')
})