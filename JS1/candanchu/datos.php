<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://cdn.imnjb.me/libs/jquery.cookiecuttr/1.0/cookiecuttr.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css">    
    <link rel="stylesheet" href="css/jquery.fancybox-buttons.css">
    <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/js.cookie.js"></script>
   <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.fancybox-buttons.js"></script>
    <script src="js/jquery.fancybox-thumbs.js"></script>
    <script>
        $(document).ready(function(){
            $("[name=forfait]").click(function(){
                    $("fieldset").removeClass("sr-only");
                if($(this).val()=="no"){
                    $("fieldset").addClass("sr-only");
                }
            })
            $("[name=envio]").click(function(){
                $(".dire").removeClass("sr-only");
                if($(this).val()=="no"){
                    $(".dire").addClass("sr-only");
                }
            })
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
            background-image: url(https://unavueltadeldestino.files.wordpress.com/2013/03/candanchu_paisaje.jpg);
            height: auto;
        }
        .candanchu{
            margin: 0 auto;
            margin-top: 200px;
            margin-bottom: 200px;
            display: block;
            width: 90%;   
            background-color: rgba(240,240,240,0.5);
            height: 500px;
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
        .caja{
            cursor:pointer;
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
    </style>
</head>
<body>
<div class="container-fluid">
     
   <div class="candanchu">
     <div class="titulo"> 
         <h2>Tus datos</h2>
    </div>     
        <div class="caja2">
            <form action="">
                <label for="dni">DNI </label> <input type="text"><br>
                <label for="envio">Envío a mi domicilio</label>
                <input type="radio" id="envio" name="envio" value="si"><br>
                <label for="no_envio">Recoger en la estación</label>
                <input type="radio" id="no_envio" name="envio" value="no"><br>
                <div class="sr-only dire">
                <label for="direccion">Inserta tu dirección</label><input type="text" name="direccion" id="direccion">
                </div>
                <div class="cincuenta btn btn-lg btn-primary btn-block">
                <label for="forfait">Tengo forfait</label>
                <input class="sr-only" type="radio" id="forfait" name="forfait" value="si">
                </div>
                <div class="cincuenta btn btn-lg btn-primary btn-block">
                <label for="no_forfait">No tengo forfait</label>
                <input class="sr-only" type="radio" id="no_forfait" name="forfait" value="no">
                </div>
                <br>
                <fieldset class="sr-only">
                    <label for="numero_forfait">Inserta tu forfait</label> <input type="number" id="numero_forfait" name="numero_forfait">
                </fieldset>
            </form>
         </div> 
         <a class="btn btn-lg btn-primary btn-block" href="datos.php">Continuar</a> 
     </div>
     
     
     

</div>

 <footer>
     
 </footer>
  </body>
</html>