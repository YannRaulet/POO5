<?php

require_once 'HighWay.php';


final class ResidentialWay extends Highway 
{
    
    public function __construct () 

    {
        $this -> nbLane = 2;
        $this -> maxspeed = 50;
    }

    final public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
           parent:: setCurrentVehicles($vehicle);
        }
    }
}

