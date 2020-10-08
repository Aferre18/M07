<?php
echo "Has ecrito esto en text: $_REQUEST[mytext].<br>";
echo "Has seleccionado la:  $_REQUEST[myradio].<br>";

if(isset ($_REQUEST["mycheckbox"])){
    foreach ($_REQUEST["mycheckbox"] as $respuesta){
    echo "Has selecionado la checkbox: $respuesta <br>";
    }
}

echo "Has seleccionado el grupo $_REQUEST[myselect].<br>";
echo "Has escrito en el recuadro: $_REQUEST[mytextarea].<br>";
?>