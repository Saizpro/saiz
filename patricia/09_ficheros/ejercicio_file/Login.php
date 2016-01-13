 <?php
session_start();
if(isset($_SESSION["usuario"])||isset($_COOKIE["usuario"])){ //comprobar si la sesion o las cookies estan ya (si ya has entrado antes)
	header("location:bienvenido.php");
}else{
	if(isset($_POST["nombre"])){



/*foreach($leerFichero as $numlineas =>$linea){
	list($usu, $cont)=explode("|", $leerFichero){
		if($usu==$_POST["nombre"]&& $cont==["pass"]){

		}
	}
}

*/
$leerFichero= file("usuarios.txt");

foreach ($leerFichero as $clave){
	list($usuarioF, $passF)=explode("|", $clave);
	$usuarioF=trim($usuarioF);		//limpiar espacios en blanco
	$passF=trim($passF);			//limpiar espacios en blanco
	if ($usuarioF == $_POST["nombre"]){   //comparamos el nombre y contraseña para ver si son correctos
		if ($passF == md5($_POST["pass"])){  //usamos md5 para recuperar la contraseña encriptada antes
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