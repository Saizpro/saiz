<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="contacto.css">
</head>

<body>

<form action="login2.php" method="post">
<fieldset>
<h1>Entra al sistema</h1>
<p><label for="nombre">Login </label><input type="text" name="nombre" id="nombre" required></p>
<p><label for="password">Password </label><input type="password" name="pass" id="pass" required></p>
<p><label for="enviar">Enviar </label><input type="submit" name="enviar" id="enviar" value="Enviar"></p>
</fieldset>
</form>

<?php
if ($_GET["user"]=="wrong")
	echo "<FONT COLOR=\"RED\"><strong> El usuario o contraseña introducidos no son correcto. Inténtelo	 de nuevo </strong></font>";
?>
</body>
</html>
