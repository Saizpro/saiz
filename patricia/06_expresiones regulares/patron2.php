<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>pattern</title> 
 
</head> 
<body> 
 

<?php
// Patron ^(\d{2,3})[\-\.]?(\d{7})
if(preg_match("/(^\d{2,3})[\-\.]?(\d{6,7})/", "985-487585", $resultados)){
	print "<p>El teléfono es: $resultados[0]</p>";
	print "<p>El prefijo es: $resultados[1]</p>";
	print "<p>El número de abonado es: $resultados[2]</p>";

}
 
 /*
Delimitadores: //, %%;
Paréntesis: () , para la hora de recuperar las cadenas del array;
(prefijo), [. o - ] y (el resto del numero)


^ que empiece con
\d que sean dígitos 
{2,3} se pueden poner 2 o 3 numeros en el prefijo o en el sufijo, dependera de los digitos delante y detras
? no es obligatorio poner lo que se encuentra delante, o sea, - o .
 */

//patron de telefono en españa

if(preg_match("/(^[6||7||8||9])[\-\.]?(\d{8})/", "585487585", $resultados)){
	print "<p>El teléfono es: $resultados[0]</p>";
	print "<p>El prefijo es: $resultados[1]</p>";
	print "<p>El número de abonado es: $resultados[2]</p>";

}else{
	echo "<p>Su número no corresponde a este lugar del mundo</p>";
}
?>
</body>
</html>