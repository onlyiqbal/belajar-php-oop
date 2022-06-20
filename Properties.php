<?php
require_once "data/Person.php";

$person = new Person();
$person->name = "budi";
$person->address = "cilacap";
$person->country = "indonesia";

var_dump($person);
echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;
