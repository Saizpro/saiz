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

$fechaHoy=explode("/","20/04/2015");
echo "Hoy es día ".$fechaHoy[0]." de ".$fechaHoy[1]." de ".$fechaHoy[2];

list($dia, $mes, $ano)= explode("/","20/04/2015");
echo "<p>Día: $dia</p>";
echo "<p>Mes: $mes</p>";
echo "<p>Año: $ano</p>";
?>
</body>
</html>