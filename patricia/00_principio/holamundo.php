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
$caracter="cosa1";

echo "<p>La variable 1 es ".gettype($caracter)."</p>";
settype($caracter, "integer");

echo "<p>La variable una vez cambiada es ".gettype($caracter)."</p>";

?> 

</body>
</html>
