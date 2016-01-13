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
    <th>NOMBRE</th>
    <th>TAMAÑO</th>
    <th>MODIFICADO</th>
</tr>
<?php
if(!isset($_GET["carpeta"])){
    $ruta=$_SERVER["DOCUMENT_ROOT"]."/cursophp";
}else{
    $carpeta=$_GET["carpeta"];
    $ruta=$_SERVER["DOCUMENT_ROOT"]."/cursophp/$carpeta";

}
if ($gestor = opendir($ruta)) {
 	while (false !== ($entrada = readdir($gestor))) {	
        if(is_dir($ruta."/".$entrada)){ //comparamos la ruta general con el valor 
                    $carpetas[]= $entrada;
        }else{
                    $ficheros[]= $entrada;
        }
    }
    closedir($gestor);
}
foreach ($carpetas as $valor){
        $tamano=filesize("$ruta/$valor");
        $modificacion=filemtime("$ruta/$valor");
        $modificacion= date("d/M/Y H:i:s", $modificacion);

        echo <<<TABLA
        <tr>
        <td><input type="checkbox"></td>
        <td><a href="practica2.php?carpeta=$valor">$valor</a></td>
        <td>$tamano</td>
        <td>Modificado el: $modificacion</td>
        </tr>
TABLA;
    }
foreach ($ficheros as $valor){
        $tamano=filesize("$ruta/$valor");
        $modificacion=filemtime("$ruta/$valor");
        $modificacion= date("d/M/Y H:i:s", $modificacion);

        echo <<<TABLA
        <tr>
        <td><input type="checkbox"></td>
        <td>$valor\n</td>
        <td>$tamano</td>
        <td>Modificado el: $modificacion</td>
        </tr>
TABLA;
    }

?>
</table>
</body>
</html>