<?php
require_once "data/Car.php";

use Data\{Avanza};

$drive = new Avanza();

$drive->drive();
echo $drive->getTire() . PHP_EOL;
echo Avanza::DRIVER . PHP_EOL;
echo $drive->getBrand();
echo $drive->isMaintenance() . PHP_EOL;
