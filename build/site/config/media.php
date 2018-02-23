<?php

// define the thumb presets in site/config/config.php
c::set('thumbs.presets', [
  'default' => ['width' => 300, 'quality' => 80],
  'blurred' => ['width' => 300, 'quality' => 80, 'blur' => true],
  'hero' => ['width' => 1440, 'height' => 960, 'quality' => 85, 'crop' => true]
]);

c::set('thumbs.driver', 'im');
