
<?php

session_start();

/*if(isset($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION['usuario'] == $_REQUEST['usuario']
    $_SESSION['contrasenya'] == $_REQUEST['contrasenya']
}
*/
/*$_SESSION["usuario"]

setcookie('nomdelacookie', "string hola hola", time() + 365 * 24 * 60 * 60);
setcookie('altrecookie', sha1(md5("calamar")), time() + 365 * 24 * 60 * 60);


echo $_SESSION["username"];*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from method="post">
        <label> Email: </label><input type="text" name="usuario"><br>
        <label> contrasenya: </label><input type="text" name="contrasenya"><br>
        <button id="go" type="submit">go</button><br>
</body>
</html>