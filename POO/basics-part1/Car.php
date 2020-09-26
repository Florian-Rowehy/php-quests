<?php 

class Car {
    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy){
        $this->nbWheels = 4;
        $this->currentSpeed = 0;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->energyLevel = 100;
    }

    public function forward($speed){
        $this->currentSpeed += $speed;
    }
    public function brake(){
        $reducedSpeed = $this->currentSpeed - 10;
        $this->currentSpeed = $reducedSpeed <0? 0 : $reducedSpeed;
    }
    public function start(){
        $this->currentSpeed = $this->currentSpeed === 0? 5 : $this->currentSpeed;
    }
    public function getNbWheels(){
        return $this->nbWheels;
    }
    public function getCurrentSpeed(){
        return $this->currentSpeed;
    }
    public function getColor(){
        return $this->color;
    }
    public function getNbSeats(){
        return $this->nbSeats;
    }
    public function getEnergy(){
        return $this->energy;
    }
    public function getEnergyLevel(){
        return $this->energyLevel;
    }


}