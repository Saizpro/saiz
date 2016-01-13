<?php
if(isset($_COOKIE["usuario"])){ 
 $aficiones=$_COOKIE["usuario"];
echo "<p>Hola, tus aficiones son : ".$aficiones."</p>";
}else{
	header("location: practica9.php");
}

?>
<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Compra</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 

<form action="#" method="post">
<button class="cerrar" type="submit" name="cerrar">Cerrar sesion</button> 
</form>


<?php
if(isset($_POST["cerrar"])){
	setcookie("usuario", "", time()-3600);
	header("location: practica9.php");
}
?>
</body>
</html>