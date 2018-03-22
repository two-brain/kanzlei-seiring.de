<?php

return function($site, $pages, $page) {

  $files = $page->files()->filterBy('type', 'document')->sortBy('extension');
  $cloud = (new Asset('assets/images/icons/cloud.svg'))->content();

  return compact(
    'files',
    'cloud'
  );
};
