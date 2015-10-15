<?php
?>
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
                        <li><a href="altas.php" target="_self">Altas</a></li>
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
                            <li><a href="SeleccionProfesional.php" target="_self">Altas</a></li>
                            <li><a href="MatriculaPorProfesionalNombre.php" target="_self">Consulta Por Nombre</a></li>
                            <li><a href="MatriculaPorProfesionalDNI.php" target="_self">Consulta Por DNI</a></li>
                            <li><a href="MatriculaPorLocalidad.php" target="_self">Consulta Por Localidad</a></li>
                            <li><a href="MatriculaCategoriaNumeroCircunscripcion.php" target="_self">Consulta Pro Cat.-Num.-Circ.</a></li>
                            <li><a href=".html" target="_self"></a></li>
                            <li><a href=".html" target="_self"></a></li>
                        </ul>
                    </li>
                    <li><a href="" target="_self" >Consultas</a>
                        <ul>
                            <li><a href="en_construccion.html" target="_self">Matriculas 1</a></li>
                            <li><a href="en_construccion.html" target="_self">Matriculas 2</a></li>
                        </ul>
                    </li>
                    <li><a href="" target="_self" >Usuarios</a>
                        <ul>
                            <li><a href="en_construccion.html" target="_self">Usuarios 1</a></li>
                            <li><a href="en_construccion.html" target="_self">Usuarios 2</a></li>
                        </ul>
                    </li>

                    <li><a href="en_construccion.html" target="_self" >Parametros</a>
                        <ul>    
                            <li><a href="alta_ciudad.php" target="_self">Agregar Ciudad</a></li>
                            <li><a href="alta_universidad.php" target="_self">Agregar Universidad</a></li>
                        </ul>
                    </li>
                    <li><a href="index.html" target="_self" >Salir</a>
                    </li>
                </ul>
        </div>
   
    </body>
</html>
