<?php
abstract class Animal {
    public $type;
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct() {
        echo $this->name." the ".$this->type." is ".$this->age." years old!<br>";
    }

    public function birthday() {
        $this->age++;
    }

    abstract static function woof();
}