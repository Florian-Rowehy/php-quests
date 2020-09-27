<?php
class Bicycle
{
    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $hasLuggageRack;

    public function __construct($color, $hasLuggageRack=false)
    {
        $this->nbWheels = 2;
        $this->currentSpeed = 0;
        $this->color = $color;
        $this->nbSeats = 1;
        $this->hasLuggageRack = $hasLuggageRack;
    }

    public function forward($speed){
        $this->currentSpeed += $speed;
    }

    public function brake(){
        $reducedSpeed = $this->currentSpeed - 10;
        $this->currentSpeed = $reducedSpeed <0? 0 : $reducedSpeed;
    }
}