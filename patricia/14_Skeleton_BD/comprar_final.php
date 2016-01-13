<?php
include "conexion.php";
	/*==================================================================
	 PayPal Express Checkout Call
	 ===================================================================
	*/

require_once ("paypalfunctions.php");

	/*
	'------------------------------------
	' The paymentAmount is the total value of 
	' the shopping cart, that was set 
	' earlier in a session variable 
	' by the shopping cart page
	'------------------------------------
	*/
	
	$finalPaymentAmount =  $_SESSION["Payment_Amount"];
		
	/*
	'------------------------------------
	' Calls the DoExpressCheckoutPayment API call
	'
	' The ConfirmPayment function is defined in the file PayPalFunctions.jsp,
	' that is included at the top of this file.
	'-------------------------------------------------
	*/

	$resArray = ConfirmPayment ( $finalPaymentAmount );
	$ack = strtoupper($resArray["ACK"]);
	if( $ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING" )
	{
		/*
		'********************************************************************************************************************
		'
		' THE PARTNER SHOULD SAVE THE KEY TRANSACTION RELATED INFORMATION LIKE 
		'                    transactionId & orderTime 
		'  IN THEIR OWN  DATABASE
		' AND THE REST OF THE INFORMATION CAN BE USED TO UNDERSTAND THE STATUS OF THE PAYMENT 
		'
		'********************************************************************************************************************
		*/

		$transactionId		= $resArray["PAYMENTINFO_0_TRANSACTIONID"]; // ' Unique transaction ID of the payment. Note:  If the PaymentAction of the request was Authorization or Order, this value is your AuthorizationID for use with the Authorization & Capture APIs. 
		$transactionType 	= $resArray["PAYMENTINFO_0_TRANSACTIONTYPE"]; //' The type of transaction Possible values: l  cart l  express-checkout 
		$paymentType		= $resArray["PAYMENTINFO_0_PAYMENTTYPE"];  //' Indicates whether the payment is instant or delayed. Possible values: l  none l  echeck l  instant 
		$orderTime 			= $resArray["PAYMENTINFO_0_ORDERTIME"];  //' Time/date stamp of payment
		$amt				= $resArray["PAYMENTINFO_0_AMT"];  //' The final amount charged, including any shipping and taxes from your Merchant Profile.
		$currencyCode		= $resArray["PAYMENTINFO_0_CURRENCYCODE"];  //' A three-character currency code for one of the currencies listed in PayPay-Supported Transactional Currencies. Default: USD. 
		$feeAmt				= $resArray["PAYMENTINFO_0_FEEAMT"];  //' PayPal fee amount charged for the transaction
		$settleAmt			= $resArray["PAYMENTINFO_0_SETTLEAMT"];  //' Amount deposited in your PayPal account after a currency conversion.
		$taxAmt				= $resArray["PAYMENTINFO_0_TAXAMT"];  //' Tax charged on the transaction.
		$exchangeRate		= $resArray["PAYMENTINFO_0_EXCHANGERATE"];  //' Exchange rate if a currency conversion occurred. Relevant only if your are billing in their non-primary currency. If the customer chooses to pay with a currency other than the non-primary currency, the conversion occurs in the customer's account.
		
		/*
		' Status of the payment: 
				'Completed: The payment has been completed, and the funds have been added successfully to your account balance.
				'Pending: The payment is pending. See the PendingReason element for more information. 
		*/
		
		$paymentStatus	= $resArray["PAYMENTINFO_0_PAYMENTSTATUS"]; 

		/*
		'The reason the payment is pending:
		'  none: No pending reason 
		'  address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to manually accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile. 
		'  echeck: The payment is pending because it was made by an eCheck that has not yet cleared. 
		'  intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account Overview. 		
		'  multi-currency: You do not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment. 
		'  verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment. 
		'  other: The payment is pending for a reason other than those listed above. For more information, contact PayPal customer service. 
		*/
		
		$pendingReason	= $resArray["PAYMENTINFO_0_PENDINGREASON"];  

		/*
		'The reason for a reversal if TransactionType is reversal:
		'  none: No reason code 
		'  chargeback: A reversal has occurred on this transaction due to a chargeback by your customer. 
		'  guarantee: A reversal has occurred on this transaction due to your customer triggering a money-back guarantee. 
		'  buyer-complaint: A reversal has occurred on this transaction due to a complaint about the transaction from your customer. 
		'  refund: A reversal has occurred on this transaction because you have given the customer a refund. 
		'  other: A reversal has occurred on this transaction due to a reason not listed above. 
		*/
		
		$reasonCode		= $resArray["PAYMENTINFO_0_REASONCODE"];   

//insertar registro en la tabla de pedidos
		$id_cliente=$_SESSION["id_cliente"];
		$total=$_SESSION["Payment_Amount"];
		$sql2="INSERT INTO pedidos (id_pedido, id_cliente, fecha, total) VALUES (NULL, '$id_cliente', NOW( ), '$total')";
		$resultado2=mysqli_query ($enlace, $sql2) or die(mysqli_error($enlace));
//insertar lineas en la tabla de pedidos
		//obtener el id de pedido
		$sql3="SELECT id_pedido FROM pedidos WHERE id_cliente='$id_cliente' AND fecha=NOW() AND total='$total'";
		$resultado3=mysqli_query($enlace, $sql3) or die (mysqli_error($enlace));
		$fila=mysqli_fetch_array($resultado3);
		$id_pedido=$fila['id_pedido'];

	foreach($_SESSION["cesta"] as $clave=>$producto){
	//insertar líneas de pedido
	$sql="INSERT INTO lineas_pedido (num_linea, id_pedido, id_producto, id_talla, cantidad) VALUES (NULL, '$id_pedido', '{$producto["id_producto"]}', '{$producto["talla"]}', '{$producto["cantidad"]}')";
	
	mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));
	//Actualizar stock
	$sql="UPDATE  stock SET  unidades=unidades-{$producto["cantidad"]} WHERE  id_producto='{$producto["id_producto"]}' AND id_talla='{$producto["talla"]}'";
	
	mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));
	//Borrar producto de la cesta
	unset($_SESSION["cesta"][$clave]);

	}
	
	/******* Enviar mail con la factura *********/
	//Obtener el mail del cliente
	$sql="SELECT email, nombre, apellidos FROM clientes WHERE id_cliente={$_SESSION["id_cliente"]}";
	$resultado=mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));
	$fila=mysqli_fetch_array($resultado);
	$para="$fila[0]";

	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	$asunto="Pedido realizado en la tienda de camisetas";
	$mensaje="<html><head><title>Pedido realizado en la tienda de camisetas</title></head><body>";
	$mensaje.="<p>$fila[1] $fila[2], acabas de realizar un pedido en nuestra tienda</p>";
	$mensaje.="</body></html>";
	
	mail($para, $asunto, $mensaje, $cabeceras);

	//Mostrar número de pedido en pantalla y agradecimiento
	echo "Gracias por comprar su ID de pedido es $id_pedido";

	//cerrar sesiones
	session_unset();
	session_destroy();

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
	
?>