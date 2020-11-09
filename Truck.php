<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private $storageCapacity;

    private $storage = 0;


    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setStorageCapacity($storageCapacity);
    }


    public function storageVerification(): string
    {
        if ($this->storage < $this->storageCapacity ){
           return "in filling";
        } else {
           return "full";
       }
    }


    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity= $storageCapacity;
    }


    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage= $storage;
    }
    
}