$(document).ready(function(){   //se escribe siempre para ver si el documento ha cargado
	$("#comunidades").change(function(){
		var comunidadSel=$("#comunidades").val();
		//alert(comunidadSel);
		$.ajax({
			type:"POST",
			url:"proceso_provincias.php",
			data:{comunidadSel: comunidadSel},  //nombre de la variable que vas a pasar y el valor
			success: function(data){
				$('div').html(data);
			}
		});
		return false;  //anular la accion(action) del formulario y no esta recargando cada instante
	});
});