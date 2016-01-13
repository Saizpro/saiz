<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>HTML5 y CSS Formulario de contacto</title>
<style type="text/css">
body{
	font-family: Verdana;
}
h1{
	color:#2E9AFE ; 
}

</style>

</head> 
<body> 
<h1>Contacto</h1>

<form action="" method="post">
<p><label for="name">Nombre de usuario:</label> <input type="text" id="name" name="usuario"/>  </p>
<p><label for="contrasena">Contraseña:</label> <input type="text" name="contrasena"/> </p>

<button class="submit" type="submit">Login</button> 
<?php 
if($_GET["error"]){
	echo "<p>Su usuario o contraseña no son correctas, intentelo de nuevo</p>";
}

$personas= array("Sandra", "Patricia", "Adrian", "Salvador", "Carlos", "Ignacio", "Silvia");
$pasa="cursophp";

$contrasena=$_POST["contrasena"];
$usuario=$_POST["usuario"];

foreach($personas as $valor){
    if($usuario==$valor && $contrasena==$pasa){
		header("location: http://localhost/patricia/05_arrays/bienvenida.php");
		break;
	}
	elseif(isset($_POST["usuario"])&& ($valor!=$usuario && $contrasena!=$pasa)){
		echo header("location: http://localhost/patricia/05_arrays/login_usuariocont.php?error=1");
	}
	}

// podria ser tambien, asi para comparar primero el usuario y luego la contraseña
//foreach($usuario==$valor){
//	if($valor==$_POST["usuario"]){
//		if($pasa==$_POST["contrasena"]){
//		echo "<h1>Bienvenido ".$_POST["usuario]".</h1>";
//			$encontrado =TRUE;
// 				}
//		break;
//			}
//		if (!$encontrado)
//			header("location:entr...");	
//		}
//		}
//		}
?>

</form> 
</body> 
</html>