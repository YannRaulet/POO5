<?php

require_once 'HighWay.php';


final class MotorWay extends Highway
{

    public function __construct () 
    {
        $this -> nbLane = 4;
        $this -> maxspeed = 130;
    }

    final public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
           parent:: setCurrentVehicles($vehicle);
        } 
    }

}
