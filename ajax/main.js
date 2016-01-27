$(document).ready(function(){  
    $("#comprobar").click(function(){
        var codigo=$("#codigo").val();
           //alert(codigo); 
        
         $.post("txt/comprobar-codigo.php",
    {
        codigo: codigo,
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
            if(data==0){ //código no válido
                $("#codigo").append("<p>Código no válido</p>");
            }else{    window.location="http://localhost/candanchu/txt/producto.php";
            }
    });
        return false; //Evita recarga de la página
    });
});  