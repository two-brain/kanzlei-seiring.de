/* HEADHESIVE.JS */

import Headhesive from 'headhesive';

export default function headHesive() {
  const options = {
    classes: {
      clone: 'doppelganger',
      stick: 'is-sticky',
      unstick: 'is-unsticky',
    },
    offset: 400,
  };

  const header = new Headhesive('#js-sticky-nav', options);
}
