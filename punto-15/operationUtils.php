<?php

function showMenu (){
    echo "Seleccione la operación que desea realizar: \n";
    echo "Suma --> + \n";
    echo "Resta --> - \n";
    echo "Multiplicación --> x \n";
    echo "División --> / \n";
    
    return readline();
  }
  
  function operate ($x, $y, $option){
    switch ($option){
      case "+":
        return add($x, $y);
      case "-":
        return sub($x, $y);
      case "x":
        return dot($x, $y);
      case "/":
        return split($x, $y);
      default: 
        echo "Opción inválida \n";
        return 0;
    }
  }
  
  function add ($x, $y){
    return $x + $y;
      }
  
  function sub ($x, $y){
    return $x - $y;
      }
  
  function dot ($x, $y){
    return $x * $y;
      }
  
  function split ($x, $y){
    return $x / $y;
      }
  ?>