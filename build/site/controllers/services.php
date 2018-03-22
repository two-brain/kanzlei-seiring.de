<?php

return function($site, $pages, $page) {

  $accordionImage = (new Asset('assets/images/icons/plus-circle.svg'))->content();
  $specialties = $page->carousel()->toStructure();
  $engagements = $page->engagement()->toStructure();

  return compact(
    'accordionImage',
    'specialties',
    'engagements'
  );
};
