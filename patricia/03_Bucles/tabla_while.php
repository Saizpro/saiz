<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Tabla con while</title> 
</head> 
<body> 
<table>
<caption>Sumar</caption>
<?php
$i=1;
while($i=5){
	echo <<<FILA
		<tr><th>parte $i</th><td>celda</td><td>celda2</td><td>celda3</td></tr>
FILA;
$i++;
}
?>
</table>

</form> 
</body> 
</html>