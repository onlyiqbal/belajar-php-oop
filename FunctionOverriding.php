<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "iqbal";
$manager->sayHello("budi");

$vp = new VicePresident();
$vp->name = "eko";
$vp->sayHello("joko");
