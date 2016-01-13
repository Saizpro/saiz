<?php
//copiar la imagen al servidor
$referencia=$_POST["ref"];

// cuando sabemos que solo habra dos parametros, sino hariamos un array y 
//cogeriamos el ultimo para saber la extension
list($nombre, $extension)=explode(".", $_FILES["foto"]["name"]); 

//para que la extension la inserte en minusculas 
$extension=strtolower($extension);

//para subir un fichero a una carpeta, el primer parámetro es el nombre del archivo y su extension
//en el segundo parámetro ponemos la carpeta donde se van a guardar las imagenes y el nombre que llevará
move_uploaded_file($_FILES["foto"]["tmp_name"], "../fotos/$referencia.$extension");

//simplificamos las variables
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];
$persona=$_POST["persona"];
$manga=$_POST["manga"];
//insertar registro en la tabla de productos
include("../conexion.php"); //realizo la conexion
//hacemos la consulta en la base de datos
//poner todos los productos en orden despues del insert into, no es necesario, pero ayuda a la hora de colocar debajo los valores
//los valores van siempre entre comillas
$consulta_sql="INSERT INTO  productos (
id_producto ,referencia ,descripcion ,precio ,foto, id_persona, id_manga
)
VALUES (NULL, '$referencia', '$descripcion', '$precio', '$referencia.$extension','$persona','$manga'
)";
//para insertar el producto en la base de datos
mysqli_query($enlace, $consulta_sql) or die(mysqli_error($enlace));

//insertamos el registro en la tabla de stock
//`para conocer el valor del identificador del producto
$consulta_sql= "SELECT MAX(id_producto) FROM productos";
//para saber el ultimo campo insertado en la base de datos
$resultado=mysqli_query($enlace, $consulta_sql) or die(mysqli_error($enlace));
mysqli_data_seek($resultado, 0);
$fila=mysqli_fetch_row($resultado);
$id_producto=$fila[0];

//evaluar si es adulto o es niño
if($persona<3){
	$nino=0;
}else{
	$nino=1;
}
//una vez comprobado si es adulto o niño sacamos las tallas
//metemos el campo de la tabla y luego una condicion (where)
$sql_tallas="SELECT id_talla FROM tallas WHERE nino='$nino'";
$resultado_tallas=mysqli_query($enlace, $sql_tallas) or die(mysqli_error($enlace));
//leo cada fila y la muestro
while($fila=mysqli_fetch_array($resultado_tallas)){
	$consulta_sql="INSERT INTO stock(id_stock, id_producto, id_talla, unidades)
VALUES('','$id_producto', '$fila[0]','')"; //tambien podria ser $fila["id_talla"]
	mysqli_query($enlace, $consulta_sql) or die(mysqli_error($enlace));
}

//ver el listado de todos los productos
header("location:ver_productos.php");
?>