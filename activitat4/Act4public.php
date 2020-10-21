
<?php
session_start();
include "Act4llibreria.php";
/*if (isset($_POST["aceptar"])){
    setcookie('cookie',7, time() + 365 * 24 * 60 * 60); 
} else if (isset($_POST["rechazar"])){
    header("Location: http://www.google.com"); 
}*/

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(($_REQUEST["usuario"]) == "aferrec@fp.insjoaquimmir.cat" && ($_REQUEST["contrasenya"]) == "albert1234"){
        $_SESSION['usuario'] = ($_REQUEST['usuario']);
        $_SESSION['contrasenya'] = ($_REQUEST['contrasenya']);
        header("Location: http://dawjavi.insjoaquimmir.cat/aferre/M07/activitat4/Act4privat.php");
    } else {
        
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
    <?php
        if (isset($_COOKIE["cookie"])){
            setcookie ('contador', 6, time() + 365 * 24 * 60 * 60);

        }
    ?>
    <form method="post">
        <p>cookies</p>
        <input type="submit" name="aceptar" value="aceptar">
        <input type="submit" naem="rechazar" value="rechazar">
        <br>
        <br>
    </form> 
    <?php

    ?>
    <form method="post">
        <label> Email: </label><input type="text" name="usuario"><br>
        <label> contrasenya: </label><input type="password" name="contrasenya"><br>
        <input type="submit" value="Go"><br>
    </form>

</body>
</html>