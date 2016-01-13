<?php if(isset($_POST["numero"])){ // para comprobar si vienes del formulario
?>
<!DOCTYPE html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>prueba bucles 1</title> 
</head> 
<body> 
<h1>Datos introducidos</h1>
<table>
<?php 
$tipo=$_POST["operacion"]; //para coger la variable del tipo de proceso, suma o multiplicacion
$desp=$_POST["numero"]; //para coger la variable numero del form
$h=1;   //variable contador

while($h<=10){   //este bucle se utiliza para hacer la suma y mult con las variables del form
 if ($tipo == "suma"){
	$resultado=$desp + $h;
	$simbolo="+";
}else{
	$resultado=$desp * $h;
	$simbolo="*";
}

 echo <<<TABLA
 	<tr><th> $desp </th><td>$simbolo</td><td> $h </td><td> = $resultado</td></tr>
TABLA;
$h++;
}
?>
</table>
</body>
</html>
<?
}else{
	header("form_bucles.php"); //redireccion para cuando no se venga del form
}
?>