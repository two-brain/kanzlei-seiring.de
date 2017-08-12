/* SMOOTH-SCROLL */

import SmoothScroll from 'smooth-scroll';

export default function smoothScroll() {
  const scroll = new SmoothScroll('a[href*="#"]', {
    header: '#js-sticky-nav',
    speed: 700,
  	offset: -100
  });
}
