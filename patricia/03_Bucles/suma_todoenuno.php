<!DOCTYPE html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>HTML5 y CSS Formulario de contacto</title> 
</head> 
<body> 

<h1>Sumar</h1>

<form enctype="multipart/form-data" action="#" method="post" >
<p><label for="num1">Numero 1:</label> <input type="num1" id="num1" name="num1"/>  </p>
<p><label for="num2">Numero 2:</label> <input type="num2" id="num2" name="num2"/> </p>

<button class="sumar" type="submit" name="sumar">Hacer suma</button> 


</form> 
<?php 

if (isset($_POST["sumar"])){
$num1= $_POST["num1"];
$num2=$_POST["num2"];
$final=$num1+$num2;
echo "<p>La suma de ".$num1." y ".$num2." es igual a ".$final."</p>";


}

?> 
</body> 
</html>
