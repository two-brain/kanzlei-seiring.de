'use strict';

/*
 * Loading main js files
 */

require('./partials/feature-detection.js');

// Options
var options = {
  // Custom classes
  classes: {

    // Cloned elem class
    clone: 'doppelganger',

    // Stick class
    stick: 'is-sticky',

    // Unstick class
    unstick: 'is-unsticky',
  },
  offset: 500,
};


var Headhesive = require('headhesive');
// Create a new instance of Headhesive.js and pass in some options
var header = new Headhesive('#js-sticky-nav', options);


var smoothScroll = require('smooth-scroll');

smoothScroll.init({
  selectorHeader: '#js-sticky-nav',
});

var gumshoe = require('gumshoe');

gumshoe.init();
