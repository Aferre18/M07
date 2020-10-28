
<?php

session_start();
if (empty($_SESSION["usuario"])){
    header("Location: http://dawjavi.insjoaquimmir.cat/aferre/M07/activitat5/Act5public.php");
    exit();
}
echo "Usuario correcto" 
?>

<a href="http://dawjavi.insjoaquimmir.cat/aferre/M07/activitat5/Act5logout.php"> Cierra session</a>