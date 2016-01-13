<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Count</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 



<?php
$diasSemana= array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$meses=array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Sepriembre", "Octubre", "Noviembre", "Diciembre");

$fechaHoy="20/04/2015";
echo "<p>Fecha antes: <strong>$fechaHoy </strong></p>";

list($dia, $mes, $ano)= explode("/", $fechaHoy);
$fecha= "$ano/ $mes/ $dia";
echo "<p>Fecha después: <strong>$fecha </strong></p>";
?>
</body>
</html>