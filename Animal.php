<?php

class Animal {
    public $type;
    public $name;
    public $age;

    public function __construct($type, $name, $age) {
        $this->type = $type;
        $this->name = $name;
        $this->age = $age;
    }
}