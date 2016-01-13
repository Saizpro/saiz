<?php
session_start();  //iniciar sesion, que se hace en todas las páginas 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bienvenido</title>
</head>

<body>

<h1>Bienvenido</h1>
<div>
<ul>
<li><a href="listaProductos.php">Lista de productos</a></li>
<li><a href="verPedidos.php">Ver pedidos</a></li>
<li><a href="darAlta.php">Dar de alta un producto</a></li>
<li><a href="manejaTienda.php">Maneja tu tienda</a></li>
</ul>
</div>


<form method="post">
<button type="submit" name="botonCerrar">Cerrar sesión</button>
</form>
<?php
if(isset($_SESSION["usuario"])){ //para que muestre por pantalla el usuario de la sesion y el de la cookie
	echo "<p>Saludo por inicio de sesion: ".$_SESSION["usuario"]."</p>";
}
if(isset($_COOKIE["usuario"])){
	echo "<p>Saludo por inicio de cookie: ".$_COOKIE["usuario"]."</p>";
}
if(isset($_POST["botonCerrar"])){  // para cerrar la sesion que se ha creado y destruir la cookie
	$_SESSION= array();
	session_destroy();
	setcookie("usuario", "", time() -3600);
	header("location:entrar.php");
}
?>
</body>
</html>
