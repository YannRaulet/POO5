<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// Do not modify the rest of the file
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private $hasParkBrake;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy ($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    //POO 4 

    public function setHasParkBrake(bool $hasParkBrake) :void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start($hasParkBrake)
    {
        if($this->hasParkBrake == true) {
            throw new Exception("DOOH, j'ai encore laissé le frein à main. Marg va pas être contente !");
        }
        return $this;
    }

  
    public function switchOn() :bool
    {
        return true;
    }

    public function switchOff() :bool
    {
        return false;
    }

}