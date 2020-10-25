<?php
require_once __DIR__ . "/HighWay.php";

class ResidentialWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(2, 50);
    }

    public function addVehicule(Vehicule $vehicule): void
    {
        $this->currentVehicules[] = $vehicule;
    }
}