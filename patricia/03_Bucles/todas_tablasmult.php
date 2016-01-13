<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Tabla con while</title> 
</head> 
<body> 
<?php
$h=1;
while($h<=10){ //Este bucle empieza para repetir todas desde tabla del 1 hasta tabla del 10
echo <<<TABLA
<table border="1">
<caption>Tabla del $h</caption>
TABLA;

$i=0;
while($i<=10){  //Este bucle lo utilizamos para que saque todas las filas multiplicando del 1 al 10
	$resultado=$i*$h;
	echo <<<FILA
		<tr><th> $i </th><td> x $h </td><td> = $resultado</td></tr>
FILA;
$i++;
}
echo <<<TAB2
</table>
TAB2;
$h++;
}
?>
 
</body> 
</html>