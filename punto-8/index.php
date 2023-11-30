<?php

const BOLETA = 25000;
$personas = 0;
$afiliación = " ";

echo "Digite su tipo de afiliación 'A', 'B', 'C' o 'D' \n";
$afiliación = strtoupper (readline());

echo "Digite el número de personas que ingresarán a la bolera \n";
$personas = readline();

$total = BOLETA * $personas;

switch ($afiliación){
case "A":
  $total = $total * 0.7;
break;
case "B":
  $total = $total * 0.75;
break;
case "C":
  $total = $total * 0.90;
break;
case "D":
  $total = $total * 0.95;
break;
default: 
  echo "Usted no cuenta con ninguna afiliación para descuento \n";

break;
    }
echo "El total a pagar es: " . $total;
?>