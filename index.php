<?php
include 'Animal.php';
include 'Dog.php';
include 'Giraffe.php';
include 'Car.php';

$animals = [
    new Giraffe("Fred", 4),
    new Dog("Rufus", 6)
];

$myCar1 = new Car("Volvo", 1936);
$myCar2 = new Car("BMW", 568);

$myCar2->increaseMileage(240);

Car::makeNoise();


