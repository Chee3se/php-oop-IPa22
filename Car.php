<?php
class Car {
    public $brand;
    private $mileage;

    public function __construct($brand, $mileage) {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    public function __destruct() {
        echo $this->brand." is dead at mileage ".$this->mileage;
    }

    public function increaseMileage($amount) {
        $this->mileage += $amount;
    }
}