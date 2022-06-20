<?php
require_once "data/Student.php";

$student = new Student();
$student->name = "bambang";
$student->id = "iq";
$student->value = 5;
$student->setSample("SAMPLE");
var_dump($student);

$student2 = clone $student;
var_dump($student2);
