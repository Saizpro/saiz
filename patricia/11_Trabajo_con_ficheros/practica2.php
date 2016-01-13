<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
table{
	border: 1px solid red;
	width: 70%;
	margin: 0 auto;
}


</style>
</head>

<body>
<table>
<tr>
<th></th>
<th>NOMBRE</th>
<th>TAMAÑO</th>
<th>MODIFICADO</th>
</tr>

<?php
if(!isset($_GET["carpeta"])){
	$ruta=$_SERVER["DOCUMENT_ROOT"]."/patricia"; //para saber la ruta donde estan los archivos
}else{
		$rutaGet= $_GET["ruta"];
		$carpeta=$_GET["carpeta"];
		$ruta=$_SERVER["DOCUMENT_ROOT"]."/patricia/$carpeta";
}


if ($gestor = opendir($ruta)) {
    while (false !== ($entrada = readdir($gestor))) {   
 	
 	if(is_dir($ruta."/".$entrada)){ //comparamos la ruta general con el valor 
 			$archivo[]= $entrada;
  		}else{
  			$fichero[]= $entrada;
  		}
 	}
	closedir($gestor);
}
 	foreach($archivo as $valorArch){
 	$tamano=filesize("$ruta/$valorArch");
 	$modificacion=filemtime("$ruta/$valorArch");
 	$modificacion= date("d/M/Y H:i:s", $modificacion);
 	$ruta2=$ruta;
 	$baseRuta=$_SERVER["DOCUMENT_ROOT"];
    	 echo <<<TABLA
        <tr>
        <td><input type="checkbox"></td>
        <td><a href="practica2.php?carpeta=$valorArch&ruta=$ruta2">$valorArch\n</a></td>
        <td>$tamano</td>
        <td>Modificado el: $modificacion</td>
        </tr>
TABLA;
 	}
 	
	foreach($fichero as $valorFich){
 	$tamano=filesize("$ruta/$valorFich");
 	$modificacion=filemtime("$ruta/$valorFich");
 	$modificacion= date("d/M/Y H:i:s", $modificacion);	
    	 echo <<<TABLA
        <tr>
        <td><input type="checkbox"></td>
        <td>$valorFich\n</td>
        <td>$tamano</td>
        <td>Modificado el: $modificacion</td>
        </tr>
TABLA;
 	}


 //para sacar la lista sin ordenar archivos y ficheros, saldran revueltos
    /* Esta es la forma correcta de iterar sobre el directorio. 
    while (false !== ($entrada = readdir($gestor))) {
    	$tamano=filesize($_SERVER["DOCUMENT_ROOT"]."/patricia/$entrada");
    	$modificacion=filemtime($_SERVER["DOCUMENT_ROOT"]."/patricia/$entrada");
    	$modificacion= date("d/M/Y H:i:s", $modificacion);

        echo <<<TABLA
        <tr>
        <td><input type="checkbox"></td>
        <td>$entrada\n</td>
        <td>$tamano</td>
        <td>Modificado el: $modificacion</td>
        </tr>
TABLA;
    }
  
    closedir($gestor);
}
*/
?>

</table>
</body>
</html>