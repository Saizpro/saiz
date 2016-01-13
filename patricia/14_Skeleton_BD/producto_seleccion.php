<?php
include("conexion.php");
include("mensaje.inc.php");
$iden=$_GET["id"];
$sql="SELECT * FROM productos WHERE id_producto='$iden'";
$resultado=mysqli_query($enlace, $sql) or die(mysqli_error($enlace));
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
        <h4>Producto seleccionado</h4>
      </div>
</div>
<div class="row dos">
<?php
while($fila=mysqli_fetch_array($resultado)){
  echo <<<MOSTRAR
  <div class="imgMost"> <img src="fotos/{$fila["foto"]}" title="{$fila["descripcion"]}" alt="{$fila["descripcion"]}"/></div>
  <div class="descMost">
   <p><a href="index.php">Volver a los productos</a></p>

        
         
MOSTRAR;
}

$sql="SELECT * FROM productos WHERE id_producto={$_GET[id]}";
$resultado=mysqli_query ($enlace, $sql) or die(mysqli_error($enlace));
echo "<div class=\"row\">";
$fila=mysqli_fetch_array($resultado); 

$sql_tallas_disponibles="SELECT * FROM stock, tallas WHERE id_producto={$_GET[id]} AND stock.id_talla=tallas.id_talla";
$resultado_tallas_disponibles=mysqli_query ($enlace, $sql_tallas_disponibles) or die(mysqli_error($enlace));

//Monto las opciones de las tallas
$opciones="";
while($fila_tallas=mysqli_fetch_array($resultado_tallas_disponibles)){
  if($fila_tallas[unidades]==0){
    $deshabilitado="disabled";
    $num_mensaje=1;
  }else{
     $deshabilitado="";
  }
  $opciones.="<option value=\"$fila_tallas[id_talla]\" $deshabilitado>$fila_tallas[tallas] ($fila_tallas[unidades] disponibles)</option>";
}

echo <<<FORMULARIO
      
        <p>Referencia: {$fila["referencia"]}</p>
        <p>{$fila["descripcion"]}</p>
        <p>{$fila["precio"]}</p>

        <form method="post" action="carrito_proceso.php">
        <input type="hidden" name="id_producto" id="id_producto" value="{$fila["id_producto"]}">
        <p><label for="cantidad"><input type="number" id="cantidad" name="cantidad" min="1"></p>
        <p><label for="talla">Talla</label>
        <select id="talla" name="talla">
          <option value="">Selecciona talla</option>
          $opciones
        </select>
        </p>
        <p><label for="add_carrito"></label><input type="submit" id="add_carrito" name="add_carrito" value="Añadir al carrito"></p>
        </form>
        {$mensaje[$num_mensaje]}
      </div>
FORMULARIO;



?>
</div>

</div>
    
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
