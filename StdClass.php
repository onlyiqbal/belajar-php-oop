<?php
require_once "data/ConstractorDanDestructor.php";

$array = [
    "firstName" => "iqbal",
    "middleName" => "maualan",
    "lastName" => "menggala",
];

$object = (object) $array;
var_dump($object);
echo "First Name : $object->firstName" . PHP_EOL;
echo "Middle Name : $object->middleName" . PHP_EOL;
echo "Last Name : $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

$constructorDandesctructor = new ConstructorDanDestructor("iqbal", "bekasi");
$arrayConstrucDanDesctructor = (array) $constructorDandesctructor;
var_dump($arrayConstrucDanDesctructor);
