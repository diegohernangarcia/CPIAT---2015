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

        <!--        <div class="alert alert-success" role="alert" align="right">  
        
                </div>-->



        <div class="container" fondo>      
            <div class="row">
                <div class="col-xs-12">          
                      <!-- <img class="img-responsive" src="img/logo.jpg" alt="test"> -->
                    &nbsp;
                </div>
            </div>
        </div>    

        <div class="container">
            <form role="form" action="GrabarPersona.php" method="POST">
                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-4 columnasinborde">
                        <!--<div class="form-group">
                        <label for="Area">Area</label>
                        <input id="Area" type="text" class="form-control">
    </div> -->
                        <div class="form-group">
                            <label for="TipoDoc">Tipo Documento</label>
                            <select id="TipoDoc" name="TipoDoc" class="form-control">
                                <?php
                                require("BD/BDDocumento.php");
                                DevuelvoArrayDescripcionOrdenada($arreglo);
                                $longitud = count($arreglo);
                                for ($i = 0; $i < $longitud; $i++) {
                                    echo '<option>' . $arreglo[$i] . '</option>';
                                }
                                ?>


                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="NroDocumento">Numero Documento</label>
                            <input id="NroDocumento" name="NroDocumento" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-2"></div>
                </div>

                <div class="row">
                    <div class="col-xs-2"></div>

                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="Nombre">Apellido y Nombre</label>
                            <input id="Nombre" name="Nombre" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="CUIT">CUIT</label>
                            <input id="CUIT" name="CUIT" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-2 "></div>
                </div>

                

                <div class="row">
                    <div class="col-xs-2"></div>

                    <div class="col-xs-8 columnasinborde">
                        <div class="form-group">
                            <label for="Domicilio">Domicilio</label>
                            <input id="Domicilio" name="Domicilio" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-2 "></div>
                </div>


                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8 columnasinborde">

                        <div class="form-group">
                            <label for="Ciudad">Ciudad</label>
                            <select id="Ciudad" name="Ciudad" class="form-control">
                                <?php
                                require ("BD/BDLocalidades.php");
                                DevuelvoArrayLocalidades($localidades);    
//                                require("BD/BDDocumento.php");
//                                DevuelvoArrayDescripcionOrdenada($arreglo);
                                $longitud = count($localidades);
//                                echo '<option>' . "--" . '</option>';
                                for ($i = 0; $i < $longitud; $i++) {
                                    echo '<option>' . $localidades[$i] . '</option>';
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
                            <label for="Nacionalidad">Nacionalidad</label>
                            <select id="Nacionalidad" name="Nacionalidad" class="form-control">
                                <?php
                                require("BD/BDPaises.php");
                                DevuelvoArrayPaises($arreglo);
                              $longitud = count($arreglo);
                               for ($i = 0; $i < $longitud; $i++) {
                                   echo '<option>' . $arreglo[$i] . '</option>';
                               }
                                ?>


                            </select>

                        </div>  
                        
                        
                        
                    </div> 
                    <div class="col-xs-4 columnasinborde">
                        <div class="form-group">
                            <label for="FechaNacimiento">FechaNacimiento</label>
                            <input id="FechaNacimiento" name="FechaNacimiento" type="date" class="form-control" required>
                        </div>
                    </div> 
                    <div class="col-xs-2"></div>
                </div>
                <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-4 columnasinborde">
                <div class="form-group">
                    <label for="Telefono">Telefono</label>
                    <input id="Telefono" type="text" name="Telefono" class="form-control">
                </div>
            </div> 
            <div class="col-xs-4 columnasinborde">
                <div class="form-group">
                    <label for="Mail">Correo Electronico</label>
                    <input id="Mail" name="Mail" type="text" class="form-control">
                </div>
            </div> 
            <div class="col-xs-2"></div>
        </div>    
                
        <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2 columnasinborde">
                        
                        <div class="form-group">
                            <label for="Seguro">Seguro</label>
                            <select id="Seguro" name="Seguro" class="form-control">
                                <option> SI </option>
                                <option> NO </option>
                                


                            </select>
                        </div>
                    </div>
                    <div class="col-xs-2 columnasinborde">
                        <div class="form-group">
                            <label for="CajaJubilatoria">Numero Caja Jubilatoria</label>
                            <input id="CajaJubilatoria" name="CajaJubilatoria" type="text" class="form-control">
                        </div>
                    </div>
                     <div class="col-xs-2 columnasinborde">
                        <div class="form-group">
                            <label for="EstadoCaja">Estado Caja Jubilatoria</label>
                            <input id="EstadoCaja" name="EstadoCaja" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-2 columnasinborde">
                        
                        <div class="form-group">
                            <label for="Estado">Estado</label>
                            <select id="Estado" name="Estado" class="form-control">
                                <?php
                                require("BD/BDEstados.php");
                                DevuelvoArrayEstados($arregloEstado);
                              $longitud = count($arregloEstado);
                               for ($i = 0; $i < $longitud; $i++) {
                                   echo '<option>' . $arregloEstado[$i] . '</option>';
                               }
                                ?>


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
</body>
</html>