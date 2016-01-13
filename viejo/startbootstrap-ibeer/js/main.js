<!-- efecto parallax-->
$(document).ready(function(){
	$('.fondoF').parallax({imageSrc: 'img/trigo.jpg'});
	$('.img1').parallax({imageSrc: 'img/IMG_20150124_125717.jpg'});
	
	<!-- Script to Activate the Carousel -->
	 $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
	 
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

<!--Acoordeon-->
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      icons: icons
    });
    $( "#toggle" ).button().click(function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });

	 
	 
	 
})