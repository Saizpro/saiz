<?php
$usuarios = array ("user1", "user2", "user3", "user4");
$password = "password";
	if (in_array($_POST["nombre"], $usuarios) and $_POST["pass"] == "password"){
		echo "<h3>Bienvenido ".$_POST["nombre"].".</h3>";
}
//else echo "Usuario o contraseñas incorrectos.";
else{
	echo 1;
// header('location: entrar.php?user=wrong');
}
?>