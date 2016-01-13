<?php
include "../conexion.php";
$consulta_sql="SELECT * FROM productos";
$resultado=mysqli_query ($enlace, $consulta_sql) or die(mysqli_error($enlace));

include "cabecera.inc.php"; ?>

 <div class="row">
    <div class="row2">
      <h2>Ver productos</h2>
      <table>
        <tr><th>Referencia</th><th>Nombre</th><th>Acciones</th></tr>
<?php
   while ($fila=mysqli_fetch_array($resultado)){
        echo <<<FILA
         <tr><td>$fila[1]</td><td>$fila[2]</td><td><img src="../fotos/$fila[4]"/></td><td><a href="modificar-form.php?id=$fila[0]">Actualizar</a> / <a href="#">Eliminar</a></td> </tr>
FILA;
        }
?>

        </table>
 </div>
  </div>
 </div><!--cierra container -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
