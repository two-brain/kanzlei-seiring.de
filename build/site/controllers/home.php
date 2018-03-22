<?php

return function($site, $pages, $page) {

  $services = page('fachgebiete-und-leistungen');
  $specialties = $services->carousel()->toStructure();

  return compact(
    'services',
    'specialties'
  );
};
