<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulario</title>

</head>
<body>

<form enctype="multipart/form-data" action="guardar.php" method="post">
<fieldset>
<input type="hidden" name="ruta" value="">
<label for="foto">Foto: </label><input type="file" name="foto" id="foto">
    <p><label for="enviar"></label><input type="submit" name="enviar" id="enviar" value="Enviar"></p>
</fieldset>
</form>

</body>
</html>