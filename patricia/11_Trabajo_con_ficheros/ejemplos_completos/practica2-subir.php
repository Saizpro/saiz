<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Subir archivo</title>
</head>

<body>
	<?php
	$ruta=$_POST["ruta"];
	?>
<p>Subir un archivo (Tamaño máximo 2MB)</p>
<form enctype="multipart/form-data" action="practica2-subir.php" method="POST">
    <input type="hidden" name="ruta" value="<?php echo $ruta; ?>">
    <input name="archivo" type="file" />
    <p><input type="submit" name="send" id="send" value="Send File" /></p>
    <p><input type="submit" name="cancel" id="cancel" value="Cancelar" /></p>
</form>

<?php
if (isset($_POST["send"])){
	$nombreFichero=$_POST["ruta"]."/".$_FILES["archivo"]["name"];
	echo $nombreFichero;
	$ruta=$_POST["ruta"];
	move_uploaded_file($_FILES["archivo"]["tmp_name"], $nombreFichero);
	//echo $ruta;
	header("location:practica2.php?ruta=$ruta");
}
if (isset($_POST["cancel"])){
	$ruta=$_POST["ruta"];
	header("location:practica2.php?ruta=$ruta");
}

?>