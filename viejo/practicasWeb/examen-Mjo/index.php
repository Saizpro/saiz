<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <link href="css/main.css" rel="stylesheet" type="text/css">
  
  
  
</head>
<body>

 
    <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">  
<!-- aqui va el header-->
  <?php include("cabecera.inc.php"); ?>
<article>
<section id="parteUno" class="row">
<div class="seven columns">
<p class="centrar mayusculas">Sing up</p>
<form name="form1" method="post" action="">
  <label for="Full name">Full name</label>
  <p>
    <input type="text" name="Full name" id="Full name" placeholder="Full name">
</p>
  <p>
    <label for="Email">Email</label>
    <input type="email" name="Email" id="Email" placeholder="E-mail">
</p>
  <p>
    <label for="Password">Password</label>
    <input type="password" name="Password" id="Password" placeholder="Password" maxlength="9">
  </p>
  <p>
    <label for="Start">start</label>
    <input type="submit" name="Start" id="Start" value="Start">
  </p>
</form>
</div>
<div class="five columns">
<h1>Lorem ipsum dolor sit amet, consectetur</h1>
<p class="mayusculas">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur arcu eu pharetra fermentum. Quisque at sapien sit amet justo gravida consequat vitae vitae tortor. Nunc semper lorem id suscipit venenatis.</p>
</div>
<div class="u-cf"></div>
</section>
<section id="parteDos">
<div class="row">
	<div class="one-third column">
        <p><img src="images/scottevest_01.png" alt="name1" width="290" height="300"></p>
        <h2>name 1</h2>
        <h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur arcu eu pharetra fermentum. Quisque at sapien sit amet justo gravida consequat vitae vitae tortor."</h3>
        <p class="centrar"><a href="#" class="boton">read more</a></p>
	</div>
    
    <div class="one-third column">
        <p><img src="images/centraldesktop_01.png" alt="name2" width="290" height="300"></p>
        <h2>Name 2</h2>
        <h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur arcu eu pharetra fermentum. Quisque at sapien sit amet justo gravida consequat vitae vitae tortor."</h3>
        <p class="centrar"><a href="#" class="boton">read more</a></p>
     </div>
     
     <div class="one-third column">
        <p><img src="images/media-temple_04.png" alt="name 3" width="290" height="300"></p>
        <h2>Name 3</h2>
        <h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur arcu eu pharetra fermentum. Quisque at sapien sit amet justo gravida consequat vitae vitae tortor."</h3>
        <p class="centrar"><a href="#"class="boton">Read more</a></p>
      </div>
</div>
<div id="name4" class="row">
	<div class="four columns">
        <h2>Name 4</h2>
        <p class="parrafo4">Lorem ipsum dolor sit amet, consectetur elit.</p>
        <h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur arcu eu pharetra fermentum. Quisque at sapien sit amet justo gravida consequat vitae vitae tortor."</h3>
        <p><a href="#" class="boton">read full sory</a></p>
	</div>
    
	<div class="six columns offset-by-one columns">
		<iframe width="560" height="315" src="//www.youtube.com/embed/fQ2kFqq6Ldo" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
</section>
</article>
</div><!-- cierra el container-->
</body>
</body>
</body>
</html>