<?php
require_once "data/Food.php";
require_once "data/AnimalShalter.php";
require_once "data/Animal.php";

$catShalter = new \Data\CatShalter();
$cat = $catShalter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

$dogShalter = new \Data\DogShalter();
$dog = $dogShalter->adopt("jeki");
$dog->eat(new \Data\Food());
