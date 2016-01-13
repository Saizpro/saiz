<?php
if (isset($_POST["email"]))
?>
<!DOCTYPE html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Compra</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 
<header>
<h1>Factura de compra</h1>
</header>
<section>

<div id="imagen">
<?php
$rutaimg=$_POST["imagen"];
echo "<img src= $rutaimg /></div>";
?>

</section>
<section>
<div id="factura">
<?php
// leer las variables del formulario.php
$num_art=$_POST["num1"]; 
$mensualidad=$_POST["numero"];
$articulo=$_POST["articulo"];
$precio=$_POST["precio"];
$correo=$_POST["correo"];
//operaciones para sacar los precios

$subtotal= $num_art * $precio;
$total=($subtotal*0.21)+$subtotal;
$total= round ($total, 2);
$cadames=$total/$mensualidad;
$cadames= round ($cadames, 2);
echo <<<TABLA
<table>
	<tr><td>Nombre del artículo seleccionado:</td><td>$articulo</td></tr>
	<tr><td>Número de artículos comprados:</td><td> $num_art</td></tr>
	<tr><td>Subtotal: </td><td> $subtotal €</td></tr>
	<tr><td>Total:</td><td> $total €</td></tr>
	</table>

<p>Has decidido pagar en $mensualidad mensualidades</p>
<p>El precio a pagar cada mes es de: $cadames €</p>
TABLA;

?>
</div>
</section>
<?php
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
$mail->IsSendmail();

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'pruebaspgh@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'pgh123456';

//Set who the message is to be sent from, de quien es el mensaje
$mail->setFrom('pruebaspgh@gmail.com', 'Patricia Gómez');

//Set an alternative reply-to address, a quien responde responder
$mail->addReplyTo('pruebaspgh@gmail.com', 'Patricia Gomez');

//Set who the message is to be sent to
//se puede repetir uno por cada persona que se envia el mail
$mail->addAddress( $correo, '');
$mail->addAddress( 'pruebaspgh@gmail.com', '');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("<h2>Hola, su producto ha sido adquirido</h2>
		<p>El nombre del artículo es: $articulo </p>
		<p>El número de artículos elegidos es: $num_art </p>
		<p>El precio total de su compra es: $total </p>
		<img src= $rutaimg />
	");
$mail->CharSet='UTF-8';
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('');

//send the message, check for errors
if (!$mail->send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
	//echo "Error al enviar su formulario" ;
} else {
   // echo "Message sent!";
}

?>
</body> 
</html>
