<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Nombre: ".$_POST["name"]."\n";
$mensaje="Sitio web: ".$_POST["url"]."\n";
$mensaje.="Email: ".$_POST["email"]."\n";
$mensaje.="Budget: ".$_POST["budget"]."\n";
$mensaje.="Mensaje: ".$_POST["message"];

//enviar el formulario
if(mail("mariajo.arnal.argon@gmail.com", "Formulario de contacto", $mensaje))
	echo "El formulario nos ha llegado correctamente.";
else
	echo "El formulario no se ha enviado";
?>
