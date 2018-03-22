<?php

return function($site, $pages, $page) {

  $bulletItems = $page->skills()->toStructure();
  $teamItems = $page->team()->toStructure();

  return compact(
    'bulletItems',
    'teamItems'
  );
};
