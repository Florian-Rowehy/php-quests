<?php

class Speedometer
{
    const ratioKmMiles = 1.609;

    static public function convertMilesToKm(float $miles): float
    {
        return round($miles * self::ratioKmMiles, 2) ;
    }

    static public function convertKmToMiles(float $km): float
    {
        return round($km / self::ratioKmMiles, 2) ;
    }
}