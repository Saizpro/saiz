<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Práctica 2</title>
</head>
<body>
<h1> Gestor de Archivos </h1>
<table border="1">
    <tr>
        <th></th>
        <th>Nombre</th>
        <th>Tamaño</th>
        <th>Modificado</th>
        <th>Acción</th>
    </tr>
<?php
if(!isset($_GET["ruta"])){
    $ruta=$_SERVER["DOCUMENT_ROOT"]."/CursoPHP";
}else{
    $carpeta=$_GET["carpeta"];
    $ruta=$_GET["ruta"];
    $ruta="$ruta/$carpeta";
}
//if ($gestor=opendir("./")){     Esto es lo mismo que la línea de abajo.
if ($gestor=opendir($ruta)){
    while (false !== ($entrada = readdir($gestor))) {
        if(is_dir($ruta."/".$entrada)){ //comparamos la ruta general con el valor 
                    $directorios[]=$entrada;
        }else{
                    $archivos[]=$entrada;
        }
    }
    closedir($gestor);
}
       foreach ($directorios as $valor){
        $tamano="";
        $mod=filemtime("$ruta/$valor");
        $modificacion= date("d/M/Y H:i:s", $mod);

        echo <<<TABLA
        <tr>
        <td><input type="checkbox"></td>
        <td><a href="practica2.php?ruta=$ruta&carpeta=$valor">$valor</a></td>
        <td>$tamano</td>
        <td>$modificacion</td>
        <td>Renombrar</td>
        </tr>
TABLA;
    }
foreach ($archivos as $valor){
        $tamano=filesize("$ruta/$valor");
        $mod=filemtime("$ruta/$valor");
        $modificacion= date("d/M/Y H:i:s", $mod);

        echo <<<TABLA
        <tr>
        <td><input type="checkbox"></td>
        <td>$valor\n</td>
        <td>$tamano</td>
        <td>Modificado el: $modificacion</td>
        <td>Renombrar</td>
        </tr>
TABLA;
    }
echo <<<BOTONES
</table>
<p>
  <label for="hacer"></label>
  <select name="hacer" id="hacer">
    <option>Con los archivos escogidos</option>
    <option>Mover a otra carpeta</option>
    <option>Borrado por completo</option>
    <option>Crear archivo zip</option>
  </select>
</p>
<form name="form1" method="post" action="">
  <p><label for="newfold"></label>
  <input type="submit" name="newfold" id="newfold" value="Crear una carpeta">
  <label for="select"></label>
  <input type="submit" name="select" id="select" value="Seleccionar todo">
  <label for="noselect"></label>
  <input type="submit" name="noselect" id="noselect" value="No seleccionar ninguno">
</form>
<form name="form4" method="post" action="practica2-subir.php">
  <label for="subir"></label>
  <input type="hidden" name="ruta" value="$ruta">
  <input type="submit" name="subir" id="subir" value="Subir archivo">
  </p>
</form>
BOTONES;
?>
</body>
</html>