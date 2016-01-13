<?php 
include "conexion.php";
session_start();
?>

<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>HTML5 y CSS Formulario de contacto</title> 
</head> 
<body> 
<h1>Si no estas registrado:</h1>

<form action="" method="post" >
<p><label for="nombre">Nombre:</label> <input type="text" id="nombre" name="nombre"/>  </p>
<p><label for="apellidos">Apellidos:</label> <input type="text" id="apellidos" name="apellidos"/>  </p>
<p><label for="email">Email:</label> <input type="email" name="email"/> </p>
<p><label for="dni">DNI:</label> <input type="text" id="dni" name="dni" required/>  </p>
<p><label for="telefono">Teléfono:</label> <input type="number" id="telefono" name="telefono"/>  </p>
<p><label for="direccion">Dirección:</label> <input type="text" id="direccion" name="direccion"/>  </p>

<button class="submit" type="submit" name="enviar">Nuevo usuario</button> 
</form> 
<h1>Si ya estas registrado:</h1>
<form action="" method="post" >
<p><label for="dni2">Introduce tu DNI:</label> <input type="text" id="dni2" name="dni2"/>  </p>
<button class="submit" type="submit" name="entrar">Entrar</button> 
<?php
if(isset($_POST["enviar"])){
	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$email=$_POST["email"];
	$dni=$_POST["dni"];
	$telefono=$_POST["telefono"];
	$direccion=$_POST["direccion"];


//campos a introducir
//id_cliente, nombre, apellidos, telefono, email, direccion, provincia, dni, usuario, password, sexo, fecha nacimiento
	$sql="INSERT INTO clientes VALUES ('', '$nombre', '$apellidos', '$telefono', '$email', '$direccion', '', '$dni', '', '', '', '')";
	$resultado=mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));

//nueva consulta para coger el id_cliente
	$sql2="SELECT * FROM clientes WHERE dni='$dni'";
	$resultado2=mysqli_query ($enlace, $sql2) or die(mysqli_error($enlace));

	if($resultado2->num_rows > 0){
	while($fila=mysqli_fetch_array($resultado2)){
		$_SESSION["email"]=$fila["email"];
		$_SESSION["nombre"]=$fila["nombre"];
		$_SESSION["id_cliente"]=$fila["id_cliente"];
	}
}
	header("location: carrito_proceso.php");
}


if(isset($_POST["entrar"])){
	$dni2buscar=$_POST["dni2"];
	$sql="SELECT * FROM clientes WHERE dni='$dni2buscar'";
	$resultado=mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));

	if($resultado->num_rows > 0){
	while($fila=mysqli_fetch_array($resultado)){
		$_SESSION["email"]=$fila["email"];
		$_SESSION["nombre"]=$fila["nombre"];
		$_SESSION["id_cliente"]=$fila["id_cliente"];
	}
	header("location:carrito_proceso.php");
}else{
	echo "<p> DNI no registrado en nuestra base de datos</p>";
	echo "<p> Por favor, registrese o vuelva a intentarlo con su dni</p>";

}
}

?>
</body> 
</html>