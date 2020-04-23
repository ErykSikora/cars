<?php

include_once __DIR__.'/vendor/autoload.php';

use \ES95\Car;

$car = new Car('FSO', 'Polonez');

var_dump($car);

print_r($car);

$car->drive();
