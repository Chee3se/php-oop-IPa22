<?php

//Including

include 'Animal.php';
include 'Dog.php';
include 'Giraffe.php';
include 'Car.php';
include 'Train.php';
include 'Tire.php';

//Animals

$animals = [
    new Giraffe("Fred", 4),
    new Dog("Rufus", 6)
];

//Car

$myCar1 = new Car("Volvo", 1936);
$myCar2 = new Car("BMW", 568);

$myCar2->increaseMileage(240);

Car::makeNoise();

//Train

$myTrain1 = new Train("Caltrain", 900, 5482);
$myTrain2 = new Train("CN", 1000, 142);

$myTrain1->increaseMileage(240);

Train::makeNoise();

//Tire

$myTire1 = new Tire(30, "Winter", 69);

echo $myTire1->size."<br>";
echo $myTire1->type."<br>";


