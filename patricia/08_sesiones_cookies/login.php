<?php
session_start();
if(isset($_SESSION["usuario"])||isset($_COOKIE["usuario"])){ //comprobar si la sesion o las cookies estan ya (si ya has entrado antes)
	header("location:bienvenido.php");
}else{
	if(isset($_POST["nombre"])){

$usuarios = array ("user1", "user2", "user3", "user4");
$password = "cursophp";
foreach ($usuarios as $user){
	if ($user == $_POST["nombre"]){
		if ($password == $_POST["pass"]){
			if(isset ($_POST["check"])){   //cuando este marcado el boton de check que mande cookie
				setcookie("usuario", $_POST["nombre"], time()+ 3600); //definir la variable de cookie
			}
			$_SESSION["usuario"]=$_POST["nombre"];  //definir la sesion
			header("location: bienvenido.php");
			$encontrado = TRUE;
		}
		break ;
	}
}
if (!$encontrado){
	header('location: entrar.php?user=wrong');
}else{
	header("location: entrar.php");
}
}
}
?>