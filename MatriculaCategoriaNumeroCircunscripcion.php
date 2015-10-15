<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CPIAT</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.chained.min.js"></script>


        <style type="text/css">
            //body{background-color:#8CC63F}
        </style>
    </head>
    <body>

       


        <div class="container" fondo>      
            <div class="row">
                <div class="col-xs-12">          
                    &nbsp;
                </div>
            </div>
        </div>    
        <div class="container">
            <form role="form" action="VerMatriculaCategoriaNumeroCircunscripcion.php" method="POST">
                <div class="row">
                    <div class="col-xs-1">
                    </div>
                    <div class="col-xs-3 columnasinborde">
                        <div class="form-group">
                            
                                <div class="form-group">
                            <label for="Categoria">Categoria</label>
                            <select id="Categoria" name="Categoria" class="form-control">
                                <?php
                                require("BD/BDCategorias.php");
                                DevuelvoArrayCategorias($arreglo);
                                $longitud = count($arreglo);
                                for ($i = 0; $i < $longitud; $i++) {
                                    echo '<option>' . $arreglo[$i] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        </div>

                    </div>
                    <div class="col-xs-3 columnasinborde">
                        <div class="form-group">
                            <div class="form-group">
                            <label for="numero">Numero</label>
                            <input id="numero" name="numero" type="text" class="form-control">
                        </div>
                        </div>

                    </div>
                    <div class="col-xs-3 columnasinborde">
                        <div class="form-group">
                            <label for="Circunscripcion">Circunscripcion</label>
                            <select id="Circunscripcion" name="Circunscripcion" class="form-control">
                                <?php
                                require("BD/BDCircunscripciones.php");
                                DevuelvoArrayCircunscripcion($arregloCircunscripcion);
                                $longitud = count($arregloCircunscripcion);
                                for ($i = 0; $i < $longitud; $i++) {
                                    echo '<option>' . $arregloCircunscripcion[$i] . '</option>';
                                }
                                ?>

                            </select>
                        </div>       
                    </div>
                    <div class="col-xs-2"></div>
                </div>$QueBusco=$_POST["datoconsulta"];
        </div> 
        <div class="container">
            <div class="row ">$QueBusco=$_POST["datoconsulta"];
                <div class="col-xs-1"></div>    
                <div class="col-xs-1">
                </div>   
                <div class="col-xs-1"></div>    
                <div class="col-xs-1">
                    <br>
                    <input type="submit" name="bgrabar" class="btn btn-success" value="Continuar">      </div>    
                <div class="col-xs-1"></div>    
                <div class="col-xs-1"></div>    
                <div class="col-xs-1"></div>    
                <div class="col-xs-1"></div>    
                <div class="col-xs-1"><center>
                        <br>
                        <a href="menu.php" target="_self"> <input type="button"  class="btn btn-danger"name="Salir" value="Volver a Inicio" /> </a> </div>    
                <div class="col-xs-1">

                </div>    
                <div class="col-xs-1"></div>    
                <div class="col-xs-1"></div>    
            </div>
        </div>
    </body>
</html>