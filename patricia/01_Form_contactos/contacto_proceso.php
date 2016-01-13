<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>HTML5 y CSS Formulario de contacto</title> 
</head> 
<body> 
<h1>Datos introducidos</h1>
<?php 
echo <<<DATOS

<p><strong>Nombre:</strong>$_POST[name]</p>
<p><strong>Email:</strong>$_POST[email]</p>
<p><strong>Comentarios:</strong>$_POST[comentarios]</p>
DATOS;
echo $mensaje;
//dara un error si se hace desde localhost
mail("pgh_87@hotmail.com", "Contacto desde web",$mensaje);
?>

</body>
</html>