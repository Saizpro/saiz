<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=UTF-8" />
<link rel="stylesheet" href="styles.css">
<title> Curso de php 2015 By Adrián Arbizu Donoso </title>
</head>
<body>
<?php
//incluimos el archivo de funciones
include ("funciones.php");

//mostramos el formulario con la funcion mostrarform
mostrarform();

//obtenemos las variables del formulario
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$direccion=$_POST["direccion"];
$provincia=$_POST["provincia"];
$telefono=$_POST["telefono"];
//variables de control
$flagnombre=0;
$flagemail=0;
$flagdireccion=0;
$flagprovincia=0;
$flagtelefono=0;
$enviar=$_POST["enviar"];

//comprobamos si existe el boton de enviar, con lo que el usuario a introducido datos
if(isset($enviar))
{
//si el usuario introdujo datos los validamos $resultado devolvera 1 si los datos introducidos son validos
$resultado=validar($nombre, $email, $direccion, $provincia, $telefono);
//si los datos eran validos mostramos los datos introducidos
	if($resultado==1)
	{
	mostrardatos($nombre, $email, $direccion, $provincia, $telefono);
	}
}
?>
</body>
</html>