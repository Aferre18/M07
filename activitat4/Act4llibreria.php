<?php

function mirar_errores ($errores){
  $errores = trim($errores);
  $errores = stripslashes($errores);
  $errores = htmlspecialchars($errores);
  return $errores;
}

function mirar_email ($email){
  $email = mirar_email($email);
  if (!filter_var($email, "FILTER_VALIDATE_EMAIL")) {
    $emailErr = True;
      }else{
        $emailErr= False;
    }
    return $emailErr;
} 

function mirar_contra ($contra){
  $contra = mirar_contra($contra);
    if(preg_match("/^[a-zA-Z0-9.]+$/")){
      $contraErr = True;
    }else{
      $contraErr = False;
    }
    return $contraErr;
}

?>
