?php
include "../conexion.inc.php";
$sql_personas="SELECT * FROM personas";
$resultado_personas=mysqli_query ($enlace, $sql_personas) or die(mysqli_error($enlace));

$sql_mangas="SELECT * FROM mangas";
$resultado_mangas=mysqli_query ($enlace, $sql_mangas) or die(mysqli_error($enlace));

$sql_producto="SELECT * FROM productos WHERE id_producto='$_GET[id]'";
$resultado_producto=mysqli_query ($enlace, $sql_producto) or die(mysqli_error($enlace));
$fila_producto=mysqli_fetch_array($resultado_producto);
echo "<pre>";
print_r($fila_producto);
echo "</pre>";
?>

<?php include "cabecera.inc.php"; ?>
    <div class="row">
      <div class="one-half column">
        <h2>Modificar producto <?php echo $_GET["id"]; ?></h2>
        <form action="modificar-proceso.php" method="post" enctype="multipart/form-data" name="altaProducto" id="altaProducto">
          <input type="hidden" name="id_producto" id="id_producto" value="<?php echo $fila_producto[0]; ?>">
          <input type="hidden" name="referencia_actual" id="referencia_actual" value="<?php echo $fila_producto["referencia"]; ?>">
          <input type="hidden" name="foto_actual" id="foto_actual" value="<?php echo $fila_producto["foto"]; ?>">
          <input type="hidden" name="persona_actual" id="persona_actual" value="<?php echo $fila_producto["id_persona"]; ?>">

         <p>
          <label for="referencia">Referencia</label>
            <input type="text" name="referencia" id="referencia" required value="<?php echo $fila_producto[1]; ?>">
          </p>
          <p>
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="45" rows="5" required><?php echo $fila_producto[2]; ?></textarea>
          </p>
          <p>
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" required value="<?php echo $fila_producto[3]; ?>">
          </p>
          <p>
            <img src="../fotos/<?php echo $fila_producto["foto"]; ?>" alt="<?php echo $fila_producto[2]; ?>" title="<?php echo $fila_producto[2]; ?>">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto">
          </p>
          <p>
            <label for="persona">Persona</label>
            <select name="persona" id="persona" required>
              <option value="">Selecciona persona</option>
              <?php
			  while ($fila_personas=mysqli_fetch_array($resultado_personas)){
			  if($fila_producto[id_persona]==$fila_personas[0])
          $seleccionado="selected";
        else
          $seleccionado="";
        echo <<<OPCION
<option value="$fila_personas[0]" $seleccionado>$fila_personas[1]</option>
OPCION;
			  }
			  ?>
            </select>
          </p>
          <p>
            <label for="manga">Manga</label>
            <select name="manga" id="manga" required>
              <option value="">Selecciona manga</option>
            <?php
			  while ($fila_mangas=mysqli_fetch_array($resultado_mangas)){
         if($fila_producto[id_manga]==$fila_mangas[0])
          $seleccionado="selected";
        else
          $seleccionado="";
			  echo <<<OPCION
<option value="$fila_mangas[0]" $seleccionado>$fila_mangas[1]</option>
OPCION;
			  }
			  ?>
            </select>
          </p>
          <p>
            <input type="submit" name="modificar" id="modificar" value="Modificar producto">
          </p>
        </form>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
