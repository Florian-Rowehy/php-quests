<?php
require_once __DIR__ . "/HighWay.php";

class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicule(Vehicule $vehicule): self
    {
        $typeVehicule = get_class($vehicule);
        if($typeVehicule === "Car") $this->currentVehicules[] = $vehicule;
        return $this;
    }
}