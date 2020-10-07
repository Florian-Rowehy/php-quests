<?php
require_once ('./Vehicule.php');

class Truck extends Vehicle {
    private $stock;

    public function __construct(string $color, int $nbSeats, string $energy){
        parent::__construct( $color,  $nbSeats);
    }

}