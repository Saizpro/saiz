<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=UTF-8" />
<link rel="stylesheet" href="styles.css">
<title> Curso de php 2015 By Adrián Arbizu Donoso </title>
</head>
<body>
<?php
//FUNCION DE SUMAR INFINITAMENTE DE 1 EN 1
function suma() {
static $num=0;
$i=0;
	while($i<5)
	{
	$num=$num+1;
	echo "<p>$num</p>";
	}
suma();	
}
//INICIAMOS LA FUNCION
suma();

?>
</body>
</html>