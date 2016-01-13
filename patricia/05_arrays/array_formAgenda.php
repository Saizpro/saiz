<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>HTML5 y CSS Formulario de contacto</title>
<style type="text/css">
body{
	font-family: Verdana;
}
h1{
	color:#2E9AFE ; 
}

</style>

</head> 
<body> 
<h1>Contacto</h1>

<form action="array_agenda.php" method="post">
<p><label for="name">Nombre de usuario:</label> <input type="text" id="name" name="usuario"/>  </p>
<p><label for="email">Email:</label> <input type="text" name="mail"/> </p>
<p><label for="telefono">Teléfono: </label><input type="text" name="telefono" id="telefono"/></p>

<button class="submit" type="submit">Enviar datos</button> 


</form> 
</body> 
</html>