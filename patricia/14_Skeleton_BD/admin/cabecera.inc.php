<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Administrador</title>
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
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href=".../images/favicon.png">

  <script src="../js/jquery-1.11.3.js"></script>
  <script src="../js/jquery.validate.js"></script>
  <script>
$().ready(function() {
   $("#form1").validate({
      rules: {
          precio: {
          number: true, //para decirle que sea un numero
        }
      },
       
      messages: {
        ref: "Por favor introduzca una referencia de producto",
        precio: {
          required: "Por favor introduzca el precio del producto",
          number: "Este valor tiene que ser un numero"
        },
        descripcion: "Introduzca una descripcion acorde al articulo"
      }
});
   $('#modificarProd').validate();
 });
</script>


</head>
<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
  <div class="titulo">
 <h1>Zona del Administrador</h1>
 </div>
    <div class="row">
      <div class="one-half column">
       <div class="menu">
        <h2>CATÁLOGO</h2>
        <ul>
        <li><a href="inserta_producto.php">Añadir producto</a></li>
        <li><a href="ver_productos.php">Modificar producto</a></li>
        </ul></div>
        <div class="menu">
        <h2>PEDIDOS</h2>
        <ul>
        <li>Ver pedidos</li>
        </ul></div>
      </div>
    </div>
  </div>

