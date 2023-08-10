<?php

$dateTime = new DateTime();
$dateTime->setDate(2020, 6, 9);
$dateTime->setTime(9, 6, 9, 1);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMoth = new DateInterval("P1M");
$minusOneMoth->invert = 1;
$dateTime->add($minusOneMoth);

var_dump($dateTime);

// $now = new DateTime();
// var_dump($now);
// $now->setTimezone(new DateTimeZone("Asia/Jakarta"));
// var_dump($now);

$string = $dateTime->format("Y:m:d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 09:05:02", new DateTimeZone("Asia/Jakarta"));

if ($date) {
  var_dump($date) . PHP_EOL;
} else {
  echo "Format Salah" . PHP_EOL;
}