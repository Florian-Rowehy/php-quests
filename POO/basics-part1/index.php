<?php

require_once ("./Car.php");
require_once ("./Bicycle.php");

$yellowCar = new Car("yellow", 5, "diesel");
$blueElectricCar= new Car("blue", 4, "electric" );
$redBicycle = new Bicycle("red");

var_dump($redBicycle);
$redBicycle->forward(15);
$redBicycle->brake();
$yellowCar->forward(50);
$yellowCar->brake();

var_dump($yellowCar);

echo "<br>". $yellowCar->getColor();