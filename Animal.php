<?php
class Animal {
    public $type;
    public $name;
    public $age;

    public function __destruct() {
        echo $this->name." the ".$this->type." is ".$this->age." years old!<br>";
    }
}