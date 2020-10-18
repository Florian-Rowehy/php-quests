<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    function __construct(string $color)
    {
        parent::__construct($color, 1);
    }

    public function switchOn(): bool
    {
        return $this->currentSpeed > 10;
    }

    public function switchOff(): bool
    {
        return false;
    }
}