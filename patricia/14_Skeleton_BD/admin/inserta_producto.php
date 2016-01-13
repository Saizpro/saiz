<?php
include("cabecera.inc.php");
include("../conexion.php");
?>
<div id="formulario">
<form  action="inserta.php" method="post" enctype="multipart/form-data" id="form1">
<div id="resultado"><h3>Insertar un producto</h3></div>

<p><label for="ref">Referencia:</label> <input type="text" id="ref" name="ref" required/>  </p>
<p><label for="precio">Precio:</label> <input type="text" id="precio" name="precio" required/></p>
<p><label for="descripcion">Descripcion:</label><textarea type="text" id="descripcion" name="descripcion" required></textarea>
<p><label for="foto">Fotografia: </label><input type="file" id="foto" name="foto" required></p>
<p><label for="personas">Seleccione persona:</label>
	<select name="personas" id="personas" required>
	 <option value="">
	<?php 
	$consulta="SELECT * FROM personas";
	$resultado=mysqli_query($enlace, $consulta);
	while ($fila = mysqli_fetch_array($resultado)) {
	echo "\n<option value=\"$fila[0]\"> $fila[1]</option>";
}

?>
</select></p>

<p><label for="mangas">Seleccione tipo de manga:</label>
	<select name="mangas" id="mangas" required>  
		<option value="">
	<?php 
	$consulta="SELECT * FROM manga";
	$resultado=mysqli_query($enlace, $consulta);
	while ($fila = mysqli_fetch_array($resultado)) {
	echo "\n<option value=\"$fila[0]\"> $fila[1]</option>";
}
mysqli_free_result($resultado);
mysqli_close($enlace);
?>
</select></p>
<p><input type="submit" id="enviar" value="enviar"></p>
</form> 


</div>
<body>
</html>