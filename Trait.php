<?php
require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Joko");
$person->hello("Budi");

$person->name = "iqbal";
echo $person->name . PHP_EOL;

$person->run();
