<?php
require_once "data/Student.php";

$student = new Student();
$student->name = "bambang";
$student->id = "9";
$student->value = 5;

$student(15, "budi", 2.5, true, false);
