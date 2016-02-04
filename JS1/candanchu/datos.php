<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://cdn.imnjb.me/libs/jquery.cookiecuttr/1.0/cookiecuttr.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css">    
    <link rel="stylesheet" href="css/jquery.fancybox-buttons.css">
    <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/js.cookie.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.fancybox-buttons.js"></script>
    <script src="js/jquery.fancybox-thumbs.js"></script>
    <script>
        $(document).ready(function(){
            
        $(".sub").click(function(){ 
            var validacion = $("#formulario").validate({
                errorClass: "invalid",
                validClass: "success",
                onkeyup: false,
                rules: {
                    dni: {
                        required: true,
                        rangelength: [9]
                    },
                    cp: {
                        required: true,
                        number: true,
                        rangelength: [5]
                    },
                    telefono: {
                        required: true,
                        number: true,
                        rangelength: [9]
                    }
                    
                },
                messages: {
                    nombre: "Especifica tu nombre",
                    dni: {
                        required: "Tu DNI es necesario",
                        dni     : "Tienes que introducir un DNI válido",
                    },
                    email : {
                        required: "Inserta tu correo electrónico",
                        email   : "Tu correo debe de tener la esructura nombre@dominio.extension"
                    },
                    telefono: "Introduce tu teléfono",    
                    cp:{
                        rangelength: jQuery.validator.format("Tienes que introducir {0} caracteres")
                    },
                    envio: {
                        depends: function(element) {
                            return $(".campos_direccion").addClass("invalid");
                        }
                    },
                },
            });
                if($("#envio").hasClass(".invalid")){
                    $(".campo_direccion").addClass("invalid");
                }
         });   
                
               
            //$(".sub").click(function(){
                
               //$.each(validacion, function(key, element) {
             //      console.log(key, element);
             //   });  
           // });
            
            
            $("[name=forfait]").click(function(){
                    $(".forfi").removeClass("sr-only");
                    $(".campos_direccion").removeClass("sr-only");
                    $(".campos_direccion").addClass("sr-only");
                if($(this).val()=="no"){
                    $(".forfi").addClass("sr-only");
                    $(".campos_direccion").removeClass("sr-only");
                }
            })
            $("[name=envio]").click(function(){
                $(".dire").removeClass("sr-only");
                if($(this).val()=="no"){
                    $(".dire").addClass("sr-only");
                }
            })
            $(".forfait_precio").after("<span>: "+Cookies.get('precio')+"</span><br>");
            $(".fianza").after("<span>: "+6+" euros</span><br>");
            $(".total").after("<span>: "+(parseInt(Cookies.get('precio'))+6)+"euros</span><br>");
        });       
    </script>
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent-->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"http://i.dailymail.co.uk/i/pix/2013/09/22/article-0-18297CEF00000578-775_634x426.jpg","theme":"dark-bottom"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->

    <style>
        .container-fluid{
            background-image: url(http://assets.rollingstone.com/assets/1972/article/the-star-spangled-powder-19720817/181004/large_rect/1421278397/1401x788-468725721.jpg);
            height: auto;
            background-size: cover;
        }
        .candanchu{
            margin: 0 auto;
            margin-top: 200px;
            margin-bottom: 200px;
            display: block;
            width: 90%;   
            background-color: rgba(240,240,240,0.5);
            height: 1000px;
        }
        .candanchu2{
            margin: 0 auto;
            margin-top: 200px;
            margin-bottom: 200px;
            display: block;
            width: 90%;   
            background-color: rgba(240,240,240,0.5);
            height: 150px;            
        }
        .titulo{
            height: 50px;
            width: 100%;
            background-color: rgba(10,10,10,0.3);
            text-transform: uppercase;
            font-weight: bolder;
            color: white;
            padding-left: 15px;
        }
        .form-codigo{
            height: 300px;
            margin: 0 auto;
            margin-top: 100px;
            margin-bottom: 200px;
            display: block;
            width: 50%;
            border: 1px solid black;
            padding: 0 40px 7px 40px;
            background-color: whitesmoke;
            opacity: 1; 
        }
        .caja, .caja2{
            background-color: white;
            border: 2px solid black;
            text-align: center;
            height: 100%;
            font-size: 2em;
        }
        .caja-selected{
            background-color: darkblue;
            color: aliceblue;
        }
        a{
            padding-bottom: 100px;
        }
        .cincuenta{
            cursor: pointer;
            width: 40%;
            display: inline;
            margin: 20px;
        }
        .form-control{
            width: 50%;
            margin: 0 auto;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        input[type=submit]{
            margin: 0 auto;
            margin-top: 50px;
            width: 150px !important;
        }
        .success{
            border: 3px solid palegreen;
        }
        .invalid{
            border: 3px solid indianred;
        }
        label.invalid{
            /*display: none !important;*/
            border: none;
            font-size: 10px;
            display: inline;
        }
        #forfait-error, #envio-error{
            display: none !important;
        }
    </style>
</head>
<body>
<div class="container-fluid">
     <div class="candanchu2">
         <div class="titulo"> 
             <h2>Productos</h2>
        </div>
            <div class="caja">
                <b class="forfait_precio">Forfait</b>
                <b class="fianza">Fianza</b>
                <b class="total">Total</b>
            </div>
    </div>     
   <div class="candanchu">
     <div class="titulo"> 
         <h2>Tus datos</h2>
    </div>     
        <div class="caja2 form-group">
            <form action="#" id="formulario">
                <label class="sr-only" for="dni">DNI </label><input class="form-control" type="text" name="dni" id="dni" placeholder="DNI" required>
                 <label class="sr-only" for="email">Email</label><input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
                <label class="sr-only" for="nombre">Nombre</label><input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                <label class="sr-only" for="apellido">Apellido</label><input class="form-control" type="text" name="apellido" id="apellido" placeholder="Apellidos" required>
                <label class="sr-only" for="cp">Código postal</label><input class="form-control" type="text" name="cp" id="cp" placeholder="Código postal" required>
            <div class="campos_direccion">
                <label for="envio" class="form-inline h4">Envío a mi domicilio</label>
                <input class="radio-inline" type="radio" id="envio" name="envio" value="si" required>
                <label for="no_envio" class="form-inline h4">Recoger en la estación</label>
                <input class="radio-inline" type="radio" id="no_envio" name="envio" value="no" required>
            <fieldset class="sr-only dire">
                <label class="sr-only" for="direccion">Inserta tu dirección</label><input class="form-control" type="text" name="direccion" id="direccion" placeholder="Dirección" required>
                <label class="sr-only" for="telefono">Teléfono</label><input class="form-control" type="number" name="telefono" id="telefono" placeholder="Teléfono" required>
            </fieldset>
            </div>      
                <div class="cincuenta btn btn-lg btn-primary btn-block">
                <label  for="forfait">Tengo forfait</label>
                <input class="sr-only" type="radio" id="forfait" name="forfait" value="si" required>
                </div>
                <div class="cincuenta btn btn-lg btn-primary btn-block">
                <label for="no_forfait">No tengo forfait</label>
                <input class="sr-only" type="radio" id="no_forfait" name="forfait" value="no" required>
                </div>
            <fieldset class="sr-only forfi">
                    <label class="sr-only" for="numero_forfait">Inserta tu forfait</label> <input class="form-control" type="text" id="numero_forfait" name="numero_forfait" placeholder="Inserta tu forfait" required>
            </fieldset>
            <input type="submit" class="sub btn btn-lg btn-primary btn-block" value="Continuar"> 
            </form>
         </div> 
     </div>
     <div class=errores></div>
     
     
     

</div>

 <footer>
     
 </footer>
  </body>
</html>