<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Promocional</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://cdn.imnjb.me/libs/jquery.cookiecuttr/1.0/cookiecuttr.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css">    
    <link rel="stylesheet" href="css/jquery.fancybox-buttons.css">
    <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.fancybox-buttons.js"></script>
    <script src="js/jquery.fancybox-thumbs.js"></script>
    <script src="js/js.cookie.js"></script>
    <script>
        $(document).ready(function(){
            $(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
            $(".btn").click(function(){
                var codigo=$("#promocion").val();
                $.post("comprobar-codigo.php",
                    {
                        codigo: codigo,
                    },
                function(data, status){
                if(data==0){ 
                    $("#promocion").after("<p>Código no válido</p>");
                }else{
                     Cookies.set('code', data);
                     window.location="http://localhost/clase/JS1/candanchu/producto.php";
                }
            return false;
            });
        });  
        });     
    </script>
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
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
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="candanchu">
     <div class="titulo"> 
         <h1>Promociones Candanchú</h1>
     </div> 
      <form class="form-signin form-codigo">
       <h2>Introduzca su código promocional</h2>
        <label for="promocion" class="sr-only">Introduzca su código promocional</label>
        <input type="text" id="promocion" class="form-control" placeholder="Código promocional" autofocus>
        <a class="various" data-fancybox-type="iframe" href="info.html">Más info</a>
        <br><br>
        <input type="button" class="btn btn-lg btn-primary btn-block" value="Comprobar">
      </form>
    </div>
</div>
 <footer>
     
 </footer>
  </body>
</html>