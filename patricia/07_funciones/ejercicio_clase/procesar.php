<?php
function validate_form(){
	if(strlen($_POST["nombre"])<3)
		$errores[]="El campo nombre es obligatorio y al menos 3 caracteres";
	if(strlen($_POST["email"])<3)
    $errores[]="El campo email es obligatorio y al menos 3 caracteres";
  if(is_array($errores)){
    return $errores;
	}else{
		return true;
	}
	
	}
include ("cabecera.inc.php");
// Comprobamos nos envían datos
if( array_key_exists('enviar',$_POST)){
// Comprobamos los datos que nos han pasado
$validar=validate_form();
if(!is_array($validar)){ //si validate_form es verdadero
	echo "Todo Ok";
// Datos correctos, hacemos algo con ellos
//process_form();
}else {
// Datos incorrectos, mostrarmos errores y el formulario
show_form($validar);
}
}else{
// Mostramos el formulario
show_form();
}

// Mostramos el formulario
function show_form($errores=""){

if(is_array($errores)){	
foreach ($errores as $valor){
	echo "<p>";
  echo $valor;
	echo "</p>";
}
}

/*
$provincias=array ("Selecciona provincia", "Zaragoza", "Huesca", "Teruel");
$selectProvincias="<select name=\"provincia\" id=\"provincia\">\n";
foreach ($provincias as $clave=>$valor){
  if($_POST["provincia"]==$clave){
    $seleccionado="selected";
  }else{
    $seleccionado="";
  }
   $selectProvincias.="<option value=\"$clave\" $seleccionado>$valor</option>\n";
}
$selectProvincias.="</select>\n";
*/
$provincias=array ("Selecciona provincia", "Zaragoza", "Huesca", "Teruel");
$selectProvincias="<select name=\"provincia\" id=\"provincia\">\n";
foreach ($provincias as $clave=>$valor){
   $selectProvincias.="<option value=\"$clave\"";
   if($_POST["provincia"]==$clave){
      $selectProvincias.="selected";
    }
  $selectProvincias.=">$valor</option>\n";
}
$selectProvincias.="</select>\n";

$edad=array("Menos de 25", "Entre 25 y 40", "Más de 40");
foreach ($edad as $clave=>$valor){
$selectEdad.="<input type=\"radio\" name=\"edad\" id=\"edad_$clave\" value=\"$clave\"";
  if($_POST["edad"]==$clave){
      $selectEdad.="checked";
    }
  $selectEdad.="><label for=\"edad_$clave\">$valor</label>\n";
}



$aficiones=array("Deporte", "Ver la TV", "Leer", "Salir", "Pasear");
foreach ($aficiones as $clave=>$valor){
$selectAficiones.="<input type=\"checkbox\" name=\"aficiones[]\" id=\"aficiones_$clave\" value=\"$clave\"";
  if(is_array($_POST["aficiones"])){
    foreach ($_POST["aficiones"] as $aficion){
      if($aficion==$clave){
        $selectAficiones.="checked";
        break;
      }
    }
  }
  $selectAficiones.="><label for=\"aficiones_$clave\">$valor</label>\n";

}




//impresión del formulario
echo <<<HTML
<form name="form1" method="post" action="$_SERVER[PHP_SELF]" validate="novalidate">
<div><label>Aficiones</label>
<p class="checkboxes">
  $selectAficiones
  </p></div>
<p><label for="nombre">Nombre</label>
  <input type="text" name="nombre" id="nombre" value="$_POST[nombre]"></p>
  <p>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion">
  </p>
  <p>
    <label for="provicia">Provincia</label>
    <!-- select provincias -->$selectProvincias
  </p>
  <p class="checkboxes"><label>Edad</label>
   $selectEdad
  </p>
  <p>
    <label for="telefono">Telefono</label>
    <input type="tel" name="telefono" id="telefono">
  </p>
  <p>
    <label for="enviar"></label>
    <input type="submit" name="enviar" id="enviar" value="Enviar">
  </p>
</form>
HTML;
}


?>



</div>
</div>     
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->





</body>
</html>
