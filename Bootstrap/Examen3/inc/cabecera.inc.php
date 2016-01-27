    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><h1 class="">Concurso de fotografía</h1></a>
            </div>
              <div>
                <ul class="nav navbar-nav">

                    <li <?php
                        if ($title=="Index"){
                            echo("class=\"active\"");
                        }
                        ?>><a href="index.php">Principal</a></li>
                    <li <?php 
                        if ($title=="Formulario"){
                            echo("class=\"active\"");
                        }
                        ?>><a href="formulario.php">Formulario</a></li>
                    <li <?php
                        if ($title=="Bases"){
                            echo("class=\"active\"");
                        }?>><a href="bases.php">Bases</a></li>
                   
                </ul>
            </div><!--.nav-collapse -->
        </div>
        </nav>  
    </header>