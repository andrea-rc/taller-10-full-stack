<?php
$firstNumber=0;
$secondNumber=0;
$operation =" ";
$result = 0;

echo "Digite el primer número: ";
$firstNumber=readline();
echo "Digite el segundo número: ";
$secondNumber=readline();

echo "Digite el tipo de operación que quiere hacer:\n S suma \n R resta \n M multiplicación\n D división \n";
$operation = readline();

switch ($operation){
  case "S":
  $result=$firstNumber+$secondNumber;
  echo "El resultado de la suma es: ". $result;
  break;
  case "R":
  $result=$firstNumber-$secondNumber;
  echo "El resultado de la resta es: ".$result;
  break;
  case "M":
  $result=$firstNumber*$secondNumber;
  echo "El resultado de la multiplicación es: ".$result;
  break;
  case "D":
  $result=$firstNumber/$secondNumber;
  echo "El resultado de la división es: ".$result;
  break;
  default:
  echo "La operación digitada no es valida";
      }
  ?>