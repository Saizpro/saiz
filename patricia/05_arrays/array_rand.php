<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Agenda</title> 
 
</head> 
<body> 

<?php

$imagenes = array(
	array(
	"alt" => "Casa en monte",
	"ruta" => "Lighthouse.jpg",
	"vinculo"=>"google.com"
	),
	array(
	"alt" => "Tres pájaros bobos",
	"ruta" => "Penguins.jpg",
	"vinculo"=>"elpais.es"
	),
	array(
	"alt" => "Tulipanes amarillos",
	"ruta" => "Tulips.jpg",
	"vinculo"=>"heraldo.es"
	)
	);

$img= array_rand($imagenes);
print_r($img);
echo  "<a href=http://www.".$imagenes[$img]['vinculo']."><img src=img/".$imagenes[$img]['ruta']." alt=".$imagenes[$img]['alt']."/></a>";


?>


</body>
</html>