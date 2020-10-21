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
?> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cat" lang="cat"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Provant les cookies</title> 
</head> 
<body> 
Provant les cookies...<br>
<p> 
<?php 
	echo $missatge; 
?> 
</p> 
</body> 
</html>