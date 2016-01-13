
<!DOCTYPE html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset= utf-8" /> 
<title>Compra</title> 
 <LINK href="estilos.css" rel="stylesheet" type="text/css">
 <script src="jquery-1.11.3.js"></script>

 <script>
$(document).ready(function(){
	//ponemos submit en vez de click porque sino lo manda con pasar el raton por encima, en el type de enviar ponemos submit en vez de button
	$('form').submit(function(){ 
		/*var nombre=$("#nombre").val();
		var email=$("#email").val();
		var comentarios=$("#comentarios").val();
		nombre:nombre, email:email, comentarios: comentarios*/

		$.ajax({
			type:"POST",
			url:"gmail.php",
			data:$('form').serialize(),  //nombre de la variable que vas a pasar y el valor
			success: function(data){   //si tiene exito que haga lo que sea, data sera la palabra que queramos
				$('form').fadeOut("slow", function(){
					$('form').html(data);
					$('form').fadeIn("slow");
					});
				}
				
			});
		return false;  //anular la accion(action) del formulario y no esta recargando cada instante
	});
});
</script>
</head> 
<body> 

<form  action="" method="post">
<div id="resultado"></div>
<h1>Formulario mandado con PHPMailer y ajax</h1>
<p><label for="nombre">Nombre:</label> <input type="text" id="nombre" name="nombre"/>  </p>
<p><label for="email">Email:</label> <input type="email" id="email" name="email"/> </p>
<p><label for="comemtarios">comentarios:</label><textarea type="text" id="comentarios" name="comentarios"></textarea>
<p><input type="submit" id="enviar" value="enviar"></p>
</form> 

</body> 
</html>
