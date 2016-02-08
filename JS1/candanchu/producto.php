<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Producto</title>
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
        if(Cookies.get('code')==null){
            window.location="http://localhost/clase/JS1/candanchu/index.html";
        }
        $(document).ready(function(){
            var codigo = Cookies.get('code');
            $(".codigo").after(": "+codigo+"<br>");
            $(".caja").click(function(){
                if($(".caja").hasClass("caja-selected")){
                    $(".caja").removeClass("caja-selected");
                }
                $(this).addClass("caja-selected");
                if($(this).hasClass("con-seguro")){
                    $(".precio+span").remove();
                    Cookies.set('precio', '31 euros');
                }else if($(this).hasClass("sin-seguro")){
                    $(".precio+span").remove();
                    Cookies.set('precio', '25 euros');
                }
            $(".precio").after("<span>: "+Cookies.get('precio')+"</span>");
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
            height: 500px;
        }
        .candanchu2{
            margin: 0 auto;
            margin-top: 200px;
            margin-bottom: 200px;
            display: block;
            width: 90%;   
            background-color: rgba(240,240,240,0.5);
            height: 100px;
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
            height: 50%;
            font-size: 2em;
        }
        .caja2{
            height: 100%;
        }
        .caja-selected{
            background-color: darkblue;
            color: aliceblue;
        }
        a{
            padding-bottom: 100px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="candanchu">
     <div class="titulo"> 
         <h2>Su producto</h2>
     </div> 
        <div class="caja sin-seguro">
            <h3>2X1 promo alta 25</h3>
            <b>Precio</b> 12,5€ <br>
            <b>Descuento</b> 0,0€ -0% de ahorro. <br>
            <b>Precio final</b> 12,5€ <br>
        </div>
        <div class="caja con-seguro">
            <h3>2X1 promo alta 25+seguro</h3>
            <b>Precio</b> 15,5€ <br>
            <b>Descuento</b> 0,0€ -0% de ahorro. <br>
            <b>Precio final</b> 15,5€ <br>
        </div>
    </div>
    
        <div class="candanchu2">
     <div class="titulo"> 
         <h2>Código promocional</h2>
    </div>     
        <div class="caja2">
            <b class="codigo">Código</b>
            <b class="precio">Precio</b>
         </div> 
         <a class="btn btn-lg btn-primary btn-block" href="datos.php">Continuar</a> 
     </div>
     

</div>

 <footer>
     
 </footer>
  </body>
</html>