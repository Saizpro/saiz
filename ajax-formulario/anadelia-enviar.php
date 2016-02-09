<?php
$para = "car.lost.size@gmail.com, ".$_POST["email"];
$asunto = "El asunto";
$mensaje = "Nombre: ".$_POST["nombre"];
$mensaje .= "Email: ".$_POST["email"];
$mensaje .= "Comentarios: ".$_POST["comentarios"];

if(mail($para, $asunto, $mensaje)){
    $info="<p>Tu mensaje ha sido enviado</p>";
}
else{
    $info="<p>No se ha podido enviar el mensaje</p>";
}
echo $info;
?>