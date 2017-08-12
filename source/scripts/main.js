'use strict';

/*
 * Loading main js files
 */

import featureDetection from './partials/featureDetection';
import headHesive from './partials/headHesive';
import tinySlider from './partials/tinySlider';


/*
 * Loading scripts
 */

featureDetection();
headHesive();
tinySlider();


/* SMOOTHSCROLL - keep in mind: breaking changes in next version */

// var smoothScroll = require('smooth-scroll');
//
// smoothScroll.init({
//   selectorHeader: '#js-sticky-nav',
//   offset: -100,
// });
