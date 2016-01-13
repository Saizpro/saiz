<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="UTF-8">
<title>Expresión Regular Contraseña</title>

</head>

<body>
<?php
/*Al menos 7 caracteres
Al menos 1 mayúsculas
Al menos 1 número
Al menos un carácter especial de entre: @, - , ?
*/
$password="123Asss45678@";
if(preg_match("/.{7,}/", $password)){
	echo "<p>Al menos 7</p>";
}
if(preg_match("/[A-Z].{7,}/", $password)){
	echo "<p>Al menos 7 y una mayúscula</p>";
}
if(preg_match("/(?=.*\d)(?=.*[A-Z])(.{7,})/", $password)){
	echo "<p>Al menos 7 y una mayúscula y un número</p>";
}
if(preg_match("/(?=.*\d)(?=.*[A-Z])(?=.*(\@|\-|\?))(.{7,})/", $password)){
	echo "<p>Al menos 7 y una mayúscula y un número y un caracter especial (@, - o ?)</p>";
}
?>
</body>

</html>