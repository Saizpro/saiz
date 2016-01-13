<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Tabla con while</title> 
</head> 
<body> 
<table border="1">
<caption>Sumar</caption>
<?php
$i=1;

while($i<=10){
	$resultado=$i*8;
	echo <<<FILA
		<tr><th> $i </th><td> x8 </td><td> = $resultado</td></tr>
FILA;

$i++;
}
?>
</table>

</form> 
</body> 
</html>