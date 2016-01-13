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
foreach ($usuarios as $user){
	if ($user == $_POST["nombre"]){
		if ($password == $_POST["pass"]){
			echo "<h1>Bienvenido ".$_POST["nombre"].".</h1>";
			$encontrado = TRUE;
		}
		break ;
	}
}
if (!$encontrado)
	header('location: entrar.php?user=wrong');

?>




</body>
</html>
