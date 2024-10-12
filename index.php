<?php

class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    public function fare() {
        return $this->seating_capacity() * 100;
    }

    public function seating_capacity() {
        return 4; // Default seating capacity for any vehicle
    }
}


?>