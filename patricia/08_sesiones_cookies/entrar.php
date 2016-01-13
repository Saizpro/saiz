<?php
session_start();
if(isset($_SESSION["usuario"])||isset($_COOKIE["usuario"])){ //comprobar si hay sesion iniciada o si llevas cookies
	header("location:bienvenido.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>

</head>

<body>

<form action="login.php" method="post">
<fieldset>
<h1>Entra al sistema</h1>
<p><label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre" required></p>
<p><label for="password">Password: </label><input type="password" name="pass" id="pass" required></p>
<p><label for="enviar"></label><input type="submit" name="enviar" id="enviar" value="Enviar"></p>
<p><label for="check"> </label><input type="checkbox" name="check" id="check" value="check"> Quiero que me recuerde</p>
</fieldset>
</form>

<?php
if ($_GET["user"]=="wrong")
	echo "<FONT COLOR=\"RED\"><strong> El usuario o contraseña introducidos no son correcto. Inténtelo	 de nuevo </strong></font>";
?>
</body>
</html>
<?php
}
?>
