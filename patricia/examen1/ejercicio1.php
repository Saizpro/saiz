<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Ejercicio 1</title> 
</head> 
<body> 
<h1>Tabla que suma</h1>
<table border="1">
<?php
$i=1;

while($i<=10){
	$resultado= $resultado+$i;
	echo <<<FILA
	<tr><td></td><th> $i </th></tr> 
FILA;
$i++;

}
echo "<tr><td>resultado</td><th> $resultado </th></tr>"
?>

</table>

</body> 
</html>