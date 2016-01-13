<?php
if(isset($_POST["enviar"])){
	$usuario=$_POST["nombre"]."|".md5($_POST["pass"])."\n";  //md5 para codificar la contraseña
	$puntero=fopen("usuarios.txt", "a");
	if (fwrite($puntero, $usuario)){ 	//porque devuelve enteros y hay que comprobarlo
		echo "su registro ha sido realizado";
	}
	}else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>
<form action="#" method="post">
<fieldset>
<h1>Crear un nuevo usuario</h1>
<p><label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre" required></p>
<p><label for="password">Contraseña: </label><input type="password" name="pass" id="pass" required></p>
<p><label for="enviar"></label><input type="submit" name="enviar" id="enviar" value="Registrar"></p>


</fieldset>
</form>

</body>
</html>
<?php

}
?>