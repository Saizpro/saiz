<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Product - Moment skis</title>
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php include("cabecera.inc.php"); ?>
    
    <article id="product">
    <section id="carrito" class="fondo">
    <div class="contenedor">
    <h1>Product</h1>
    
    <p><img src="img/esquis.png"></p>
    <p><a href="#">Flip to base</a></p>
    <h1>PB&amp;J</h1>
    <p>$699.00</p>
    <p>Despite what magazines would have you believe, the backcountry isn’t just an endless series of pristine, back-lit cover-shot opportunities. The Underworld is the ski you want when every day and every lap might bring different results, from lee-face powder to scoured boilerplate, manky re-freeze or afternoon corn. At 106 underfoot, it stays afloat in all but the deepest and driest conditions, while Dirty Mustache rocker adds security on sketchy side-hill traverses and frozen descents. Our lightweight Tour Core layup keeps you flying up the skin track for more turns.</p>
    <form name="form2" method="post" action="">
    <input name="referencia" type="hidden" id="referencia" value="pbj">
      <p>
      <label for="size">Ski size</label>
        <select name="size" id="size">
          <option value="162">162cm</option>
          <option value="168">168cm</option>
          <option value="172">172cm</option>
        </select>
      </p>
      <p>
        <input type="submit" name="add_cart" id="add_cart" value="Add to cart">
</p>
    </form>
    <iframe src="//player.vimeo.com/video/35612009" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/35612009">Colter Brehmer //Back from the Dead\\ Edit</a> from <a href="http://vimeo.com/stephensiegel">Stephen Siegel</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
    </div>
    </section>
    <section id="specifications">
    <h2>Speficifications</h2>
    <div class="fondo">
    <div class="contenedor">
        <table width="100%" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th scope="col">Size</th>
        <th scope="col">162cm</th>
        <th scope="col">172cm</th>
        <th scope="col">182cm</th>
        <th scope="col">188cm</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Tail</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Sideuct</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      </tbody>
    </table>
    </div>
    </div>
    </section>
    <section id="camber">
     <h2>Camber</h2>
     <div class="fondo">
    <div class="contenedor">
       <p><img src="img/camber.png" width="727" height="574"></p>
    </div>
    </div>
    </section>
    <section id="construction">
     <h2>Construction</h2>
     <div class="fondo">
    <div class="contenedor">
   
    <p><img src="img/construction.png" width="800" height="434"></p>
    </div>
    </div>
    </section>
    </article>
    
<?php include("pie.inc.php"); ?>
	
</body>
</html>
