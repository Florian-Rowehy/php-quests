<?php
require_once ("./HighWay.php");

class ResidentialWay extends HighWay {

    public $currentVehicules;

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(2, 50);
        $this->currentVehicules = array();
    }

    public function addVehicule(Vehicule $vehicule): void
    {
        $this->currentVehicules[] = $vehicule;
    }
}