'use strict';

/*
 * Loading main js files
 */

require('./partials/feature-detection.js');

/* HEADHESIVE.JS */

var options = {
  classes: {
    clone: 'doppelganger',
    stick: 'is-sticky',
    unstick: 'is-unsticky',
  },
  offset: 400,
};

var Headhesive = require('headhesive');
var header = new Headhesive('#js-sticky-nav', options);


/* SMOOTHSCROLL */

var smoothScroll = require('smooth-scroll');

smoothScroll.init({
  selectorHeader: '#js-sticky-nav',
  offset: -100,
});
