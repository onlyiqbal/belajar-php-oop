<?php

use Helper\coba;
use Helper\Help;

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new \Data\one\Conflict();
$conflict2 = new \Data\two\Conflict();
$help = new \Helper\Help();

$help->helpMe();
echo Help::APPLICATION;
// echo Helper\APPLICATION . PHP_EOL;
// Helper\helpMe();
