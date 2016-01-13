<?php
//Conectar con el servidor de mysql
$enlace = mysqli_connect('localhost', 'root', '', 'tienda');

//Comprobar si se ha realizado bien la conexión
if (!$enlace) {
    die('Error de Conexión'. mysqli_connect_error());
}
mysqli_query($enlace, "SET NAMES 'utf8'");
?>