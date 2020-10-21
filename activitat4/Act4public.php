
<?php

if(isset($_COOKIE['contador']))
{ 
  // Caduca en un any
  setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
  $missatge = 'Número de visites: ' . $_COOKIE['contador']; 
} 
else 
{ 
  // Caduca en un any 
  setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
  $missatge = 'Benvingut a la nostra pàgina web'; 
} 

session_start();
include "Act4llibreria.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(mirar_email($_REQUEST["usuario"]) == "aferrec@fp.insjoaquimmir.cat" && mirar_contra($_REQUEST["contrasenya"]) == "albert1234"){
        $_SESSION['usuario'] = mirar_errores($_REQUEST['usuario']);
        $_SESSION['contrasenya'] = mirar_errores($_REQUEST['contrasenya']);
        header("Location: http://dawjavi.insjoaquimmir.cat/aferre/M07/activitat4/Act4privat.php");
    } else {
        echo email ($_REQUEST["usuario"]);
        echo email ($_REQUEST["contrasenya"]);
        echo "Tus datos son incorrectos";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label> Email: </label><input type="text" name="usuario"><br>
        <label> contrasenya: </label><input type="password" name="contrasenya"><br>
        <input type="submit" value="Go"><br>
    </form>
</body>
</html>