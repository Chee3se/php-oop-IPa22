<?php
include_once 'Vehicle.php';
class Car extends Vehicle {
    static $describe = "A car, or an automobile, is a motor vehicle with wheels.";

    static function makeNoise() {
        echo "Beep, Beep!<br>";
    }
}