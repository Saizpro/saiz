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