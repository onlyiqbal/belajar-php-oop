<?php
require_once "Helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;
// Mnegubah value static properties
MathHelper::$name = "Diubah";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(1, 2, 3, 4, 5);
echo "Result : " . $result;
