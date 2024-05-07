<?php

require('pet.php');

//instantiate pet object

$pet1 = new Pet();
//call a function
$pet1->eat();

$pet2 = new Dog();
$pet2->eat();

$pet2->sleep();
$pet2->talk();

echo "<pre>";
var_dump($pet1);
var_dump($pet2);
echo "</pre>";