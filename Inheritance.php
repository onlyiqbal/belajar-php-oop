<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "budi";
$manager->sayHello("joko");

$vp = new Manager();
$vp->name = "eko";
$vp->sayHello("japra");
