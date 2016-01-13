<?php
include "conexion.php";
session_start();




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
		}
	}

?>

<tr><td colspan="4"><td><?php echo $total;?> €</td></td></tr>	
		</table>
		<p><a href="index.php">Volver a la tienda de productos</a></p>
		<form action="comprar_final.php" method="POST">
		 <button type="submit">Finalizar compra</button>
		 </form>





	</div>
	
</div>
</body>
</html>



<?php
/*==================================================================
 PayPal Express Checkout Call
 ===================================================================
*/
// Check to see if the Request object contains a variable named 'token'	
$token = "";
if (isset($_REQUEST['token']))
{
	$token = $_REQUEST['token'];
	
}

// If the Request object contains the variable 'token' then it means that the user is coming from PayPal site.	
if ( $token != "" )
{

	require_once ("paypalfunctions.php");

	/*
	'------------------------------------
	' Calls the GetExpressCheckoutDetails API call
	'
	' The GetShippingDetails function is defined in PayPalFunctions.jsp
	' included at the top of this file.
	'-------------------------------------------------
	*/
	

	$resArray = GetShippingDetails( $token );
	$ack = strtoupper($resArray["ACK"]);
	if( $ack == "SUCCESS" || $ack == "SUCESSWITHWARNING") 
	{
		/*
		' The information that is returned by the GetExpressCheckoutDetails call should be integrated by the partner into his Order Review 
		' page		
		*/
		$email 				= $resArray["EMAIL"]; // ' Email address of payer.
		$payerId 			= $resArray["PAYERID"]; // ' Unique PayPal customer account identification number.
		$payerStatus		= $resArray["PAYERSTATUS"]; // ' Status of payer. Character length and limitations: 10 single-byte alphabetic characters.
		$salutation			= $resArray["SALUTATION"]; // ' Payer's salutation.
		$firstName			= $resArray["FIRSTNAME"]; // ' Payer's first name.
		$middleName			= $resArray["MIDDLENAME"]; // ' Payer's middle name.
		$lastName			= $resArray["LASTNAME"]; // ' Payer's last name.
		$suffix				= $resArray["SUFFIX"]; // ' Payer's suffix.
		$cntryCode			= $resArray["COUNTRYCODE"]; // ' Payer's country of residence in the form of ISO standard 3166 two-character country codes.
		$business			= $resArray["BUSINESS"]; // ' Payer's business name.
		$shipToName			= $resArray["PAYMENTREQUEST_0_SHIPTONAME"]; // ' Person's name associated with this address.
		$shipToStreet		= $resArray["PAYMENTREQUEST_0_SHIPTOSTREET"]; // ' First street address.
		$shipToStreet2		= $resArray["PAYMENTREQUEST_0_SHIPTOSTREET2"]; // ' Second street address.
		$shipToCity			= $resArray["PAYMENTREQUEST_0_SHIPTOCITY"]; // ' Name of city.
		$shipToState		= $resArray["PAYMENTREQUEST_0_SHIPTOSTATE"]; // ' State or province
		$shipToCntryCode	= $resArray["PAYMENTREQUEST_0_SHIPTOCOUNTRYCODE"]; // ' Country code. 
		$shipToZip			= $resArray["PAYMENTREQUEST_0_SHIPTOZIP"]; // ' U.S. Zip code or other country-specific postal code.
		$addressStatus 		= $resArray["ADDRESSSTATUS"]; // ' Status of street address on file with PayPal   
		$invoiceNumber		= $resArray["INVNUM"]; // ' Your own invoice or tracking number, as set by you in the element of the same name in SetExpressCheckout request .
		$phonNumber			= $resArray["PHONENUM"]; // ' Payer's contact telephone number. Note:  PayPal returns a contact telephone number only if your Merchant account profile settings require that the buyer enter one. 
	} 
	else  
	{
		//Display a user friendly Error on the page using any of the following error information returned by PayPal
		$ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
		$ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
		$ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
		$ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);
		
		echo "GetExpressCheckoutDetails API call failed. ";
		echo "Detailed Error Message: " . $ErrorLongMsg;
		echo "Short Error Message: " . $ErrorShortMsg;
		echo "Error Code: " . $ErrorCode;
		echo "Error Severity Code: " . $ErrorSeverityCode;
	}
}
		
?>