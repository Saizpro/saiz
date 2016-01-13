<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Prueba</title>
</head>

<body>

<?php
$usuarios = array ("user1", "user2", "user3", "user4");
$password = "password";
if (in_array($_POST["nombre"], $usuarios) and $_POST["pass"] == "password"){
echo "<h3>Bienvenido ".$_POST["nombre"].".</h3>";
}
//else echo "Usuario o contraseñas incorrectos.";
else header('location: entrar.php?user=wrong');
?>




</body>
</html>
