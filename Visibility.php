<?php
require_once "data/Product.php";

$product = new Product("Banana", 15000);
$dummyprduct = new ProductDummy("Apple", 20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;
echo $dummyprduct->info() . PHP_EOL;
