
<?php

session_start();
if (empty($_SESSION["usuario"])){
    header("Location: http://dawjavi.insjoaquimmir.cat/aferre/M07/activitat4/Act4public.php");
    exit();
}
echo "Usuario correcto" 
?>

<a href="http://dawjavi.insjoaquimmir.cat/aferre/M07/activitat4/Act4logout.php"> Cierra session</a>