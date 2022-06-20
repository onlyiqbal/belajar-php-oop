<?php
require_once "data/Student.php";


$student1 = new Student();
$student1->name = "budi";
$student1->id = "10";
$student1->value = 5;
$student1->setSample("SAMPLE");

var_dump($student1);
