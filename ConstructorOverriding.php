<?php
require_once "data/ConstructorOverridig.php";

$constructoroverriding = new ConstructorOverriding("budi", "manager");
echo $constructoroverriding->name . PHP_EOL;
echo $constructoroverriding->title . PHP_EOL;

$constructoroverriding2 = new VicePresidentConstructorOverriding("joko");
echo $constructoroverriding2->name . PHP_EOL;
echo $constructoroverriding2->title . PHP_EOL;
