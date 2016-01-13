<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>practica-11-Forefathers</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- aqui va el header-->
<?php
 include("cabecera.inc.php"); ?>
 
<article id="formulario"> 
<p class="social"> <a href="#">Twitter</a>/  <a href="#">Facebook </a></p> 
<form name="form1" method="post" action="">

  <p><label for="name">Your name</label>
  <input type="text" name="name" id="name"></p>
  
 <p> <label for="you email">Your email</label>
  <input type="text" name="email" id="you email"></p>
  
  <p><label for="subjet">Subject</label>
  <input type="text" name="subjet" id="subjet"></p>

  <p><label for="message">Message</label>
  <textarea name="message" id="message" cols="45" rows="5"></textarea></p>
  
  <p><label  for="send"></label>
    <input type="submit" name="send" id="send" value="Send message">
  </p>
</form>

 

</article>

</body>
</html>