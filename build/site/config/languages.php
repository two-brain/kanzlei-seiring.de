<?php

// Languages

c::set('languages', array(
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'default' => true,
    'url'     => '/',
    'locale'  => 'de_DE',
  ),
  // array(
  //   'code'    => 'fr',
  //   'name'    => 'Français',
  //   'url'     => '/fr',
  //   'locale'  => 'fr_FR',
  // ),
  array(
    'code'    => 'en',
    'name'    => 'English',
    'url'     => '/en',
    'locale'  => 'en_GB',
  ),
  // array(
  //   'code'    => 'es',
  //   'name'    => 'Español',
  //   'url'     => '/es',
  //   'locale'  => 'es_ES',
  // ),
));

c::set('language.detect', false);
c::set('date.handler', 'strftime');
