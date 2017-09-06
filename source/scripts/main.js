'use strict';

/*
 * Loading dependencies
 */

const zenscroll = require('zenscroll');
// const waypoints = require('waypoints/lib/noframework.waypoints.js');

import NProgress from 'nprogress';
import { tns } from 'tiny-slider/src/tiny-slider.module';



/*
 * Declaring custom functions
 */

// 1. Simple JS feature detection

function featureDetection() {
  let className = '';
  let html = '';
  html = document.documentElement;
  className = html.className.replace('no-js', 'js');
  html.className = className;
}


// 2. Growing / shrinking header

// function headerGrow() {
//   const body = document.body;
//   const header = document.getElementById('js-header');
//   new Waypoint({
//     element: body,
//     offset: -200,
//     handler: function() {
//       header.classList.toggle('site-header--is-maximized');
//     }
//   });
// }


// 3. tinySlider

function tinySlider() {
  // const sliderElement = document.getElementById('slider');
  // const sliderControls = document.getElementById('slider-controls');

  let slider = tns({
    container: '.slider',
    controlsContainer: '.slider-controls',
    // container: sliderElement,
    // controlsContainer: sliderControls,
    gutter: 10,

    slideBy: 1,
    speed: 1250,

    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,

    responsive: {
      '0': 1,
      '600': 2,
      '900': 3,
      // '1200': 4
    },
  });
}


// 4. OSM - Map

// var Routing = require('leaflet-routing-machine');
// var Geocoder = require('leaflet-control-geocoder');

function mapInit() {
  const layer = new L.StamenTileLayer('watercolor');

  const seiring_map = L.map('map_canvas',{
    scrollWheelZoom: false
  }).setView([47.98905, 7.85686], 100).addLayer(layer);
  // }).setView([47.98905, 7.85686], 19);

  L.marker([47.98905, 7.85686]).addTo(seiring_map)
    .bindPopup(
      '<b>Seiring & Seiring Rechtsanwälte</b><br>' +
      'Dreikönigsstraße 12<br>' +
      '79102 Freiburg im Breisgau'
    )
    .openPopup();

    // ODER

    // L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //   maxZoom: 19,
    //   attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    // }).addTo(seiring_map);


    // Routing capability

    // L.Routing.control({
    //     waypoints: [
    //         L.latLng(),
    //         L.latLng(47.98905, 7.85686)
    //     ],
    //     routeWhileDragging: true,
    //     geocoder: L.Control.Geocoder.nominatim()
    // }).addTo(seiring_map);


    // map.remove();
    // var node  = document.getElementById('map_canvas');
    // node.parentNode.removeChild(node);

}



/*
 * Initializing functions
 */

// var Turbolinks = require('turbolinks');
// Turbolinks.start();
//
// document.addEventListener('turbolinks:click', function() {
//   NProgress.start();
// });
//
// document.addEventListener('turbolinks:render', function() {
//   NProgress.done();
//   NProgress.remove();
// });
//
// document.addEventListener('turbolinks:load', function() {
//   // tinySlider();
//   headerGrow();
// })


window.onload = function() {
  featureDetection();
  tinySlider();
  // headerGrow();
};


// Barba-specific

import Barba from 'barba.js';

// Define barba properties
Barba.transitionLength = 750;

// Define transition
var Transition = Barba.BaseTransition.extend({
  start: function() {
    this.newContainerLoading.then(this.runTransition.bind(this));
  },

  runTransition: function() {

    // document.body.style.overflow = 'hidden';

    ////////////////////////////
    // Setup
    ////////////////////////////
    var transitionLength = parseInt(Barba.transitionLength),
        transitionTimeout = 100,
        transitionLengthSeconds = (transitionLength / 1000) + 's',
        transitionSelector = 'data-transition';
    ////////////////////////////

    // Set the animation time on all elements
    var allAnimationElements = document.querySelectorAll('[' + transitionSelector + ']');
    for (var i = 0; i < allAnimationElements.length; i++) {
      var element = allAnimationElements[i];

      // Set styles
      element.style.animationDuration = transitionLengthSeconds;
      element.style.animationDelay = transitionLengthSeconds;
      element.style.animationName = element.dataset.transition;
      element.style.animationFillMode = 'forwards';
    }

    // Get all old elements with transitions
    var oldElements = this.oldContainer.querySelectorAll('[' + transitionSelector + ']');
    for (var i = 0; i < oldElements.length; i++) {
      element = oldElements[i];

      // Remove style tag
      element.removeAttribute('style');
    }

    // Trigger out transitions
    setTimeout(function(){

      for (var i = 0; i < oldElements.length; i++) {
        var element = oldElements[i];

        // Set styles
        element.style.animationDuration = transitionLengthSeconds;
        element.style.animationDelay = '0s';
        element.style.animationName = element.dataset.transition;
        element.style.animationFillMode = 'forwards';
        element.style.animationDirection = 'alternate-reverse';
      }

    }, transitionTimeout);

    var x = this;
    function done(x) {

      // Remove old container and add new one
      x.oldContainer.style.visibility = 'hidden';
      x.newContainer.style.visibility = 'visible';

      // Remove style tag at the end of the animation
      setTimeout(function(){
        // document.body.style.overflow = 'visible';
        for (var i = 0; i < allAnimationElements.length; i++) {
          var element = allAnimationElements[i];
          element.removeAttribute('style');
        }
      }, transitionLength);

      // Scroll to top
      document.body.scrollTop = 0;

      // Done
      x.done();

    }

    // Mark as done
    setTimeout(function(){
      done(x);
    }, transitionLength + transitionTimeout);

  }
});

// Add transition to barba
Barba.Pjax.getTransition = function() {
  return Transition;
};


//
// Barba.js defintions

// Variables
Barba.Pjax.Dom.wrapperId = 'js-content';
Barba.Pjax.Dom.containerClass = 'wrapper';

// Views
const MapView = Barba.BaseView.extend({
  namespace: 'kontakt',
  onEnter: function() {
      // The new Container is ready and attached to the DOM.

      mapInit();

  },
  onEnterCompleted: function() {
      // The Transition has just finished.
  },
  onLeave: function() {
      // A new Transition toward a new page has just started.
  },
  onLeaveCompleted: function() {
      // The Container has just been removed from the DOM.
  }
});

// Don't forget to init the view!
MapView.init();

Barba.Pjax.start();
Barba.Prefetch.init();

Barba.Dispatcher.on('linkClicked', function(element) {
  NProgress.start();
  const activeNavElements = document.getElementsByClassName('is-active');
  let i;

  for (i = 0; i < activeNavElements.length; i += 1) {
    activeNavElements[i].classList.remove('is-active');
  }
  // var mobileMenu = document.querySelector('.navigation-links');
  // mobileMenu.classList.add('hidden');

  const elementLink = element.getAttribute('href');
  const header = document.getElementById('js-header');
  const navLinkToAddActive = header.querySelector(`a[href="${elementLink}"]`);
  navLinkToAddActive.classList.add('is-active');
});

Barba.Dispatcher.on('initStateChange', function() {
  NProgress.inc();
});

Barba.Dispatcher.on('newPageReady', function() {
  NProgress.inc();
  tinySlider();
});

Barba.Dispatcher.on('transitionCompleted', function() {
  // tinySlider();
  window.scrollTo(0, 0);
  NProgress.done();
});


// document.addEventListener('DOMContentLoaded', function() {
//
// });
