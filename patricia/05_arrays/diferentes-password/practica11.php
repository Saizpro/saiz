<?php
/**
 * @category       practica11
 * @author         Ignacio Pereda <cursophp2015@gmail.com>
 * @copyright      (c) 2015, Ignacio Pereda. All Rights Reserved.
 * @license        CC BY 3.0 ES Licencia - http://creativecommons.org/licenses/by/3.0/es/deed.es
 * @version        1.0.0
 */
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="UTF-8">
<title>Script práctica #11 PHP 2015</title>
<link rel="stylesheet" href="styles.css" /> 
</head>

<div id="container" class="left">

    <header class="center">
        <h1>Login básico</h1>
    </header>
	
    <form action="#" method="post">
        <fieldset>
            <legend>Datos de acceso</legend>

            <div class="separa20">
            <label for="usuario">Usuario: </label><input type="text" name="usuario" id="usuario" required>
            </div>
            <div class="separa20">
            <label for="password">Password: </label><input type="password" name="password" id="password" required>
            </div>

            <div class="separa10 center">
            <button type="submit" id="acceder" name="acceder">Acceder</button>
            </div>
			
        </fieldset>
    </form>

<!-- Procesos POST form -->
    <?php
    if ( isset($_POST["acceder"]) ) { //Sí se pulsa el botón cálculo
        $usuarios = array(
            array(
                "user"=>"sandra",
                "name"=>"SANDRA",
                "pwd"=>"pwdsandra",
            ),
            array(
                "user"=>"patricia",
                "name"=>"PATRICIA",
                "pwd"=>"pwdpatricia",
            ),
            array(
                "user"=>"adrian",
                "name"=>"ADRIÁN",
                "pwd"=>"pwdadrian",
            ),
            array(
                "user"=>"pablo",
                "name"=>"PABLO",
                "pwd"=>"pwdpablo",
            ),

        );

        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        $mensaje = "</br>\r\n<fieldset></br>\r\n<legend>Resultados</legend>\r\n"; // Abro Fieldset

        foreach ($usuarios as $user) {
            $a_user = ""; $a_name = ""; $a_pwd = "";
            foreach ($user as $clave=>$valor){
                switch ($clave) {
                    case "user":
                        $a_user = $valor;
                    case "name":
                        $a_name = $valor;
                    case "pwd":
                        $a_pwd = $valor;
                }
            }
            if ( $usuario == $a_user && $password == $a_pwd ) {
                $mensaje .= "<p><strong>Hola $a_name, ¡estás dentro! (usuario y contraseña correctos)</strong></p>";
                $mensaje .= "</br>\r\n</fieldset>\r\n"; // Cierro Fieldset                
                echo $mensaje;
                exit();
                //header("location:practica11_estoydentro.php");
                } 
        }
        $mensaje .= "<p><strong>¡ERROR: Usuario o password incorrecto!</strong></p>";
        $mensaje .= "</br>\r\n</fieldset>\r\n"; // Cierro Fieldset  
        echo $mensaje;              
    }
    ?>

    <footer>
         <div class="separa10 center">Por <strong><a href="http://ipereda.sallende.imefez.net/">iPereda (Curso PHP imefez)</a></strong> &copy; 2015.</div>
    </footer>

</div>
</html>