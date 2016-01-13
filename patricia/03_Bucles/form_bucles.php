<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>HTML5 y CSS Formulario de contacto</title> 
</head> 
<body> 
<h1>Contacto</h1>

<form enctype="multipart/form-data" action="proceso_bucles.php" method="post">
<p><label for="numero">Para saber la tabla de multiplicar escoja un número:</label>
	<select type="text" id="numero" name="numero">
<?php
$i=1;

while($i<=10){
	echo <<<OPCION

<option value="$i"> $i </option>
	
OPCION;
$i++;
}	
?> 
</select></p>
<p>
<input type="radio" name="operacion" id="op1" value="suma">
<label for="op1">Suma</label>
<input type="radio" name="operacion" id="op2" value="multi">
<label for="op2">Multiplicacion</label>
</p>
<button class="submit" type="submit">Enviar mensaje</button> 

</form> 
</body> 
</html>