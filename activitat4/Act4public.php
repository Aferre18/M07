<?php
session_start();
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
    include "Act4llibreria.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_REQUEST["aceptar"])){
            if($_REQUEST["aceptar"] == "aceptar") { 
                setcookie("aceptado", 1, time() + 365 * 24 * 60 * 60);
                header("Location: http://dawjavi.insjoaquimmir.cat/aferre/M07/activitat4/Act4public.php");
            } else{
                header("Location: http://wwww.google.es");
            }
           
        
    } else {     
            if(($_REQUEST["usuario"]) == "aferrec@fp.insjoaquimmir.cat" && ($_REQUEST["contrasenya"]) == "albert1234"){
            $_SESSION['usuario'] = ($_REQUEST['usuario']);
            $_SESSION['contrasenya'] = ($_REQUEST['contrasenya']);
            header("Location: http://dawjavi.insjoaquimmir.cat/aferre/M07/activitat4/Act4privat.php");
    } else {
        
        echo "Tus datos son incorrectos";
    }
}
}
?>
    <?php
        if (isset($_COOKIE["aceptado"])){    
    ?>
 <form method="post">
        <label> Email: </label><input type="text" name="usuario"><br>
        <label> contrasenya: </label><input type="password" name="contrasenya"><br>
        <input type="submit" value="Go"><br>
    </form>
<?php
}else{
?>
    <form method="post">
        <label>La pagina usa cookies</label>
        <button type="submit" name="aceptar" value="aceptar">Si.</button>
        <button type="submit" naem="aceptar" value="rechazar">No.</button>
        <br>
        <br>
    </form> 
    <?php

    ?>  
<?php
}
?>
</body>
</html>