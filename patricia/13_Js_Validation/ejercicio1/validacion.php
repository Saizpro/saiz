<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<LINK href="estilos.css" rel="stylesheet" type="text/css">
<script src="jquery-1.11.3.js"></script>
<script src="jquery.validate.js"></script>

<script>
//para 
	$.validator.setDefaults({
		submitHandler: function() {
			//para coger las variables y que las mande
			var nombre=$("#nombre").val();
			var pass=$("#pass").val();
			var enviar=true;
			$.ajax({
				type:"POST",
				//url:"validacion.php",  //la url si se hace todo en el mismo archivo no hace falta ponerla
				data:{nombre: nombre, pass: pass, enviar: enviar},  //nombre de la variable que vas a pasar y el valor
				success: function(data){   //si tiene exito que haga lo que sea, data sera la palabra que queramos
					$('#centrar').fadeOut("slow", function(){
					$('#centrar').html(data);
					$('#ok').fadeIn("slow");
					//alert("submitted!");
					});
				}
			});
		}
	});

//esta parte es para que valide el formulario
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#formVal").validate();

	});

	</script>
</head>

<body>
<?php
if(isset($_POST["enviar"])){
	$usuario=$_POST["nombre"]."|".$_POST["pass"]."\n";  
	$puntero=fopen("usuarios.txt", "a");
	if (fwrite($puntero, $usuario)){ 	//porque devuelve enteros y hay que comprobarlo
		echo "<div id=\"ok\">Su registro ha sido realizado </div>";
	}
}else{
		
?>
<div id="centrar">
<form action="#" method="post" id="formVal">
<fieldset>
<h1>Crear un nuevo usuario</h1>
<p><label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre" required></p>
<p><label for="password">Contraseña: </label><input type="password" name="pass" id="pass" required></p>
<p><label for="enviar"></label><input type="submit" name="enviar" id="enviar" value="Registrar"></p>
</fieldset>
</form>
</div>

</body>
</html>
<?php
}
?>