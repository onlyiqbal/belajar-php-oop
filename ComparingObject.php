<?php

require_once "data/Student.php";

$student = new Student();
$student->name = "bambang";
$student->id = "9";
$student->value = 5;

$student1 = new Student();
$student1->name = "bambang";
$student1->id = "9";
$student1->value = 5;

var_dump($student == $student1);
var_dump($student === $student1);
