<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>pattern</title> 
 
</head> 
<body> 


 <form action="#" method="post" >

<p><label for="cont">Escriba su contraseña:</label> <input type="text" id="cont" name="cont"/>  </p>
<button class="submit" type="submit">Validar</button> 


</form> 

<?php

$cont=$_POST["cont"];


if(!preg_match("/.{7,}/", $cont)){
	$error[0]="Al menos 7 elementos";
}
if(!preg_match("/[A-Z]/", $cont)){
	$error[1]="Al menos 1 mayuscula";
}
if(!preg_match("/[0-9]/", $cont)){
	$error[2]="Al menos 1 numero";
}
if(!preg_match("/\@|\-|\?/", $cont)){
	$error[3]="Al menos @, - o /";
}

if(is_array($error)){
	echo "Revisa tu contraseña";
	foreach($error as $valor){
		echo $valor;
	}
}else{
	echo "contraseña correcta";
}

?>
</body>
</html>