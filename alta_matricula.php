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
        <?php
          $DNI=$_POST["NroDocumento"];
          require ("BD/BDMatriculas.php");
          require ("BD/BDPersonas.php");
          $idPersona=DevuelvoIdPersona($DNI);
          $arregloMatriculas= DevuelvoMatriculasPorIdPersonal($idPersona);
          $Nombre= devuelvoNombrePorIdPersona($idPersona);
        ?>
        <div class="container" fondo>      
            <div class="row">
                <div class="col-xs-12">          
                    &nbsp;
                </div>
            </div>
        </div>    

        <div class="container">
            <form role="form" action="GrabarMatricula.php" method="POST">
                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-3 columnasinborde" >
                        <div class="form-group">
                            <label for="Matricula">Nro Matricula</label>
                            <select id="Matricula" name="Matricula" class="form-control">
                                <?php
                                $longitud = count($arregloMatriculas);
                                for ($i = 0; $i < $longitud; $i++) {
                                    echo '<option>' . $arregloMatriculas[$i] . '</option>';
                                }
                                ?>
                                
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-2 columnasinborde">

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
                    <div class="col-xs-3 columnasinborde">
                        <div class="form-group">
                            <label for="Circunscripcion">Circunscripcion</label>
                            <select id="Circunscripcion" name="Circunscripcion" class="form-control">
                                <?php
                                require("BD/BDCircunscripciones.php");
                                DevuelvoArrayCircunscripcionId($arregloCircunscripcion);
                                $longitud = count($arregloCircunscripcion);
                                for ($i = 0; $i < $longitud; $i++) {
                                    echo '<option>' . $arregloCircunscripcion[$i] . '</option>';
                                }
                                ?>

                            </select>
                        </div>






                    </div>
                    <div class="col-xs-2"></div>
                </div>

                <div class="row">
                    <div class="col-xs-2"></div>

                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="Titular">Apellido y Nombre</label>
                            <input id="Nombre" name="Nombre" type="text" class="form-control" value="<?php echo $Nombre ?>" readonly="">
                        </div>
                    </div>
                    <div class="col-xs-4 columnasinborde ">
                        <div class="form-group">
                            <label for="Persona">Identificador Unico</label>
                            <input id="IdPersona" name="IdPersona" type="text" class="form-control" value="<?php echo $idPersona ?>" readonly="">
                        </div>
                    </div>
                    <div class="col-xs-2"></div>
                </div>



                <div class="row">
                    <div class="col-xs-2"></div>

                    <div class="col-xs-8 columnasinborde">
                        <div class="form-group">
                            <label for="Titulo">Titulo</label>
                            <select id="Titulo" name="Titulo" class="form-control">
                                <?php
                                require("BD/BDTitulos.php");
                                DevuelvoArrayTitulo($arregloTitulo);
                                $longitud = count($arregloTitulo);
                                for ($i = 0; $i < $longitud; $i++) {
                                    echo '<option>' . $arregloTitulo[$i] . '</option>';
                                }
                                ?>
                            </select>
                        </div>


                    </div>

                    <div class="col-xs-2 "></div>
                </div>


                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-6 columnasinborde">

                        <div class="form-group">
                            <label for="Universidad">Universidad</label>
                            <select id="Universidad" name="Universidad" class="form-control">
                                <?php
                                    require("BD/BDUniversidades.php");
                                    DevuelvoArrayUniversidad($arreglo1);
                                    $longitud = count($arreglo1);
                                    for ($i = 0; $i < $longitud; $i++) {
                                        echo '<option>' . $arreglo1[$i] . '</option>';
                                    }
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-xs-2 columnasinborde">

                        <div class="form-group">
                            <label for="Letra">Letra</label>
                            <select id="Letra" name="Letra" class="form-control">
                                 <option> N</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-xs-2"></div>
                </div>






                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="FechaEgreso">Fecha Egreso</label>
                            <input id="FechaEgreso" name="FechaEgreso" type="date" class="form-control" required>
                        </div>

                    </div>  
                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="FechaMatricula">Fecha Matricula</label>
                            <input id="FechaMatricula" name="FechaMatricula" type="date" class="form-control" required>
                        </div>
                    </div> 
                    <div class="col-xs-2"></div>
                </div>
                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="Estado">Estado</label>
                            <select id="Estado" name="Estado" class="form-control">
                                 <?php
                                    require("BD/BDEstados.php");
                                    DevuelvoArrayEstados($arreglo2);
                                    $longitud = count($arreglo2);
                                    for ($i = 0; $i < $longitud; $i++) {
                                        echo '<option>' . $arreglo2[$i] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div> 
                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="Tipo">Tipo</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                  <option> PRI </option>
                                  <option> SEC </option>
                            </select>
                        </div>
                    </div> 
                    <div class="col-xs-2"></div>
                </div>    













                <div class="row">
                    <div class="col-xs-2 "></div>
                    <div class="col-xs-8 columnasinborde" align="center">
                            <!--<input type="submit" name="bgrabar" class="btn btn-success" value="Continuar"> -->
                    </div>
                </div>
                <div class="col-xs-2"></div>
                &nbsp;
        </div>


    </div>

</div>

<div class="bottom columna">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <input type="submit" name="bgrabar" class="btn btn-success" value="Continuar" align="center">      
            </div>
            <div class="col-xs-6">
                <a href="menu.php" target="_self"> <input type="button"  class="btn btn-danger"name="Salir" value="Volver a Inicio" align="right"/> </a> 
            </div>


        </div>
        <br>
    </div>








</div> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
</body>
</html>
