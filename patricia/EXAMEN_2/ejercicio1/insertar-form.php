<?php
include "conexion.inc.php";
$sql_personas="SELECT * FROM personas";
$resultado_personas=mysqli_query ($enlace, $sql_personas) or die(mysqli_error($enlace));

$sql_mangas="SELECT * FROM manga";
$resultado_mangas=mysqli_query ($enlace, $sql_mangas) or die(mysqli_error($enlace));
?>

<?php include "cabecera.inc.php"; ?>
    <div class="row">
      <div class="one-half column">
        <h2>Alta producto</h2>
        <form action="" method="post" enctype="multipart/form-data" id="form1" name="form1">
         <p>
          <label for="referencia">Referencia</label>
            <input type="text" name="referencia" id="referencia" required>
          </p>
          <p>
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="45" rows="5" required></textarea>
          </p>
          <p>
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" required>
          </p>
          <p>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto">
          </p>
          <p>
            <label for="persona">Persona</label>
            <select name="persona" id="persona" required>
              <option value="">Selecciona persona</option>
              <?php
			  while ($fila_personas=mysqli_fetch_array($resultado_personas)){
			  echo <<<OPCION
<option value="$fila_personas[0]">$fila_personas[1]</option>
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
			  echo <<<OPCION
<option value="$fila_mangas[0]">$fila_mangas[1]</option>
OPCION;
			  }
			  ?>
            </select>
          </p>
          <p>
            <input type="submit" name="alta" id="alta" value="Alta producto">
          </p>
        </form>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
