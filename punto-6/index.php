<?php
$name=" ";
$age=" ";

echo "Digita tu nombre: ";
$name=readline();

echo "Digita tu edad: ";
$age=readline();

if ( $age >= 18 ) {
  echo $name . " eres mayor de edad";
}
else {
  echo $name . " no eres mayor de edad";
}
?>