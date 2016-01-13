
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
<title>Elevetn Edition :)</title>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery.validate.js"></script>
	<script>
	$.validator.setDefaults({
		submitHandler: function() {
			$.ajax({
           type: "POST",
           url: "enviar-formulario.php",
           data: $("#contacto").serialize(), // serializes the form's elements.
           success: function(data)
           {
		   	   $("#contacto").css ("display", "none"); //para ocultarlo y se aprecie el fadeIn
               /*$("#contacto").text(data);*/  $("#contacto").html("<strong>"+data+"<strong>");
		 	   $("#contacto").fadeIn(1000);
           }
         });

    return false; // avoid to execute the actual submit of the form.
		}
	});

	$().ready(function() {
		// validate the comment form when it is submitted
		/*$("#commentForm").validate();*/

		// validate signup form on keyup and submit
		$("#contacto").validate({
			rules: {
				website: {
					url: true
				}
			},
			messages: {
				name: "Introduce tu nombre",
				website: {
					required: "Introduce una URL",
					url: "Que sea válida"
				},
				email: {
					required: "Introduce un email",
					email: "Que sea válido"
				}
			}
		});

	
	});
	</script>

	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style type="text/css">
#say {
	color: #4083B5;
}

</style>
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
<div class="container">
<?php include("cabecera.inc.php"); ?>
<article id="hello">

<section id="formulario">
<div class="clearfix"></div>
	<h2 class="sixteen columns">DISCUSS YOUR PROJECT</h2>
	<form  class="ten columns alpha" name="contacto" id="contacto" method="post" action="enviar-formulario.php">
	
	  <p class="four columns"><label for="name">Name</label>
	  <input class="remove-bottom" type="text" name="name" id="name" placeholder="Name" required >
      This type is required</p>
     
	  <p class="four columns"><label for="website">Website</label>
	  <input class="remove-bottom" type="text" name="website" id="website" placeholder="Website" required>
      This type is required</p>
     
	  <p class="four columns"><label for="email">email</label>
	  <input class="remove-bottom" type="email" name="email" id="email" placeholder="Email" required>
      This type is required</p>
      
	  <p class="four columns"><label for="budget">budget</label>
	  <input type="text" name="budget" id="budget" placeholder="Budget"></p>
      
      <p ><label for="message"></label>
	  <textarea class="eight columns"  name="message" id="message" cols="45" rows="5" placeholder="Message"></textarea>	      </p>
	  
	  <p class="three columns">
	    <label for="send">send</label>
	    <input type="submit" name="send" id="send" value="Send">
	  </p>
	</form>
    <div id="contacto" class="five columns">
	<p class="grosor remove-bottom">Call: </p>
	<p>01414048360</p>
	<p class="grosor remove-bottom">Email:</p>
	<p> <a href="mailto:hello@eleventhedition.com" target="_top">hello@eleventhedition.com</a></p>
    </div>
</section>
</article>
<?php include("pie.inc.php"); ?>
</div>


<!-- End Document
================================================== -->
</body>
</html>