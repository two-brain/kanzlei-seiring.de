<?php

return function($site, $pages, $page) {

  $vcard = $page->vcard()->toFile();
  $vcardImage = (new Asset('assets/images/icons/download.svg'))->content();
  $phone = $site->fon();
  $fax = $site->fax();

  return compact(
    'vcard',
    'vcardImage',
    'download',
    'phone',
    'fax'
  );
};
