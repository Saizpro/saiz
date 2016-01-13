<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Nombre: ".$_POST["from"]."\n";
$mensaje.="Email: ".$_POST["return mail"]."\n";
$mensaje.="Comentarios: ".$_POST["message"];

//enviar el formulario
if(mail("mariajo.arnal.argon@gmail.com", "Formulario de contacto", $mensaje))
//si va bien, avisar de que todo bien
	 $info="Formulario enviado ok";
else
	$info="No enviado";
//si va mal, advertir
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href='http://fonts.googleapis.com/css?family=Julee' rel='stylesheet' type='text/css'>
<link href="reset.css" rel="stylesheet" type="text/css" />
<link href="main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="contenedor">
<h1>I love meeting new people </h1>
<h2>Want to work together or just chat about life? feel free to contact me using the form, or any of the social networks listed below.</h2>
  <p><?php echo $info;?></p>
 
  <h4>417-353-9343</h4>
  <p id="mail"><a href="#">jaradjohnson@gmail.com</a></p>
</div>
</body>
</html>
