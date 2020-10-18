<?php

require_once __DIR__ . ("/Car.php");

$yellowCar = new Car("yellow", 5, "diesel");
$blueElectricCar= new Car("blue", 4, "electric" );

try {
    $yellowCar->start();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    $yellowCar->setParkBrake(false) ;
} finally {
    echo 'Ma voiture roule comme un donut' . PHP_EOL;
}