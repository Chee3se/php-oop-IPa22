<?php
class Dog extends Animal {
    public $type = "Dog";

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function bark() {
        echo "woof!<br>";
    }
}