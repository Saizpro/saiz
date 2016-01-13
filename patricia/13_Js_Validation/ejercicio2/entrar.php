<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="contacto.css">
<script src="jquery-1.11.3.js"></script>
<script src="jquery.validate.js"></script>


  <script>
  $.validator.setDefaults({
    submitHandler: function() {
         var nombre=$("#nombre").val();
         var pass=$("#pass").val();
         var entrar=true;
        
         $.ajax({
            type: "POST",
            url: "login.php",
            data: {nombre: nombre, pass: pass, entrar: entrar},
            success: function(msg) {

                if(msg==1){
                    $('#msgerror').html("Usario y/o password incorrecto");
                }else{
                    $('form').fadeOut("slow", function(){
                    		$('#msgerror').hide();
                              $('form').html(msg);
                              $('form').fadeIn("slow");   
                    });
                }  
                    //alert(data);
                }
            });     


      //alert("submitted!");
    }
  });

  $().ready(function() {
    // validate the comment form when it is submitted
    $("#formA").validate();
  });
  </script>
</head>

<body>

<form id="formA" action="login.php" method="post">
<fieldset>
<h1>Entra al sistema</h1>
<p><label for="nombre">Login </label><input type="text" name="nombre" id="nombre" required></p>
<p><label for="password">Password </label><input type="password" name="pass" id="pass" required></p>
<p><label for="enviar">Entrar </label><input type="submit" name="entrar" id="entrar" value="Entrar"></p>
</fieldset>
</form>
<div id="msgerror"></div>

</body>
</html>
