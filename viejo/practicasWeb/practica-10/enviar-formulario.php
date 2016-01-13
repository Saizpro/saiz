<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Nombre: ".$_POST["nombre"]."\n";
$mensaje="Apellidos: ".$_POST["apellidos"]."\n";
$mensaje.="Email: ".$_POST["email"]."\n";
$mensaje.="Asunto: ".$_POST["asunto"]."\n";
$mensaje.="mensaje: ".$_POST["mensaje"];

//enviar el formulario
if(mail("mariajo.arnal.argon@gmail.com", "Formulario de contacto", $mensaje))
	$info="Formulario enviado ok";
else
	$info="No enviado";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact-10-Moment</title>
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php include("cabecera.inc.php"); ?>
<!-- aqui va el header !-->
<div id="contenedor">
<article>

<div id="formulario">
	 <p><?php echo $info;?></p>
</div>
<p>&nbsp;</p>
</article>
</div>
<!-- aqui va el footer!-->
<?php include("pie.inc.php"); ?>
</body>
</html>