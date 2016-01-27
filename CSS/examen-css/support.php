<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Examen-css</title>
    <link rel="stylesheet" href="reset.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
<?php
  include("cabecera.inc.php")      
?>

   <div class="clear"></div>
   <div class="container2">
    <form action="#" method="post" name="signup" enctype="text/plain">
       <fieldset>
        <legend>Sign Up</legend>
        <label for="name">Full name</label><input type="text" id="name" placeholder="Full name">
        <label for="email">email</label><input type="email" id="email" placeholder="Email">
        <label for="password">Password</label><input type="password" id="password" placeholder="Password">
        <label for="start">Start</label><input type="submit" id="start" name="start" value="START">
        </fieldset>
    </form>
    <div class="title">
        <h1>Support</h1>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
    </div>
    </div> 
 
    <div class="clear"></div>
    <div class="container2">
    <article class="col3 img1" >
        <cite>Name 1</cite>
        <blockquote>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate dolores neque error."                     </blockquote>
        <a href="#">Read more</a>
    </article>
        <article class="col3 img2">
        <cite>Name 2</cite>
        <blockquote>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate dolores neque error."                     </blockquote>
        <a href="#">Read more</a>
    </article>
        <article class="col3 img3">
        <cite>Name 3</cite>
        <blockquote>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate dolores neque error."                     </blockquote>
        <a href="#">Read more</a>
    </article>
      </div>
    </div>
    <div class="clear"></div>
    <div class="container">
    <div class="container3">
    <article>
        <cite>Name 4</cite>
        <h2>Lorem ipsum dolor sit amet, consectetur elit.</h2>
        <blockquote>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quibusdam magnam obcaecati, illo praesentium culpa hic ipsam voluptas et itaque laudantium. Maiores inventore non, quasi, excepturi dolorum earum aliquam quam."</blockquote>
        <a href="">Read full story</a>
    </article>
       <iframe title="narwals" src="https://www.youtube.com/embed/W3TtS1wkb7M" allowfullscreen></iframe>
        </div>
    </div>
    <footer>
            
    </footer>
</body>
</html>