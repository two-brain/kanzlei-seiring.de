<?php

return function($site, $pages, $page) {

  $articles = $page->children()->visible()->flip();

  return compact(
    'articles'
  );
};
