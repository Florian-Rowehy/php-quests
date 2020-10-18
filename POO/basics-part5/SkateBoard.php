<?php
require_once __DIR__ . '/Vehicle.php';

class SkateBoard extends Vehicle
{
    function __construct(string $color)
    {
        parent::__construct($color, 0);
    }
}