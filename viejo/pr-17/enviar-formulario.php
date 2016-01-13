<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Nombre: ".$_POST["nombre"]."\n";
$mensaje.="Email: ".$_POST["email"]."\n";
$mensaje.="Comentarios: ".$_POST["mensaje"];

//enviar el formulario
if(mail("javier24horas@hotmail.com", "Formulario de contacto", $mensaje))
//si va bien, avisar de que todo bien
	echo "Formulario enviado";
//si va mal, advertir
else
	echo "No enviado";
?>