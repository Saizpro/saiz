<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Zona de administrador - Tienda camisetas</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
<script src="js/jquery-1.11.3.js"></script>
<script src="js/jquery.validate.js"></script>
<script>

 $.validator.setDefaults({
    submitHandler: function() {
  //alert("sdfsdf");
       var referencia=$("#referencia").val();
         var descripcion=$("#descripcion").val();
          var precio=$("#precio").val();
         var persona=$("#persona").val();
        var manga=$("#manga").val();
         var alta=true;
        
         $.ajax({
            type: "POST",
            url: "insertar-form.php",
            data: {referencia: referencia, descripcion: descripcion, precio: precio, persona:persona, manga:manga, alta:alta},
            success: function(msg) {
                    $('form').fadeOut("slow", function(){
                              $('form').html(msg);
                              $('form').fadeIn("slow");   
                    });
                }  
               });
                    //alert(data);
             }
            });     

//esta parte es para que valide el formulario
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#form1").validate();

	});

	</script>
</head>
<body>
<?php

if(isset($_POST["alta"])){
  $referencia=$_POST["referencia"];
  $precio=$_POST["precio"];
  $persona=$_POST["persona"];
  $manga=$_POST["manga"];
  $descripcion=$_POST["descripcion"];
      echo <<<SALIR
      <p>Su registro ha sido realizado</p><p>$referencia</p><p>$precio</p><p>$persona</p><p>$manga</p><p>$descripcion</p>
SALIR;
}
?>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
  <header>
  <h1>Zona de administrador</h1>
  <nav>
  <ul>
  <li><a href="insertar-form.php">Insertar productos</a></li>
  <li><a href="#">Modificar productos</a></li>
  </ul>
  </nav>
  </header>