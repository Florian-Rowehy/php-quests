<?php

require_once __DIR__ . ("/Car.php");
require_once __DIR__ . ("/Bicycle.php");

$yellowCar = new Car("yellow", 5, "diesel");
$blueBicyle= new Bicycle("blue");

var_dump($yellowCar->switchOn());
var_dump($blueBicyle->switchOn());
$blueBicyle->forward(15);
var_dump($blueBicyle->switchOn());