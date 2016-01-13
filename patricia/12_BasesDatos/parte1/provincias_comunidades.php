<?php
include("iniciar_BD.inc.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Provincias MySQL</title>
    <script src="jquery-1.11.3.js"></script>
    <script src="main.js"></script>
</head>
<body>

<form action="" method='post'>
<label for="comunidad">Seleccione comunidad: </label>
<select name='comunidades' id='comunidades'>
<?php
$consulta2="SELECT * FROM comunidades";
//ejecutamos la consulta
$resultado2=mysqli_query($enlace, $consulta2);
while ($fila = mysqli_fetch_array($resultado2)) {
	
    echo "\n<option value=\"$fila[0]\"> $fila[1]</option>";
}

/*
Todo este código lo hemos puesto en proceso_provincias.php
<label for="provincias">Seleccione provincias: </label>
<select name='provincias' id='provincias'>


//definimos la consulta
$consulta="SELECT * FROM provincias";
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
*/
?>
</select>
<!-- este div si lo metemos dentro del formulario, al hacer el proceso desaparece el form y aparece el div-->
<div></div>
</form>
 
</body>
</html>