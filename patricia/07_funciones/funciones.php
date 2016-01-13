<?php
//funcion crear formulario
function mostrarform()
{
echo <<<FORMULARIO
  <h1>FORMULARIO DE CONTACTO</h1>
  <form action="#" method="post">
  <p><label for="nombre">Nombre </label><input type="text" name="nombre" id="nombre"></p>
  <p><label for="email">Email </label><input type="text" name="email" id="email"></p>
  <p><label for="direccion">Dirección </label><input id="direccion" name="direccion"></p>
  <p><label for="provincia">Provincia </label><select name="provincia">
                                    <option value="">*Selecciona tu provincia</option>
                                    <option value="Alava">Álava</option>
                                    <option value="Albacete">Albacete</option>                         
                                </select>
  <p><label for="telefono">Telefono </label><input id="telefono" name="telefono"></p>
  <p><input type="submit" name="enviar" id="enviar" value="Enviar"></p>
</form>
FORMULARIO;
}

//creamos la funcion de validar
function validar($nombre, $email, $direccion, $provincia, $telefono){
	//comprobamos el nombre (min 3 caracteres)
	if(preg_match("/.{3,}/", $nombre)){
	$flagnombre=1;
	}else{
	echo "<p>Error al introducir el nombre.</p>";
	}

	//comprobamos el email x@x.x
	//if(preg_match("/@.+\./", $email)) FORMA FACIL
	if(preg_match('/^[^@\s]+@([a-z0-9]+\.)+[a-z]{2,}$/i', $email))    //FORMA COMPLETA
	{
	$flagemail=1;
	}else{
	echo "<p>Error al introducir el email.</p>";
	}

	//comprobamos la direccion (min 20 caracteres)
	if(preg_match("/.{20,}/", $direccion))
	{
	$flagdireccion=1;
	}else{
	echo "<p>Error al introducir la dirección.</p>";
	}

	//comprobamos que el usuario eligio una provincia
	if($provincia!="*Selecciona tu provincia")
	{
	$flagprovincia=1;
	}else{
	echo "<p>Error, selecciona una provincia.</p>";
	}

	//comprobamos el numero de telefono que sea de España 9 caracteres el primero 9 8 7 6
	if(preg_match("/(^[9|8|7|6]\d{8}$)/", $telefono))
	{
	$flagtelefono=1;
	}else{
	echo "<p>Error al introducir el telefono.</p>";
	}

	//si el usuario introduce todos los datos correctamente
	if($flagnombre==1 && $flagemail==1 && $flagdireccion==1 && $flagprovincia==1 && $flagtelefono==1)
	{
	echo "<p>Formulario enviado correctamente.</p>";
	//si los datos son validos la función devuelve 1
	return 1;
	}
}

//función mostrar datos
function mostrardatos($nombre, $email, $direccion, $provincia, $telefono)
{
	echo "<p><h1>DATOS DEL USUARIO:</h1></p>";
	echo "<p><strong>Nombre</strong>: $nombre</p>";
	echo "<p><strong>Email</strong>: $email</p>";
	echo "<p><strong>Dirección</strong>: $direccion</p>";
	echo "<p><strong>Provincia</strong>: $provincia</p>";
	echo "<p><strong>Telefono</strong>: $telefono</p>";
}

?>