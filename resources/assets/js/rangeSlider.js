import $ from 'jquery';
import noUiSlider from 'nouislider';

const rangeSlider = document.getElementById('range-slider')
const priceInput0 = document.getElementById('curtain__price-input--0')
const priceInput1 = document.getElementById('curtain__price-input--1')
const priceInputs = [priceInput0, priceInput1]

noUiSlider.create(rangeSlider, {
  start: [0, 6597],
  connect: true,
  step: 1,
  range: {
      'min': [0],
      'max': [10000]
  }
});

rangeSlider.noUiSlider.on('update', function(values, handle){
  priceInputs[handle].value = Math.round(values[handle]) 
})

const setRangeSlider = (i,value) => {
  let arr = [null, null]
  arr[i] = value
  rangeSlider.noUiSlider.set(arr)
}

priceInputs.forEach((el,index) => {
  el.addEventListener('change',(e) => {
    setRangeSlider(index, e.currentTarget.value)
  })
})


