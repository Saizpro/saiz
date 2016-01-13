<?php if(isset($_POST["sumar"])){ // para comprobar si vienes del formulario
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style>
 .rojo{
 	color: #f00;
 }
</style>
</head>
<body>
<?php 
$num1=$_POST["num1"];
$num2=$_POST["num2"];

$final=$num1+$num2;
echo "<p>La suma de ".$num1." y ".$num2." es igual a ".$final."</p>";

if($num1>$num2){
	echo "<p>El número ".$num1." es mayor que el número ".$num2."</p>";
}else{
	echo "<p>El número ".$num2." es mayor que el número ".$num1."</p>";
}
?> 
</body>
</html>
<?php 
}else{
	header("location:sumas.php"); //redireccion para cuando no se venga del form
}
?>