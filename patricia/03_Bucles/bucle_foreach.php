<!DOCTYPE html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Utilizacion de for</title> 
</head> 
<body> 
<h1>Introduzca dos números:</h1>

<form enctype="multipart/form-data" action="#" method="post">
<p><label for="num1">Número 1:</label>
	<input type="text" id="num1" name="num1"></p>
<p><label for="num1">Número 2:</label>
	<input type="text" id="num2" name="num2">
	</p>
<button class="submit" type="submit">Enviar mensaje</button> 

<?php
foreach($_POST as $clave=>$valor){
	$$clave=$valor;
}


if($num1%2 != 0){
	$num1+=1;
}
 for($i=$num1;$i<=$num2; $i+=2){
	echo $i.", ";
	}


?>
</form> 
</body> 
</html>