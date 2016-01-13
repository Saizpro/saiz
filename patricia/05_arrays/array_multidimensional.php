<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Compra</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 
<?php
$libros = array(array(
	"titulo" => "El Quijote",
	"autor" => "Cervantes"
	),
	array(
		"titulo"=> "esto es el titulo",
		"autor" => "esto es el autor"
		)
	);
echo "<pre>";
print_r ($libros);
echo "</pre>";
?>


</body>
</html>