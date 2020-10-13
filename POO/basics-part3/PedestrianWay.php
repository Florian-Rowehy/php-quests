<?php
require_once ("./HighWay.php");

class PedestrianWay extends HighWay {

    public $currentVehicules;

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(1, 10);
        $this->currentVehicules = array();
    }

    public function addVehicule(Vehicule $vehicule): void
    {
        $typeVehicule = get_class($vehicule);
        if($typeVehicule === "Bike" || $typeVehicule === "Skateboard") $this->currentVehicules[] = $vehicule;
    }
}