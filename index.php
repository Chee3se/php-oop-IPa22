<?php
include 'Animal.php';

$animal = new Animal("Giraffe", "Fred", 4);
echo $animal->name." the ".$animal->type." is ".$animal->age." years old!";
