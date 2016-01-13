<!DOCTYPE html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Suma js</title> 
<style>
#resultado{
	display:none;
	width:300px;
	height: 30px;
	background-color: #D358F7;
	text-align: center;
	padding-top: 5px;

}

</style>
<script src="jquery-1.11.3.js"></script>
<script>
$(document).ready(function(){
	$("#sumar").click(function(){
		var num1=$("#num1").val();
		var num2=$("#num2").val();

		$.ajax({
			type:"POST",
			url:"proceso_suma.php",
			data:{num1: num1, num2: num2},  //nombre de la variable que vas a pasar y el valor
			success: function(data){   //si tiene exito que haga lo que sea, data sera la palabra que queramos
				$('#resultado').html(data).fadeIn("slow");
			}
		});
		return false;  //anular la accion(action) del formulario y no esta recargando cada instante
	});
});
</script>
</head> 
<body> 
<h1>Sumar usando javascript</h1>

<form  action="#" method="post">
<p><label for="num1">Numero 1:</label> <input type="text" id="num1"/></p>
<p><label for="num2">Numero 2:</label> <input type="text" id="num2"/></p>
<p><input type="button" id="sumar" value="Sumar"></p>
<div id="resultado"></div>
</form> 
</body> 
</html>