<?php
require_once __DIR__ . "/HighWay.php";

class PedestrianWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(1, 10);
    }

    public function addVehicule(Vehicule $vehicule): void
    {
        $typeVehicule = get_class($vehicule);
        if($typeVehicule === "Bike" || $typeVehicule === "Skateboard")
            $this->currentVehicules[] = $vehicule;
    }
}