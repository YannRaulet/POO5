<?php

require_once 'HighWay.php';


final class PedestrianWay extends Highway
{
    public function __construct () 

    {
        $this -> nbLane = 1;
        $this -> maxspeed = 10;
    }
    final public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
           parent:: setCurrentVehicles($vehicle);
        } 
    }
}