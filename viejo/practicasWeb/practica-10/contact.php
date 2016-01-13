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
<form name="form2" method="post" action="enviar-formulario.php">
  <div id="formularioNombre">
    <p class="flotarLeft"><label  for="nombre">Nombre</label>
      <input  type="text" name="nombre" id="nombre"></p>
	<p class="flotarRight"><label for="apellidos">apellidos</label>
    <input type="text" name="apellidos" id="apellidos"></p>
    </div>
   <div class="clear"></div>
 <p> <label  for="label">email</label>
 <input type="email" name="email2" id="label"></p>
 <p> <label for="asunto">asunto</label>
    <input type="text" name="asunto" id="asunto"> </p>
 <p>
   <label  for="mensaje">mensaje</label>
   <textarea name="mensaje" id="mensaje" cols="45" rows="5"></textarea> </p>
 <p>
       <label for="enviar">enviar</label>
       <input type="submit" name="enviar" id="enviar" value="Enviar"> </p>
    
</form>
</div>

</article>
</div>
<!-- aqui va el footer!-->
<?php include("pie.inc.php"); ?>
</body>
</html>
