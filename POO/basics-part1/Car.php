<?php 

class Car {
    /**
     * @var int
     */
    private $nbWheels;
    /**
     * @var int
     */
    private $currentSpeed;
    /**
     * @var string
     */
    private $color;
    /**
     * @var int
     */
    private $nbSeats;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy){
        $this->nbWheels = 4;
        $this->currentSpeed = 0;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->energyLevel = 100;
    }

    public function forward(int $speed) :void {
        $this->currentSpeed += $speed;
    }
    public function brake(): void {
        $reducedSpeed = $this->currentSpeed - 20;
        $this->currentSpeed = $reducedSpeed <0? 0 : $reducedSpeed;
    }
    public function start(): void{
        $this->currentSpeed = $this->currentSpeed === 0? 5 : $this->currentSpeed;
    }
    public function getNbWheels(): int {
        return $this->nbWheels;
    }
    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }
    public function getColor(): string{
        return $this->color;
    }
    public function getNbSeats(): int{
        return $this->nbSeats;
    }
    public function getEnergy(): string{
        return $this->energy;
    }
    public function getEnergyLevel(): int{
        return $this->energyLevel;
    }


}