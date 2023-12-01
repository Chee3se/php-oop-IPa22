<?php
include_once 'Animal.php';
class Dog extends Animal {
    public $type = "Dog";

    static function woof() {
        echo "woof!<br>";
    }
}