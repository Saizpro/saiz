<?php
include "../conexion.php";
$ref=$_POST["referencia"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];
$persona=$_POST["persona"];
$manga=$_POST["manga"];
$id=$_POST["id"];
$per_antiguo=$_POST["perviej"];
//echo $per_antiguo;
//echo $persona;




//actualizar el campo del fichero
if(is_array($_FILES["foto"])){
    list($nombre, $extension)=explode(".", $_FILES["foto"]["name"]); 
    $extension=strtolower($extension);
	move_uploaded_file($_FILES["foto"]["tmp_name"], "../fotos/$ref.$extension");
	$sql_fichero="UPDATE productos SET foto= '$ref.$extension' WHERE id_producto='$id'";
	mysqli_query ($enlace, $sql_fichero) or die(mysqli_error($enlace));  // ejecutar consulta
}

echo "<p>$ref_bd</p>";
echo "<p>$ref</p>";


if($ref_bd!=$ref){
	//si ha cambiado referencia que cambie el nombre del fichero
$cambioref="SELECT productos.referencia, productos.foto FROM productos WHERE productos.id_producto='$id'";
$cambio=mysqli_query ($enlace, $cambioref) or die(mysqli_error($enlace));  

$fila=mysqli_fetch_row($cambio);
$ref_bd=$fila[0];
$fotoactual=$fila[1];
list($nombre, $extension)=explode(".", $fotoactual); 
$extension=strtolower($extension);

	$ficheroanti=$ref_bd.".".$extension;
	//echo $ficheroanti;
	$ficheronuevo=$ref.".".$extension;
  
	rename("../fotos/$ficheroanti", "../fotos/$ficheronuevo");
    echo $ficheronuevo;
	$sql_fich="UPDATE productos SET foto='$ficheronuevo' WHERE productos.id_producto='$id'";
	echo $sql_fich;
	mysqli_query ($enlace, $sql_fich) or die(mysqli_error($enlace));
}

if($id_persona_actual!=$id_persona){
	if(($id_persona_actual<3 && $id_persona==3)||($id_persona_actual==3 && $id_persona<3)){//De adulto a niño Ó De niño a adulto
		echo "Cambio de talla";

		$sql="DELETE FROM stock WHERE id_producto='$id_producto'";
		echo $sql;

		mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));

		//evaluar si adulto o niño para saber el tallaje
		if($id_persona<3){
			$nino=0;
		}else{
			$nino=1;
		}

		$sql="SELECT id_talla FROM tallas WHERE nino='$nino'";
		$resultado=mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));

		while ($fila=mysqli_fetch_array($resultado)){
		        $sql="INSERT INTO  stock (id_stock, id_producto, id_talla, unidades)
		VALUES ('' , '$id_producto', '$fila[0]',  '10')";

				mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));
		}
	}
}






//actualizar todos los campos del formulario, hayan sido o no modificados, excepto el fichero
$sql_producto="UPDATE productos, stock SET referencia='$ref', descripcion='$descripcion', precio='$precio', id_persona='$persona',id_manga='$manga' WHERE stock.id_producto=productos.id_producto AND productos.id_producto='$id'";
$resultado_producto=mysqli_query ($enlace, $sql_producto) or die(mysqli_error($enlace));



?>