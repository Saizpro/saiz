	<!-- enviar formulario por ajax-->
$('#contacto').validator().on('submit', function (e) {
  				if (e.isDefaultPrevented()) {
   					//alert("no lo has rellenado");
  				} else {
   					//alert("Si esta bien rellenado");
    	$.ajax({
           type: "POST",
           url: "enviar-formulario.php",
           data: $("#contacto").serialize(), // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
			    $("#contacto").css ("display", "none"); //para ocultarlo y se aprecie el fadeIn
                $("#contacto").html("<strong>"+data+"<strong>");
		 	    $("#contacto").fadeIn(1000);
           }
         });

    return false; // avoid to execute the actual submit of the form.
  }
})
$(document).ready(function(){
						   
	$( "#herms" ).click(function(){
		 var mostrar = $('#collapse1').css("display");
		//alert(mostrar);
		if(mostrar=='block'){//lo vas a cerrar
			var src="img/general1.png";
		}else{
			var src="img/hermsbg.png";	
		}
		$("#maquina").attr('src',src);
        });
		
  	$( "#macerador" ).click(function(){
		var mostrar = $('#collapse2').css("display");
		//alert(mostrar);
		if(mostrar=='block'){//lo vas a cerrar
			var src="img/general1.png";
		}else{
			var src="img/Macerado542.png";	
		}
		$("#maquina").attr('src',src);
        });
		
		 
	$( "#hervidor" ).click(function(){
		var mostrar = $('#collapse3').css("display");
		//alert(mostrar);
		if(mostrar=='block'){//lo vas a cerrar
			var src="img/general1.png";
		}else{
			var src="img/Hervido542.png";	
		}
		$("#maquina").attr('src',src);
        });
		
	$( "#gas" ).click(function(){
		var mostrar = $('#collapse4').css("display");
		//alert(mostrar);
		if(mostrar=='block'){//lo vas a cerrar
			var src="img/general1.png";
		}else{
			var src="img/gas542.png";	
		}
		$("#maquina").attr('src',src);
        });
		 
	
  		
});

