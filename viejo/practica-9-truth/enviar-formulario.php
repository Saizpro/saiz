<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Nombre: ".$_POST["nombre"]."\n";
$mensaje.="Apellidos: ".$_POST["apellidos"]."\n";
$mensaje.="Email: ".$_POST["email"]."\n";
$mensaje.="Asunto: ".$_POST["subject"]."\n";
$mensaje.="Mensaje: ".$_POST["mensaje"]."\n";
$mensaje.="Teléfono: ".$_POST["telefono"]."\n";
$mensaje.="Web: ".$_POST["url"];

//enviar el formulario
if(mail("javlammar@yahoo.es", "Formulario de contacto", $mensaje))
	$info="Formulario enviado ok";
else
	$info="No enviado";
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Truth Collective</title>
<link href="reset.css" rel="stylesheet" type="text/css">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
<p><img src="img/logo.png" alt="Logo Truth Collective" width="500" height="388"></p>
<nav>
<ul>
  <li><a href="#">Welcome</a></li>
  <li><a href="#">Work</a></li>
  <li><a href="#">Blog</a></li>
  <li><a href="#">Press &amp; Articles</a></li>
  <li><a href="#">Contact</a></li>
</ul>
</nav>
</header>
<div></div>
<article id="contacto">
  <div class="container">
  <div id="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d2981.532371290575!2d-0.8713457000000074!3d41.64423829999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e6!4m0!4m5!1s0xd5914f968e0b93b%3A0x871d430ab2cf1c56!2sCalle+Matadero%2C+50013+Zaragoza!3m2!1d41.6442383!2d-0.8713457!5e0!3m2!1ses!2ses!4v1416222390534" width="300" height="225" frameborder="0" style="border:0"></iframe>
      <p class="centrar">Our space is conveniently located in the heart of downtown Rochester:</p>
      <h1 class="centrar">Truth Collective<br>
        12 Aqueduct street, 1st floor<br>
      Rochester, NY 14614</h1>
      <h2 class="centrar">+1.585.690.0844</h2>
      <p class="centrar cursiva">Visitors to Truth Collective:<br>
      Please call upon arrival so we can open the gate to our parking lot. If there are no available spaces, there is a pay lot next door (also accesible from Exchange Street). Additionally, there is on street parking on East Broad.</p>
  </div>
  <div id="anteform">
    <p class="clear">We'd love to bear you if you are a prospective client, genuine talent looking to become part of the Collective, inquisitive member of the media, or just a long-lost friend.</p>
    <h1>Collective Envy?</h1>
    <p>If you think your standards and expertive will be a great fit with us, we'd love to hear from you. Just share a portfolio link and tell us the truths about you that will make us appreciate just how awesome you are.</p>
    <p>Need to send an attachment? Email us directly to <a href="#">hello@truthcollective.com</a></p>
  </div>

 
 <p><?php echo $info;?></p>



  <div class="clear"></div>
  </div>
</article>
<footer>
  <div id="pie960">
      <div class="get">
        <hgroup id="hgroup1">
          <h1>Get in touch</h1>
        <h2>Bob Bailey +1.585.690.0844<br>
          <a href="mailto:bob@truthcollective.com">bob@truthcollective.com</a></h2>
      </hgroup>
        <div class="stay">
          <h1>Stay conected</h1>
          <ul>
            <li><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i><span>Youtube</span></a></li>
          <li><a href="#"><i class="fa fa-vimeo-square"></i><span>Vimeo</span></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
          </ul>
        </div>
    </div>
    <hgroup id="hgroup2">
      <h1>Come visit us</h1>
      <h2>12 aqueduct street / Rochester/ New York / 14614</h2>
    </hgroup>
    <p class="cursiva">©2013-2014 Truth Collective LLC</p>
    <div class="clear"></div>
  </div>
</footer>

</body>
</html>
