import $ from 'jquery';

let scrolled;
let timer;

$('.btnUp--js').on('click', function(){
  scrolled = window.pageYOffset
  scrollToTop()
})

function scrollToTop(){

  if(scrolled > 0){
    window.scrollTo(0, scrolled)
    scrolled = scrolled - 15;
    timer = setTimeout(scrollToTop, 1)
  }else{
    clearTimeout(timer)
    window.scrollTo(0,0)
  }
}