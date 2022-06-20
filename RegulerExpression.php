<?php
$matches = [];
$result = preg_match_all("/iqb|ana|gala/i", "iqbal maulana menggala", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat !");
var_dump($result);

$result = preg_split("/[\s,-]/", "iqbal maulana menggala,programmer,zaman-now");
var_dump($result);
