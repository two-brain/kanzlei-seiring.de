<?php

include kirby()->roots()->config() . '/languages.php';
include kirby()->roots()->config() . '/media.php';

// Development
c::set('debug', true);
c::set('fingerprint', false);
