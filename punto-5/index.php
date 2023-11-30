<?php

const BOLETA = 25000;
$personas = 0;
$afiliación = " ";

echo "Digite su tipo de afiliación 'A' o 'B'' \n";
$afiliación = readline();

echo "Digite el número de personas que ingresarán a la bolera \n";
$personas = readline();

$total = BOLETA * $personas;

if ($afiliación == "A" || $afiliación == "B") 
  {
  $total = $total * 0.7;  
 }

  echo "El total a pagar es: " . $total;
  ?>