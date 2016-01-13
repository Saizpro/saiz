<?php
//Actualizar registro de la tabla de productos
//Simplicar las variables

$id_producto=$_POST["id_producto"];
$referencia=$_POST["referencia"];
$referencia_actual=$_POST["referencia_actual"];
$foto_actual=$_POST["foto_actual"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];
$id_persona=$_POST["persona"];
$id_persona_actual=$_POST["persona_actual"];
$id_manga=$_POST["manga"];

include "../conexion.inc.php";

//comprobar si ha habido un cambio de referencia
if($referencia==$referencia_actual){ //no cambia la referencia
	$referenciaSql="";
}else{
	$referenciaSql="referencia='$referencia', foto='$referencia.jpg', ";
	rename ("../fotos/$foto_actual", "../fotos/$referencia.jpg");
}

$sql="UPDATE productos SET $referenciaSql descripcion='$descripcion', precio='$precio', id_manga='$id_manga', id_persona='$id_persona' WHERE  id_producto=$id_producto";


echo $sql;
mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));

if (is_array($_FILES["foto"])){
	//copiar la imagen al servidor
	$referencia=$_POST["referencia"];
	list($nombre, $extension)=explode(".", $_FILES["foto"]["name"]);
	$extension=strtolower($extension);
	move_uploaded_file($_FILES["foto"]["tmp_name"], "../fotos/$referencia.$extension");
}

//Comprobar si hay cambio de adulto <=> niño (diferente tallaje)
//echo "Persona actual: $id_persona_actual";
//echo "Persona nueva: $id_persona";

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

?>