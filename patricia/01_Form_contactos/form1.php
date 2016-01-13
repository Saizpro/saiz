<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>HTML5 y CSS Formulario de contacto</title> 
</head> 
<body> 
<h1>Contacto</h1>

<form enctype="multipart/form-data" action="gmail.php" method="post" >
<p><label for="nombre">Nombre:</label> <input type="text" id="nombre" name="nombre"/>  </p>
<p><label for="email">Email:</label> <input type="email" name="email"/> </p>
<p><label for="comentarios">Comentarios:</label> <textarea name="comentarios" cols="40" rows="6"></textarea>  </p>
<p><label for="archivos">Archivos para enviar:</label><input name="archivos" type="file"/></p>
<button class="submit" type="submit">Enviar mensaje</button> 


</form> 
</body> 
</html>