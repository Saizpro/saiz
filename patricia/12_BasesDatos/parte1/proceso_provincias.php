<?php
if(isset($_POST["comunidadSel"])){
?>
<label for="provincias">Seleccione provincias: </label>
<select name='provincias' id='provincias'>
<?php
include("iniciar_BD.inc.php");
//definimos la consulta
$consulta="SELECT * FROM provincias WHERE id_comunidad='{$_POST["comunidadSel"]}'";
//ejecutamos la consulta
$resultado=mysqli_query($enlace, $consulta);

//se vuelca a un array el resultado y de paso lo recorremos, se hace  con while o do..while
while ($fila = mysqli_fetch_array($resultado)) {
	
    echo "\n<option value=\"$fila[0]\"> $fila[1]</option>";
}
//limpiamos el resultado
mysqli_free_result($resultado);
//cerramos la conexion
mysqli_close($enlace);
?>
</select>
<?php
}
?>