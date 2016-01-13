<?php
//recoger los valores del formulario
//crear el mensaje
$mensaje="Nombre: ".$_POST["name"]."\n";
$mensaje.="Email: ".$_POST["email"]."\n";
$mensaje.="Subject: ".$_POST["Subject"]."\n";
$mensaje.="Message: ".$_POST["message"]."\n";
$mensaje.="phone: ".$_POST["phone"]."\n";
$mensaje.="url: ".$_POST["url"];
//enviar el formulario
if(mail("mariajo.arnal.argon@gmail.com", "Formulario de contacto", $mensaje))
	$info="Formulario enviado ok";
else
	$info="No enviado";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Truth collective</title>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
<link href="reset.css" rel="stylesheet" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header>
<p class="flotarIzq"><img src="img/logo.png" alt="Truth collective" width="500" height="388" /></p>
<nav>
<ul>
  <li><a href="#">Contact</a></li>
  <li><a href="#">Press&amp;Articles</a></li>
  <li><a href="#">Blog</a></li>
  <li><a href="#">Work</a></li>
  <li><a href="#">Welcome</a></li>
</ul>
<div class="clear"></div>
</nav>
</header>
<article id=contacto>
<div class="container">
<div id="separacion">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d727.6427285280568!2d-77.61130899999999!3d43.155538899999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6b45585783a81%3A0x2e683e961fd62004!2s12+Aqueduct+St%2C+Rochester%2C+NY+14614%2C+EE.+UU.!5e0!3m2!1ses!2s!4v1416222418707" width="600" height="450" frameborder="0" style="border:0"></iframe>
<div class="flotarDchCentrado">
<p>Our space is conveniently located in the heart of downtown Rochester:</p>
<address>Truth collective<br />
  12 Aqueduct street, 1st floor<br />
  Rochester, NY 14614<br />
</address>
  <tel>+1.585.690.0844</tel>
<p class="cursiva">Visitors to Truth Collective: <br>
Please call upon arrival so we can open the gate to our parking lot. If there are no available spaces, there is a pay lot next door (also accessible from Exchange Street). Additionally, there is on-street parking on East Broad.</p>
</div>
</div>
<div class="clear"></div>
<div id="bloque2">
<aside>
<p>We’d love to hear from you if you are a prospective client, genuine talent looking to become part of the Collective, inquisitive member of the media, or just a long-lost friend.</p>
<h3>Collective envy?</h3>
<p>If you think your standards and expertise will be a great fit with us, we’d love to hear from you. Just share a portfolio link and tell us the truths about you that will make us appreciate just how awesome you are.</p>
<p>Need to send an attachment? Email us directly to <span class="amarillo">hello@truthcollective.com </span></p>
</aside>
<div class="flotarDcha">
 <p><?php echo $info;?></p>
</div>
</div>
</div>
<div class="clear"></div>
</article>
<footer>
<div id="pie">
<div id=flotarIpie>
<h2>Get in touch</h2>
<p>Bob Bailey  +1.585.690.0844</p>
<p class="amarillo">bob@truthcollective.com </p>
</div>
<div id="flotarDpie">
<h2>Stay connected</h2>
<ul>
  <li><a href="#">
  <span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
</span><span>twitter</span></a></li>

  <li><a href="#"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
</span><span>facebook</span></a></li>

  <li><a href="#"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
</span><span>instagram</span></a></li>

  <li><a href="#"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-vine fa-stack-1x fa-inverse"></i>
</span><span>vimeo</span></a></li>

  <li><a href="#"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
</span></i><span>linkedinv</span></a></li>

  <li><a href="#"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
</span></i><span>pinterest</span></a></li>
</ul>
</div>
<div class="clear">

<div class="centrarPie">
<h2>Come visit us</h2>
<p>12 aqueduct street/Rochester/New tyork/14614</p>
</div>
<p class="centrarPie cursiva">© 2013–2014 Truth Collective LLC</p>
</div>
</div>
</footer>
</body>
</html>
