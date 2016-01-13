<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejercicio 1 del Examen 1</title>
<script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function() {
 $("#marcar").click(function() {
   for (i=0;i<document.f1.elements.length;i++) 
      if(document.f1.elements[i].type == "checkbox")	
         document.f1.elements[i].checked=1 
});
});
</script>
</head>
<body>
<form name="f1"> 
Nombre: <input type="text" name="nombre"> 
<br> 
<input type="checkbox" name="ch1"> Opcion 1 
<br> 
<input type="checkbox" name="ch2"> Opcion 2 
<br> 
<input type="checkbox" name="ch3"> Opcion 3 
<br> 
<input type="checkbox" name="ch4"> Opcion 4 
<br> 
//Otro campo de formulario: 
<select name=otro> 
<option value="1">Seleccion 1 
<option value="2">Seleccion 2 
</select> 
<br> 
<input type="submit"> 
<br> 
<br> 
<a id="marcar" href="#">Marcar todos</a> | 
<a id="desmarcar" href="#">Marcar ninguno</a> 
</form>
	
</body>
</html>