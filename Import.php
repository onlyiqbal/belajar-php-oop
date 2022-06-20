<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\{Conflict as Conflict1, Dummy, Sample}; // Group use Declaration dan Alias
use Data\two\Conflict as Conflict2;
use Helper\Help;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$sample = new Sample();
$dummy = new Dummy();

$help = new Help();
$help->helpMe();
echo Help::APPLICATION . PHP_EOL;
echo $conflict1->conflict1();
echo $conflict2->conflict2();
echo $sample->sample();
echo $dummy->dummy();
