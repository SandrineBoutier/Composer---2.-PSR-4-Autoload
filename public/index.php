<?php

require '../vendor/autoload.php';
use App\Wcs\Hello;

$salutation= new Hello();
echo ($salutation->talk());