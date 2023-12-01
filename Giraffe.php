<?php
include_once 'Animal.php';
class Giraffe extends Animal {
    public $type = "Giraffe";

    static function woof() {
        echo "necc!<br>";
    }
}