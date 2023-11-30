<?php
function hasSecurityLong ($pass){
    return strlen($pass) >= 8;
    }
   
  
  function hasUpperLetter($pass){
    $passArray = str_split($pass);
  
    foreach ($passArray as $letter){
      if (ctype_upper($letter)){
        return true;
      }
    }
    return false;
  }
  
  function hasNumber($pass) {
    $passArray = str_split($pass);
  
      foreach ($passArray as $letter){
        if (is_numeric($letter)){
          return true;
        }
      }
      return false;
  }
  ?>