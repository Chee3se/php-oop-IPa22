<?php
class Train {
    public $brand;
    public $trackGauge;
    private $mileage;

    public function __construct($brand, $trackGauge, $mileage) {
        $this->brand = $brand;
        $this->trackGauge = $trackGauge;
        $this->mileage = $mileage;
    }

    public function __destruct() {
        echo $this->brand." is dead at mileage ".$this->mileage;
    }

    public function increaseMileage($amount) {
        $this->mileage += $amount;
    }

    static function makeNoise() {
        echo "Choo, Choo!";
    }
}