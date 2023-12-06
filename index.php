<?php

//Including

include 'Dog.php';
include 'Cat.php';
include 'Giraffe.php';
include 'Car.php';
include 'Train.php';
include 'Tire.php';
include 'Math.php';

//Animals

$animals = [
    new Giraffe("Fred", 4),
    new Dog("Reksis", 6)
];
$animals[1]->woof();

//Kitties

$kitties = [
    new Cat("Minis", 2),
    new Cat("Brincis", 3)
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

//Math

$arr = [5, 10, 15];
echo Math::addTwo(1, 2)."<br>";
//res = 3
echo Math::factorial(3)."<br>";
//fac = 6
echo Math::sum($arr)."<br>";
//sum = 30
echo Math::average($arr)."<br>";
//avg = 10
echo Math::max($arr)."<br>";
//max = 15



