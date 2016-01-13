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

for($i=0;$i<count($diasSemana);$i++){
		echo "<p>$diasSemana[$i]</p>";
}
	
foreach($diasSemana as $valor){
	if($valor== "Miercoles"){
			echo $valor;
	}

}
$actual = current($diasSemana);

echo "<p>Actualmente estoy en:$actual</p>";

?>
</body>
</html>