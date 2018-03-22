'use strict';

/*
 * Loading dependencies
 */

import Barba from 'barba.js';
import zenscroll from 'zenscroll';
import { tns } from 'tiny-slider/src/tiny-slider.module';
import NProgress from 'nprogress';
import Accordions from 'a11y-accordion-component';

NProgress.configure({
  showSpinner: false,
  speed: 500
});

/*
 * Setting up barba.js
 */

// Variables
Barba.Pjax.Dom.wrapperId = 'barba';
Barba.Pjax.Dom.containerClass = 'wrapper';
Barba.transitionLength = 500;

// Transitions
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

Barba.Pjax.getTransition = function() { return Transition; };


// Views
const HomeView = Barba.BaseView.extend({
  namespace: 'home',
  onEnter: function() {
    // The new Container is ready and attached to the DOM.
    let slider = tns({
      container: '.slider',
      controlsContainer: '.slider-controls',
      gutter: 10,
      nav: false,

      slideBy: 1,
      speed: 750,

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

HomeView.init();

const ServicesView = Barba.BaseView.extend({
  namespace: 'fachgebiete-und-leistungen',
  onEnter: function() {
    Accordions.init();
    Accordions.render('accordion', {
      isMultiSelectable: true,
      isCollapsible: true,
    });
  },
  onEnterCompleted: function() {
    // The Transition has just finished.
  },
  onLeave: function() {
    // A new Transition toward a new page has just started.
  },
  onLeaveCompleted: function() {
    Accordions.destroy('accordion');
  }
});

ServicesView.init();

const ContactView = Barba.BaseView.extend({
  namespace: 'anfahrt-und-kontakt',
  onEnter: function() {
    // The new Container is ready and attached to the DOM.
    const layer = new L.StamenTileLayer('terrain');
    const seiring_map = L.map('map_canvas',{
      scrollWheelZoom: false
    }).setView([47.98905, 7.85686], 17).addLayer(layer);
    // }).setView([47.98905, 7.85686], 19);

    L.marker([47.98905, 7.85686]).addTo(seiring_map)
      .bindPopup(
        '<b>Seiring & Seiring Rechtsanwälte</b><br>' +
        'Dreikönigsstraße 12<br>' +
        '79102 Freiburg im Breisgau'
      )
      .openPopup();
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

ContactView.init();

/*
 * Initializing all the things
 */

window.onload = function() {
  let className = '';
  let html = '';
  html = document.documentElement;
  className = html.className.replace('no-js', 'js');
  html.className = className;

  let back = document.getElementById('back-to-top');
  function scrollTop() {
    zenscroll.toY(0);
  }

  back.addEventListener('click', scrollTop);

  Barba.Pjax.start();
  Barba.Prefetch.init();

  Barba.Dispatcher.on('linkClicked', function(element) {
    NProgress.start();
    document.getElementById('back-to-top').removeEventListener('click', scrollTop);
  });

  Barba.Dispatcher.on('initStateChange', function() {
    NProgress.inc();
  });

  Barba.Dispatcher.on('newPageReady', function() {
    NProgress.set(0.8);
  });

  Barba.Dispatcher.on('transitionCompleted', function() {
    NProgress.done();
    window.scrollTo(0, 0);
    document.getElementById('back-to-top').addEventListener('click', scrollTop);
  });

};
