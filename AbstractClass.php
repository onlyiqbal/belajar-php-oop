<?php
require_once "data/Location.php";

use Data\{Location, City, Provice, Country};

// $location = new Location(); ERROR

// Hanya boleh mengakses clasa child nya saja
$city = new City();
$city->name = "Budi";
echo $city->name . PHP_EOL;

$province = new Provice();
$province->name = "Budi";
echo $province->name . PHP_EOL;

$country = new Country();
$country->name = "Budi";
echo $country->name . PHP_EOL;
