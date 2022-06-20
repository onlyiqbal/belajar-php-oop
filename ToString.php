<?php
require_once "data/Student.php";

$student = new Student();
$student->name = "bambang";
$student->id = "iq";
$student->value = 5;
// Langsung meng-echo kan atau menampilkan kan object $student
echo $student . PHP_EOL;

// Diubah ke type string
$string = (string) $student;
echo $string . PHP_EOL;

// Atau bisa seperti ini
echo $student . PHP_EOL;
