<?php
class Giraffe extends Animal {
    public $type = "Giraffe";

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function necc() {
        echo "necc!<br>";
    }
}