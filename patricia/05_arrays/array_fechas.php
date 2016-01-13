<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Compra</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 



<?php
$diasSemana= array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$meses=array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Sepriembre", "Octubre", "Noviembre", "Diciembre");
$diaHoy= date("w");
$diaMes= date("d");
$mesAhora= date("n");
$ano= date("Y");
	echo "<h1>Hoy es ".$diasSemana[$diaHoy]." ".$diaMes." de ".$meses[date("n")]." de ".$ano."</h1>";
?>
</body>
</html>