<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Agenda</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 
<?php
$usuario=$_POST["usuario"];
$mail=$_POST["mail"];
$telefono=$_POST["telefono"];
$nuevoUsuario= array(
	"nombre"=>$usuario, 
	"mail"=> $mail, 
	"telefono"=> $telefono);



$amigos = array(
	array(
	"nombre" => "Don Quijote",
	"mail" => "donquijotedelamancha@gmail.com",
	"telefono"=>"123456789"
	),
	array(
	"nombre"=> "Sancho Panza",
	"mail" => "sanchopanzadelamancha",
	"telefono"=>"987654321"
	)
	);

array_push($amigos, $nuevoUsuario);

echo "<pre>";
print_r ($amigos);
echo "</pre>";

?>


</body>
</html>