<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Sitio web</title> 
</head> 
<body> 
<?php
include("cabecera.inc.php");
?>
<section>
<div>
<h3>Contacto</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
<p>Quisque in sodales tellus. Aenean euismod vehicula viverra. </p> 
<p>Integer lacinia ligula elit, tempus scelerisque arcu dictum aliquet. </p> 
<form action="#" method="post">

<p><label for="email">Email:</label> <input type="email" name="email"/> </p>
<p><label for="comentarios">Comentarios:</label> <textarea name="comentarios" cols="40" rows="6"></textarea>  </p>

<button class="submit" type="submit">Enviar mensaje</button> 
</form>
</section>


<?php
include("pie.inc.php");
?>

</body>
</html>