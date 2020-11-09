<?php

abstract class HighWay
{
    protected $currentVehicles =[];
    protected $nbLane;
    protected $maxSpeed;


    abstract public function addVehicle(Vehicle $vehicle);

    //curentVehicle
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(Vehicle $currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    //nbLane
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    //maxSpeed
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}


