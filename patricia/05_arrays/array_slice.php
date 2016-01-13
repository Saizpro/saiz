<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Agenda</title> 
 
</head> 
<body> 


<?php

$letras = array("a", "b", "c","d","e", "f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
	
if(isset($_GET["inicio"])){
	$inicio=$_GET["inicio"];
}else{
	$inicio=0;
}


$mostrar=array_slice($letras, $inicio, 5);


echo count($letras)." resultados";
echo "<pre>";
print_r($mostrar);
echo "</pre>";

if($inicio>0){
    $inicio=$inicio-5;
    echo <<<ANTERIOR
<a href="array_slice.php?inicio=$inicio">Anterior</a>
ANTERIOR;
}
if($_GET["inicio"]<count($letras)-5){
    $inicio=$_GET["inicio"]+5;
    echo <<<SIGUIENTE
<a href="array_slice.php?inicio=$inicio">Siguiente</a>
SIGUIENTE;
}

?>



</body>
</html>