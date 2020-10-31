<?php
require_once __DIR__ . "/HighWay.php";

class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addVehicule(Vehicule $vehicule): self
    {
        $typeVehicule = get_class($vehicule);
        if($typeVehicule === "Bike" || $typeVehicule === "Skateboard")
            $this->currentVehicules[] = $vehicule;
        return $this;
    }
}