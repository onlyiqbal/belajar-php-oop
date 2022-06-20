<?php
require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "jeki";
$cat->run();

$cat = new Dog();
$cat->name = "doggy";
$cat->run();
