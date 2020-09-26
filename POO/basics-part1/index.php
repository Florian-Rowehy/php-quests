<?php

require_once("./Car.php");

$yellowCar = new Car("yellow", 5, "diesel");

var_dump($yellowCar);

echo "<br>". $yellowCar->getColor();