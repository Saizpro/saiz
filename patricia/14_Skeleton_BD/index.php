<?php
include("conexion.php");


?>
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
  <link rel="stylesheet" href="css/estilos.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
<div class="row">
      <div class="one-half column" style="margin-top: 5%">
        <h4>Catálogo de productos</h4>
      </div>
</div>
<?php
$sql="SELECT * FROM productos ORDER BY id_producto DESC LIMIT 0,6";
$resultado=mysqli_query($enlace, $sql) or die(mysqli_error($enlace));

$i=3;
while($fila=mysqli_fetch_array($resultado)){   
  if($i%3==0){
    if($i!=3){
      echo "</div>";
    }
    echo "<div class=\"row\">";
  }   
echo <<<CAMISETA
      <div class="four columns camiseta">
        <p>
          <a href="producto_seleccion.php?id={$fila["id_producto"]}"><img src="fotos/{$fila["foto"]}" title="{$fila["descripcion"]}" alt="{$fila["descripcion"]}"/></a>
        </p>
         <p>
          {$fila["precio"]}
        </p>
      </div>
CAMISETA;
$i++;
}





?>
</div>
    
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
