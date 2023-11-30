<?php

$number = 0;
$operation = 0;

echo "Digite el número que quiere multplicar: ";
$number = readline();

while ($operation <= 30) {
  echo $number . " x " . $operation . " = " . ($number * $operation) . "\n";
  $operation++;
}
?>