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
$numero1=$_POST["num1"];
$numero2=$_POST["num2"];
$numero1++;
//for($i=valor_inicial;$i<(valor final);cuanto incrementa?)
for($i=$numero1;$i<$numero2; $i++){
	//1 4      2 3
	if($i%2 ==0){
		echo $i." ,";
	}
}


?>
</form> 
</body> 
</html>