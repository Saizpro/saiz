<?php
session_start();  //iniciar sesion, que se hace en todas las páginas 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>lista de productos</title>
</head>

<body>

<h1>LISTA DE PRODUCTOS</h1>
<h2>Hola</h2>
<?php
echo "<p>Usuario: ".$_SESSION["usuario"]."</p>";
if(isset($_POST["botonCerrar"])){  // para cerrar la sesion que se ha creado y destruir la cookie
	$_SESSION= array();
	session_destroy();
	setcookie("usuario", "", time() -3600);
	header("location:entrar.php");
}
?>
<form method="post">
<button type="submit" name="botonCerrar">Cerrar sesión</button>
</form>
</body>
</html>
