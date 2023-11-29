<?php
include 'Animal.php';
include 'Dog.php';
include 'Giraffe.php';
include 'Car.php';
include 'Train.php';
include 'Tire.php';

$animals = [
    new Giraffe("Fred", 4),
    new Dog("Rufus", 6)
];

$myCar1 = new Car("Volvo", 1936);
$myCar2 = new Car("BMW", 568);

$myCar2->increaseMileage(240);

Car::makeNoise();

$myTrain1 = new Train("Caltrain", 900, 5482);
$myTrain2 = new Train("CN", 1000, 142);

$myTrain1->increaseMileage(240);

Train::makeNoise();

$myTire1 = new Tire("Goodyear", "Winter", 69);

$myTire1->brand = "nvm";
$myTire1->type = "Summer";


