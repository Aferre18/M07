
<?php

session_start();

echo $_SESSION["usuario"];

echo $_COOKIE["altrecookie"];

session_destroy();
session_unset();
$_SESSION = [];


echo "--->" .$_SESSION["usuario"]."<---";
?>