<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("budi");
var_dump($company);

$company->programmer = new BackendProgrammer("budi");
var_dump($company);

$company->programmer = new FrontendProgrammer("budi");
var_dump($company);

//Function Argument Polymorphism
sayHelloProgrammer(new Programmer("budi"));
sayHelloProgrammer(new BackendProgrammer("budi"));
sayHelloProgrammer(new FrontendProgrammer("budi"));
