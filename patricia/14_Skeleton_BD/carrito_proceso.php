<?php
include "conexion.php";
session_start();

//para borrar elementos del pedido
if(isset($_GET["id"])){
	$id_get=$_GET["id"];
	$talla_get=$_GET["talla"];
	
  foreach($_SESSION["cesta"] as $clave => $producto){
		 if($producto["id_producto"]==$id_get && $producto["talla"]==$talla_get){
		 	$cantidad=$producto["cantidad"]+$_POST["cantidad"];
		 	//Eliminar ese elemento para grabar actualizado
		 	unset($_SESSION["cesta"][$clave]);
		  }
	}

}


if($_POST["add_carrito"]){
$id_producto=$_POST["id_producto"];
$cantidad=$_POST["cantidad"];
$talla=$_POST["talla"];


//si ya existe el producto y es de la misma talla: suma!!
if(isset($_SESSION["cesta"])){
	foreach($_SESSION["cesta"] as $clave => $producto){
		 if($producto["id_producto"]==$id_producto && $producto["talla"]==$talla){
		 	$cantidad=$producto["cantidad"]+$_POST["cantidad"];
		 	//Eliminar ese elemento para grabar actualizado
		 	unset($_SESSION["cesta"][$clave]);
		  }
	}
}

$item["id_producto"]=$id_producto;
$item["cantidad"]=$cantidad;
$item["talla"]=$talla;

$_SESSION["cesta"][]=$item;
}
if(isset($_SESSION["nombre"])){
	$usuarionombre=$_SESSION["nombre"];
}else{
	$usuarionombre ="No esta logeado";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

   <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/estilos.css">
 
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
<div class="container">
 <h2>SU SELECCION DE PRODUCTOS</h2>

 <div id="caja">
	<form method="post">
	<p>Usuario: <?php echo $usuarionombre;?></p>
	<label></label><input type="submit" name="cerrar" value="Cerrar sesion">
	</form>
	</div>


	<div class="ten columns">
		<table>
		<tr><th colspan="2">Producto</th><th>Tallas</th><th>Cantidad</th><th>Precio</th></tr>
<?php 

	foreach($_SESSION["cesta"] as $producto){
		$id_producto=$producto["id_producto"];
		$talla=$producto["talla"];
		$consulta_sql="SELECT * FROM productos, tallas WHERE id_producto='$id_producto' AND id_talla='$talla'";
		$resultado=mysqli_query ($enlace, $consulta_sql) or die(mysqli_error($enlace));
		while($fila=mysqli_fetch_array($resultado)){
			$subtotal= $fila["precio"]*$producto["cantidad"];
			$total+=$subtotal;
			echo <<<CARRITO

				<tr>

				<td><img src="fotos/{$fila["foto"]}" width=75px heigh=75px/></td>
				<td>{$fila["descripcion"]}</td>
				<td>{$fila["tallas"]}</td>
				<td>{$producto["cantidad"]}</td>
				<td>$subtotal €</td>
				<td><a href="carrito_proceso.php?id=$id_producto&talla=$talla">Eliminar</a></td>
				</tr>
CARRITO;
$_SESSION["Payment_Amount"]=$total;
		}
	}

?>

<tr><td colspan="4"><td><?php echo $total;?> €</td></td></tr>	
		</table>
		<p><a href="index.php">Volver a la tienda de productos</a></p>
<form action='#' METHOD='POST'>

	<label>Completar el pedido:</label><input type="submit" name="enviar" value="Completar pedido">
	</form>


	</div>



</div>
<?php
//miramos a ver si envia el completar pedido, y si hay una sesion de email, si existe va al paypal para pagar y sino, va al formulario de registro

if(isset($_POST["enviar"])){
	if(isset($_SESSION["email"])){
		foreach($_SESSION["cesta"] as $clave=>$producto){
			$id_producto=$producto["id_producto"];
			$cantidad=$producto["cantidad"];
			$talla=$producto["talla"];

			$sql="SELECT * FROM stock WHERE id_producto='$id_producto' AND id_talla='$talla' AND unidades>='$cantidad'";
			$resultado=mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));
			if($resultado->num_rows > 0){
				header("location:expresscheckout.php");

			}else{
				header("location:carrito_proceso.php?error=1&id_error=$id_producto&id_talla=$talla&unidades=$cantidad");
				
			}
		}

	
	}else{
		header("location: form_cliente.php");
	}
}
//si le damos a cerrar sesion en el boton de usuario que cierre la sesion
if(isset($_POST["cerrar"])){
	unset($_SESSION["email"]);
	unset($_SESSION["nombre"]);
	header("Refresh:0");
}

if(isset($_GET["id_error"])){
	$id_producto=$_GET["id_error"];
	$talla=$_GET["id_talla"];
	$cantidad=$_GET["unidades"];
	echo "<p>No tenemos en estos momentos $cantidad de la talla $talla seleccionada</p>";
	echo "<p>Borre la linea e intentelo con menos cantidad</p>";

}
?>
</body>
</html>