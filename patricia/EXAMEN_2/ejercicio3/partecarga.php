<?php

if(isset($_POST["alta"])){
  $referencia=$_POST["referencia"];
  $precio=$_POST["precio"];
  $persona=$_POST["persona"];
  $manga=$_POST["manga"];
  $descripcion=$_POST["descripcion"];
      echo <<<SALIR
      <div id=\"ok\"><p>Su registro ha sido realizado</p><p>$referencia</p><p>$precio</p><p>$persona</p><p>$manga</p><p>$descripcion</p></div>
SALIR;
}
?>