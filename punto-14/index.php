<?php

include "./passwordCheck.php";

$user = "";
$password = "";

echo "Digite su usuario a registrar \n";
  $user = readline();

echo "Digite su contraseña a registrar \n";
  $password = readline();

if (hasSecurityLong($password)) {
    if (hasUpperLetter ($password)){ 
      if (hasNumber ($password))
      {
        echo "Su contraseña es segura \n";
      }
        
        else{
          echo "Su contraseña no tiene números \n";
        }  }
      
    else{
      echo "Su contraseña no tiene una letra mayuscula \n";
    }  }
  else{
  echo "Su contraseña no cumple con la longitud segura \n";
}
?>
