<?php

require_once ("./Car.php");
require_once ("./Bicycle.php");
require_once ("./Truck.php");

$yellowCar = new Car("yellow", 5, "diesel");
$blueElectricCar= new Car("blue", 4, "electric" );
$redBicycle = new Bicycle("red", 1);
$orangeTruck = new Truck("orange", 3, "diesel");
$greenTruck = new Truck("greeen", 4, "electric");

var_dump($redBicycle);
$redBicycle->forward(15);
$redBicycle->brake();
$yellowCar->forward(50);
$yellowCar->brake();

var_dump($yellowCar);
echo $yellowCar->getColor().PHP_EOL;
echo $orangeTruck->checkStockStatus().PHP_EOL;
echo $greenTruck->loadCargo(50);