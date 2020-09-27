<?php
class Bicycle
{
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
     * @var bool
     */
    private $hasLuggageRack;

    public function __construct(string $color, bool $hasLuggageRack=false)
    {
        $this->nbWheels = 2;
        $this->currentSpeed = 0;
        $this->color = $color;
        $this->nbSeats = 1;
        $this->hasLuggageRack = $hasLuggageRack;
    }

    public function forward($speed): void{
        $this->currentSpeed += $speed;
    }

    public function brake(): void{
        $reducedSpeed = $this->currentSpeed - 10;
        $this->currentSpeed = $reducedSpeed <0? 0 : $reducedSpeed;
    }
}