<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Descarga de archivos</title>
</head>

<body>
<?php

$descargas=array(
				array("Descarga1","Chrysanthemum.jpg"),
				array("Descarga2","Desert.jpg"),
				array("Descarga3","Lighthouse.jpg"),
				array("Descarga4","Penguins.jpg")
				);

if(isset($_GET["fichero"])){
	$numfichero=$_GET["fichero"];
	$fichero=$descargas[$numfichero][1]; //para acceder al segundo elemento de la ruta


if (file_exists($fichero)) {
   		header('Content-Description: File Transfer');
   	 	header('Content-Type: application/octet-stream');
   	 	header('Content-Disposition: attachment; filename='.basename($fichero));
   	 	header('Expires: 0');
   		header('Cache-Control: must-revalidate');
  	 	header('Pragma: public');
  	 	header('Content-Length: ' . filesize($fichero));
  	  	readfile($fichero);
    exit;
}
}
foreach($descargas as $fichero=>$clave){
	
	echo "<p><a href=\"descargar1.php?fichero=$fichero\">$clave[0]</a></p>";
	}


?>
</body>
</html>