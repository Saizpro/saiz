<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product-10-Moment</title>
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php include("cabecera.inc.php"); ?>
<!-- aqui va el header !-->

<article>
<!--<h1>PRODUCT</h1> !-->
<section id="carrito">
<div class="fondo">
<div class="contenedorProducto">

    <p><img class="flotarSki" src="img/FRANKENSKI_SKI.png" alt="sky frankensky" width="95" height="480"></p>
<div class="caractProducto">
    <div class="nombreYprecio">
    	<div class="nombreFlotar"><h2>FRANKENSKI</h2></div>
    	<div class="precioFlotar"><p>$ 575.00</p></div>
	</div><!--cierra nombreYprecio!-->

    <h3>FRANKENSKIS WILL SHIP END OF NOVEMBER.</h3>
    <p>The original Frankenski was ahead of its time, arriving from a future too radical, perhaps, for the present. This latest version 	descends to Earth with full edges and the ice pick bite of Dirty Mustache Rocker. All-new semi-cap construction provides lighter 			    weight and durability against chipping. Vertical sidewalls under the wrap-over topsheet mean edging power and impact resistance are    unaffected.</p>
    <form name="form2" method="post" action="">
     <p class="medidaFlotar"><span class="botonForm">Ski Size</span><label for="medida">ski size</label>
      <select name="medida" id="medida">
        <option value="0">168cm</option>
        <option value="1">178cm</option>
      </select></p>
    <p class="AddFlotar"><label class="carroCompra" for="Add to cart">Add to cart</label>
    	<input type="hidden" name="referencia" id="hidden" value="FRANKENSKIS">
        <input type="submit2" name="Add to cart" id="Add to cart" value="Add to cart"></p>
    </form>     
 <div class="clear"></div>
 <iframe src="//player.vimeo.com/video/104882714" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
  </div><!--cierra caractProducto!-->	  
 </div><!--cierra contenedorProducto"!-->
 <div class="clear"></div>
 </div><!--cierra el fondo1!-->
</section>
<section id="specifications">
<h4>especificaciones</h4>
	<div class="fondo">
    <div class="contenedorProducto">
	<table width="200">
	    <tr>
	      <th scope="col">Size</th>
	      <th scope="col">162cm</th>
	      <th scope="col">172cm</th>
	      <th scope="col">182cm</th>
	      <th scope="col">188cm</th>
        </tr>
	    <tr>
	      <td>Tip-waist-tail mm</td>
	      <td>129-101-121</td>
	      <td>129-101-121</td>
	      <td>129-101-121</td>
	      <td>129-101-121</td>
        </tr>
	    <tr>
	      <td>Sidecut mm</td>
	      <td>15</td>
	      <td>18</td>
	      <td>21</td>
	      <td>23</td>
        </tr>
	    <tr>
	      <td>Effective edge mm</td>
	      <td>1279</td>
	      <td>1379</td>
	      <td>1479</td>
	      <td>1539</td>
        </tr>
	    <tr>
	      <td>Weight 1bs/kgs</td>
	      <td>7.05/3.20</td>
	      <td>7.55/3.42</td>
	      <td>8.6/3.90</td>
	      <td>8.95/4.06</td>
        </tr>
    </table>
    </div><!--cierra contenedor-->
  </div><!--cierra fondo-->
  </section>

<section id="camber">
	<h4>camber</h4>
    <div class="fondo">
   <div class="contenedorProducto">
	<p><img class="centrarFotosP" src="img/Frank.png" alt="camberfoto" width="727" height="574"></p>
   </div><!--cierra contenedorProducto"!-->
    </div><!--cierra fondo!-->
  </section>
    <section id="construction">
    	<h4>Construction</h4>
  <div class="fondo">  
   <div class="contenedorProducto"> 

	<p><img class="centrarFotosP" src="img/frnakenski.png" alt="contruccion-foto" width="800" height="434"></p>
   </div><!--cierra contenedorProducto"!-->
  </div><!--cierra fondo4!-->  
  </section>
</article>

<!-- aqui va el footer!-->
<?php include("pie.inc.php"); ?>
</body>
</html>
