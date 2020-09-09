/**
 * Tiny Slider
 */

import { tns } from 'tiny-slider/src/tiny-slider';

const tiniSliderElement = document.querySelector(".tini-slider");

//If it isn't "undefined" and it isn't "null", then it exists.
if( typeof( tiniSliderElement ) != 'undefined' && tiniSliderElement != null ) {
  var tiniSlider = tns({
    container: '.tini-slider',
    mode: 'gallery',
    center: true,
    items: 1,
    controls: true,
    controlsText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
    controlsPosition: 'bottom',
    autoplay: false,
    mouseDrag: true,
    navPosition: 'bottom'
  });
}

export default tiniSlider;
