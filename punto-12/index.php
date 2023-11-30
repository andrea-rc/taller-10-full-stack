<?php
$num = 0;
  
echo "Digite el número a multplicar: ";
$num = readline();

for ( $i = 0; $i <= 30; $i++ ) {
  echo $num." x ".$i." = ".$num*$i."\n";
}
?>