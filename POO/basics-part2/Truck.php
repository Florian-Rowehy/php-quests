<?php
require_once ('./Vehicule.php');

class Truck extends Vehicle
{
    /**
     * @var int
     */
    private $stock;
    /**
     * @var string
     */
    private $energy;

    const MAXSTOCK = 30;

    public function __construct(string $color, int $nbSeats, string $energy){
        parent::__construct( $color,  $nbSeats);
        $this->energy = $energy;
        $this->stock = 0;
    }

    public function checkStockStatus(): string
    {
        return $this->stock === self::MAXSTOCK? "full" : "in filling";
    }

    public function loadCargo(int $cargo): int
    {
        $totalCargo = $this->stock + $cargo;
        if($totalCargo>self::MAXSTOCK){
            $this->stock= self::MAXSTOCK;
            return  $totalCargo - $this->stock;
        }
        $this->stock = $totalCargo;
        return 0;
    }

    public function unloadCargo(int $cargo): void
    {
        if($cargo >$this->stock ) return;
        $this->stock -= $cargo;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

}