<html>
    <head>

        <title>CPIAT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body> 
        <style media="all" type="text/css">@import "menu/menu_style.css";</style>
        <div class="menu">
            
            <ul>
                <li><a href="" target="_self" ><?php echo $_SESSION['usuario']; ?></a>
                <li><a href="" target="_self" >Profesionales</a>
                    <ul>
                        <li><a href="PersonaPorNombre.php" target="_self">Consultas Por Nombre y Apellido</a></li>
                        <li><a href="PersonaPorDNI.php" target="_self">Consulta Por DNI</a></li>
                        <li><a href="PersonaPorLocalidad.php" target="_self">Consulta Por Localidad</a></li>
                        <li><a href="PersonaMailLocalidad.php" target="_self">Consulta Por Localidad y Mail</a></li>
                        <li><a href="PersonaMail.php" target="_self">Consulta Por Mail</a></li>
                    </ul>
                </li>
                <ul>
                    <li><a href="" target="_self" >Matriculas</a>
                        <ul>
                            <li><a href="MatriculaPorProfesionalNombre.php" target="_self">Consulta Por Nombre</a></li>
                            <li><a href="MatriculaPorProfesionalDNI.php" target="_self">Consulta Por DNI</a></li>
                            <li><a href="MatriculaPorLocalidad.php" target="_self">Consulta Por Localidad</a></li>
                            <li><a href="MatriculaCategoriaNumeroCircunscripcion.php" target="_self">Consulta Pro Cat.-Num.-Circ.</a></li>
                            <li><a href="MatriculaPorCircunscripcion.php" target="_self">Por Circunscripcion</a></li> 
                            
                            <li><a href=".html" target="_self"></a></li>
                            <li><a href=".html" target="_self"></a></li>
                        </ul>
                    </li>

                    <li><a href="index.html" target="_self" >Salir</a>
                    </li>
                </ul>
        </div>

    </body>
</html>
