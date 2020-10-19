<?php

class Personne
{
    private $name;
    private $surname;
    private $address;
    private $birthdate;

    public function __construct(string $name, string $surname, string $address, string $birthdate)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->birthdate = $birthdate;
    }

    public function getFullName(): string
    {
        return $this->name .' '. $this->surname;
    }

    public function setAddress(string $newAddress): Personne
    {
        $this->address = $newAddress;
        return $this;
    }

    public function getAge(): int
    {
        $yearNow = date('Y');
        $birthYear =  date('Y', strtotime($this->birthdate));
        return $yearNow - $birthYear;
    }
}