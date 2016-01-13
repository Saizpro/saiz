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
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script>
  $.validator.setDefaults({
    submitHandler: function() {
         var user=$("#user").val();
         var password=$("#password").val();
         var login=true;
         $.ajax({
            type: "POST",
            url: "proceso-login.php",
            data: {user: user, password: password, login: login},
            success: function(msg) {
                if(msg==1){
                   $('#msgerror').html("Usario y/o password incorrecto");
                }else{
                    $('form').fadeOut("slow", function(){
                              $('form').html(msg);
                              $('form').fadeIn("slow");   
                    });
                }  
                    //alert(data);
                }
            });     


      //alert("submitted!");
    }
  });

  $().ready(function() {
    // validate the comment form when it is submitted
    $("#login").validate();
  });
  </script>
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    
<h1>Login de usuarios</h1>
<div class="row">
<div class="six columns">
<form name="login" id="login" method="post" action="proceso-login.php">
  <fieldset>
  <legend>Login</legend>
  <p>
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user" required>
  </p>
  <p>
    <label for="password">Password</label>
    <input type="text" name="password" id="password" required>
</p>
<p>
  <label for="registrar"></label>
  <input type="submit" name="login" id="login" value="login">
</p>
      
</fieldset>
</form>
<div id="msgerror"></div>

</div>
</div>     
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>