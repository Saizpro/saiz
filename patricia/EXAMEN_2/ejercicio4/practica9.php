<?php
if(isset($_COOKIE["usuario"])){ 
    header("location: otro_archivo.php");
  }else{
?>
<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Compra</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
</head> 
<body> 

<form action="#" method="post">
<p><label>Aficiones:</label></p>
<p><label for="leer">Leer</label><input type="checkbox" name="aficiones[]" id="leer" value="leer"/></p>
<p><label for="internet">Internet</label><input type="checkbox" name="aficiones[]" id="internet" value="internet"/></p>
<p><label for="pasear">Pasear</label><input type="checkbox" name="aficiones[]" id="pasear" value="pasear"/></p>
<p><label for="salir">Salir</label><input type="checkbox" name="aficiones[]" id="salir" value="salir"/></p>
<button class="submit" type="submit" name="enviar">Enviar mensaje</button> 

<?php

if(isset ($_POST["enviar"])){

if(is_array($aficiones)){
    $aficiones= $_POST["aficiones"];
   $aficiones=implode(",", $_POST["aficiones"]);
}
   setcookie("usuario", $aficiones, time()+ 3600); //definir la variable de cookie
   header("location: otro_archivo.php");

 }
}
?>
</body>
</html>