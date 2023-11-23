<?php
include 'Animal.php';

$animals = [
    new Animal("Giraffe", "Fred", 4),
    new Animal("Dog", "Rufus", 6)
];

foreach ($animals as $animal) {
    echo $animal->name." the ".$animal->type." is ".$animal->age." years old!<br>";
}
