<?php


require_once 'Bicycle.php';
require_once 'Car.php';

require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';





$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay (); 
$residentialWay = new ResidentialWay();




$bike = new Bicycle("blue", 1);
$car = new Car("red", 2, "Diesel");
$vehicle = new Vehicle("yellow", 4);

$car->setHasParkBrake(true);


try{
    // Code to try
    $car ->start($car);
 } catch(Exception $hasParkBrake){
    // code to manage exception
    echo  $hasParkBrake->getMessage() . "<br>";
 } finally{
    // this code is always executed
    echo  'Ma voiture roule comme un donut';
}