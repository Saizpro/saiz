<?php

if(isset($_FILES["foto"])){

	move_uploaded_file($_FILES["foto"]["tmp_name"],"img/".$_FILES["foto"]["name"]);
	echo "<p>su archivo se ha enviado</p>";
}

?>
