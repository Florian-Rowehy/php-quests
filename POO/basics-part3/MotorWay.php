<?php
require_once ("./HighWay.php");

class MotorWay extends HighWay {

    public $currentVehicules;

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(4, 130);
        $this->currentVehicules = array();
    }

    public function addVehicule(Vehicule $vehicule): void
    {
        $typeVehicule = get_class($vehicule);
        if($typeVehicule === "Car") $this->currentVehicules[] = $vehicule;
    }
}