<?php
require_once "data/Person.php";

$iqbal = new Person();
$iqbal->name = "iqbal";
$iqbal->sayHello("budi");
$iqbal->greet("japra");

$joko = new Person();
$joko->name = "eko";
$joko->sayHello(null);
$joko->info();
