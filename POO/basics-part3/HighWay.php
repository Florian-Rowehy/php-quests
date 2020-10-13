<?php
abstract class HighWay {
    /**
     * @var array
     */
    protected $currentVehicules;
    /**
     * @var  int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;

    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        $this->currentVehicules = array();
    }

    protected function getCurrentVehicules(): array
    {
        return $this->currentVehicules;
    }
    protected function getNbLane(): int
    {
        return $this->nbLane;
    }
    protected function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }
    protected function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    protected function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
    abstract function addVehicule(Vehicule $vehicule): void;
}