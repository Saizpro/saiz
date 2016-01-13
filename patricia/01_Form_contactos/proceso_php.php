<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>HTML5 y CSS Formulario de contacto</title> 
</head> 
<body> 
<h1>Datos introducidos</h1>
<?php 
echo "<p>El nombre del fichero es: ".$_FILES["cv"]["name"]."</p>";
echo "<p>El nombre del fichero es: ".$_FILES["cv"]["type"]."</p>";
echo "<p>El nombre del fichero es: ".$_FILES["cv"]["size"]."</p>";
echo "<p>El nombre del fichero es: ".$_FILES["cv"]["tmp_name"]."</p>";
echo "<p>El nombre del fichero es: ".$_FILES["cv"]["error"]."</p>";

move_uploaded_file($_FILES["cv"]["tmp_name"],"fotos/".$_FILES["cv"]["name"]);

?>

</body>
</html>