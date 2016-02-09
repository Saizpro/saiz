$(document).ready(function(){
    $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
    var validacion = $("#formulario").validate({
        submitHandler: function(form) {
            var nombre = $("#nombre").val();
            var email = $("#email").val();
            var comentarios = $("#comentarios").val();          
            $.post("anadelia-enviar.php", {nombre: nombre, email: email, comentarios: comentarios})
                .done(function(data) {
                    $("form").html("<div>"+data+"</div>");
                    $("div").animate({
                        width: '+=800px',
                    });
                    $("div>p").animate({
                        "padding-left" : '+=700px',
                    });
                    $("div").animate({
                        height: '+=600px',
                    });
                    $("div>p").animate({
                        "padding-top": '+=550px',
                    });
                    $("div").animate({
                        width: '-=800px',                    
                    });
                    $("div>p").animate({
                        "padding-left" : '-=700px',
                    });
                    $("div").animate({
                        height: '-=600px',
                    });
                    $("div>p").animate({
                        "padding-top": '-=550px',
                    });            
                });
            return false;
        }
    });
});
    
          $('.demo-link').click(function(event) {
        $.starwipe($(event.target).attr('href'));
        event.preventDefault();
      });
    
    
   
       