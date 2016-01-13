<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Compra</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 

<form action="#" method="post">
<p><label>Aficiones:</label></p>
<p><label for="leer">Leer</label><input type="checkbox" name="aficiones[]" id="leer" value="leer"/></p>
<p><label for="internet">Internet</label><input type="checkbox" name="aficiones[]" id="internet" value="internet"/></p>
<p><label for="pasear">Pasear</label><input type="checkbox" name="aficiones[]" id="pasear" value="pasear"/></p>
<p><label for="salir">Salir</label><input type="checkbox" name="aficiones[]" id="salir" value="salir"/></p>
<button class="submit" type="submit">Enviar mensaje</button> 

<?php
$aficiones= $_POST["aficiones"];

if(is_array($aficiones)){
	echo "<p> Tus aficiones son: ";
	foreach ($aficiones as $valor){
		$mensaje.= "$valor, ";
	}
	echo substr($mensaje,0,-2).".";
}

?>
</body>
</html>