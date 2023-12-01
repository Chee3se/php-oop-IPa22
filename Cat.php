<?php
include_once 'Animal.php';
class Cat extends Animal {
    public $type = "Cat";

    static function woof() {
        echo "meow!<br>";
    }
}