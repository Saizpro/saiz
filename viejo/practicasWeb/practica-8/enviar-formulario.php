<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Nombre: ".$_POST["name"]."\n";
$mensaje.="Email: ".$_POST["mail"]."\n";
$mensaje.="Comentarios: ".$_POST["mind"];

//enviar el formulario
if(mail("mariajo.arnal.argon@gmail.com", "Formulario de contacto", $mensaje))
//si va bien, avisar de que todo bien
	echo "Formulario enviado";
else
	echo "No enviado";

//si va mal, advertir
?>