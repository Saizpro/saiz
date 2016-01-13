<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Nombre: ".$_POST["inputName"]."\n";
$mensaje="Email: ".$_POST["inputEmail"]."\n";
$mensaje.="Mensaje: ".$_POST["message"];

//enviar el formulario
if(mail("mariajo.arnal.argon@gmail.com", "Formulario de contacto", $mensaje))
	echo "El formulario nos ha llegado correctamente.";
else
	echo "El formulario no se ha enviado";
?>
           
              <form data-toggle="validator" role="form" id="contacto">
                 <div class="row"> 
                   <div class="col-md-6">
              		<div class="form-group">
                		<label for="inputName" class="control-label">Tu Nombre</label>
                		<input type="text" class="form-control" name="inputName" id="inputName" placeholder="Escribe tu nombre"                        required>
                 		<div class="help-block with-errors"></div>
             	 	</div>
                	</div><!--cierra columna de nombre-->
                    
                	<div class="col-md-6">
              		<div class="form-group">
                		<label for="inputEmail" class="control-label">Tu Email</label>
                		<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" 		                        data-error="El mail no es válido" required>
                		<div class="help-block with-errors"></div>
              		</div>
               		</div><!--cierra columna de email-->
            </div><!--cierra row de formulario nombre y email-->
            
              	 	<div class="form-group">
                		<label for="message" class="control-label">Tu Mensaje</label>
                		<textarea class="form-control" name="message" id="message"  data-error="Bruh, that email address is                         invalid" required></textarea>
                	</div>
              
             		<div class="form-group">
                		<button type="submit" class="btn btn-primary">Submit</button>
              		</div>
            </form>
    
               
              
</section>
