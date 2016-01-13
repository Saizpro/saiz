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

$anos=array ("Menos de 25 años", "Entre 25 y 40 años", "Mas de 40 años");
foreach ($anos as $clave=>$valor){
  if($_POST["edad"]==$clave){
    $seleccionado="checked";
  }else{
    $seleccionado="";
  }
   $selectEdad.="<input name=\"edad\" type=\"radio\" value=\"$clave\" $seleccionado>$valor\n";
}

$aficiones=array ("Correr", "Saltar", "Jugar", "Consolas", "leer", "cocinar");
foreach ($aficiones as $clave=>$valor){
  $selecAficiones.="<input type=\"checkbox\" name=\"aficiones[]\" id=\"$valor\" value=\"$clave\"";
if(is_array($_POST["aficiones"])){
    foreach($_POST["aficiones"] as $aficion){
    if($aficion==$clave){
    $selecAficiones.="checked";
 break;
}
}
}
$selecAficiones.="><label for=\"$valor\" >$valor</label>\n";
}
//impresión del formulario
echo <<<HTML
<form name="form1" method="post" action="$_SERVER[PHP_SELF]" validate="novalidate">
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
  <p>
    <label for="telefono">Telefono</label>
    <input type="tel" name="telefono" id="telefono">
  </p>
   <p>
    <label for="edad">Edad</label>
    $selectEdad
  </p>
  <p><label>Aficiones</label>
  $selecAficiones
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
