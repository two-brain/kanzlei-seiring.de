/* tiny slider */

import { tns } from 'tiny-slider/src/tiny-slider.module';

export default function tinySlider() {
  const slider = tns({
    responsive: {
      '0': 1,
      '600': 2,
      '900': 3
    },
    slideBy: 1,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    gutter: 10,
    controlsContainer: '.slider-controls'
  });
}
