<?php

/*
 * Including config partials
 */

include kirby()->roots()->config() . '/license.php';
include kirby()->roots()->config() . '/languages.php';
include kirby()->roots()->config() . '/media.php';


/*
 * Development settings
 */

c::set('debug', true);
c::set('plugin.html.minifier.active', false);
