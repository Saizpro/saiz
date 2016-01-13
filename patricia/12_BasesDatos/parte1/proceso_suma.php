<?php
if(isset($_POST["num1"])){ 
	$resultado= $_POST["num1"]+$_POST["num2"]; //resulatdo puede ser una variable cualquiera, proceso aparte
	echo "El resultado de la suma es: ".$resultado;
}
?>