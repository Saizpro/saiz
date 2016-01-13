
<!DOCTYPE html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset= utf-8" /> 
<title>Compra</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 
<header>
<h1>Artículo seleccionado</h1>

</header>
<section>

<div id="imagen">
<?php
$rutaimg="http://pgomez.sallende.imefez.net/ejercicioCompleto/img/imagen1.jpg";
echo "<img src= $rutaimg /></div>"
?>
<div id="texto">
<?php
$precio= 20;
$articulo="Cazadora mujer";
	echo "<p>$articulo</p>"
?>	
	<p>Características</p>
	<p>Peso: 1,05kg</p>
	<p>Material: calentito</p>
	<p>Precio: <?php echo $precio ;?> €</p>
</div>
</section>
<form enctype="multipart/form-data" action="factura.php" method="post" >
<p><label for="correo">Email para el envío de la factura:</label> <input type="email" name="correo"/> </p>
<p><label for="num1">Numero de artículos:</label> <input type="number" id="num1" name="num1"/>  </p>
<p><label for="numero">Pagar en:</label><select type="text" id="numero" name="numero">
	 <option value="1">1 mes</option> 
	  <option value="3">3 meses</option> 
	   <option value="6">6 meses</option> </select></p>
<?php
echo <<<NOVER
<input type="hidden" id="imagen" name="imagen" value= "$rutaimg"/>
<input type= "hidden" id="precio" name="precio" value="$precio"/>
<input type="hidden" id="articulo" name="articulo" value="$articulo"/>
NOVER;
?>
<button type="submit" class="submit">Enviar</button> 
</form> 
</body> 
</html>
