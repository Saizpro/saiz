<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Fecha de entrada: ".$_POST["from"]."\n";
$mensaje="Fecha de salida: ".$_POST["to"]."\n";

//enviar el formulario
if(mail("mariajo.arnal.argon@gmail.com", "Reserva de habitacion", $mensaje))
	echo "Reserva OK";
else
	echo "No se ha podido realizar la reserva";
?>

