<?php

function ConsultaPersonas($arreglo, $Titulo) {
    require ("Funciones/Fechas.php");
    require ("BD/BDDocumento.php");
    require ("BD/BDLocalidades.php");
    require ("BD/BDPaises.php");
    require("BD/BDEstados.php");
    ?>
    <html>
        <head>
            <link href="Lista/style.css" rel="stylesheet" type="text/css"/>
            <title> <?php echo $Titulo; ?> </title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head>
        <body>
        <center>
            <center>
                <br>
                <table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
                    <thead>
                        <tr>
                            <th class="nosort">
                    <h3>Id</h3></th>
                    <th ><h3>Tipo Doc</h3> </th>
                    <th><h3>Nro Documento</h3> </th>
                    <th><h3>Apellido y Nombre</h3> </th>
                    <th><h3>Domicilio</h3> </th>
                    <th><h3>Ciudad</h3> </th>
                    <th><h3>Nacionalidad</h3> </th>
                    <th><h3>Fecha Nacimiento</h3> </th>
                    <th><h3>Telefono</h3> </th>
                    <th><h3>Mail</h3> </th>
                    <th><h3>Seguro</h3> </th>
                    <th><h3>Nro Caja Jub.</h3> </th>
                    <th><h3>Estado Cja Jub.</h3> </th>
                    <th><h3>Estado</h3> </th>
                    <th><h3>CUIT</h3> </th>
                    <th><h3>Regimen Jubilatorio</h3> </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Se crea bucle que se repetira tantas veces como elementos tenga la consulta
                        $contador = 0;
                        $numeroderegistros = count($arreglo);
                        //echo $numeroderegistros; die;
                        ?>
                        <?php
                        for ($contador; $contador < $numeroderegistros; $contador++) {
                            // Se obtienen los datos almacenados en el elemento cursor 
                            $id = $arreglo[$contador][0];
                            $TipoDocumento = $arreglo[$contador][1];
                            $Documento = $arreglo[$contador][2];
                            $ApyNombre = $arreglo[$contador][3];
                            $Domicilio = $arreglo[$contador][4];
                            $Ciudad = $arreglo[$contador][5];
                            $Nacionalidad = $arreglo[$contador][6];
                            $FNac = $arreglo[$contador][7];
                            $Telefono = $arreglo[$contador][8];
                            $Mail = $arreglo[$contador][9];
                            $Seguro = $arreglo[$contador][10];
                            $NumCajaJubilatoria = $arreglo[$contador][11];
                            $EstadoCajaJubilatoria = $arreglo[$contador][12];
                            $Estado = $arreglo[$contador][13];
                            $CUIT = $arreglo[$contador][14];
                            $RegimenJubilatorio = $arreglo[$contador][15];
                            $TipoDocumento = DevuelveTipoDoc($TipoDocumento);
                            $Ciudad = DevuelveCiudad($Ciudad);
                            $Nacionalidad = DevuelvePais($Nacionalidad);
                            if ($Seguro == 0) {
                                $Seguro2 = "NO";
                            } else {
                                $Seguro2 = "SI";
                            }
                            $Estado = DevuelveEstado2($Estado);
                            ?>
                            <tr>
                                <td><h6><?php echo ($id); ?> </td>
                                <td><h6><?php echo ($TipoDocumento); ?> </td>
                                <td><h6><?php echo ($Documento); ?> </td>
                                <td><h6><?php echo ($ApyNombre); ?> </td>
                                <td><h6><?php echo ($Domicilio); ?> </td>
                                <td><h6><?php echo ($Ciudad); ?> </td>
                                <td><h6><?php echo ($Nacionalidad); ?> </td>
                                <td><h6><?php echo cambiaf_a_normal($FNac); ?> </td>
                                <td><h6><?php echo ($Telefono); ?> </td>
                                <td><h6><?php echo ($Mail); ?> </td>
                                <td><h6><?php echo ($Seguro2); ?> </td>
                                <td><h6><?php echo ($NumCajaJubilatoria); ?> </td>
                                <td><h6><?php echo ($EstadoCajaJubilatoria); ?> </td>
                                <td><h6><?php echo ($Estado); ?> </td>
                                <td><h6><?php echo ($CUIT); ?> </td>
                                <td><h6><?php echo ($RegimenJubilatorio); ?> </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div id="controls">
                    <div id="perpage">
                        <select onChange="sorter.size(this.value)">
                            <option value="5" selected="selected">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span>Registros Por Pagina</span>
                    </div>
                    <div id="navigation">
                        <img src="Lista/images/first.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1, true)" />
                        <img src="Lista/images/previous.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1)" />
                        <img src="Lista/images/next.gif" width="16" height="16" alt="First Page" onClick="sorter.move(1)" />
                        <img src="Lista/images/last.gif" width="16" height="16" alt="Last Page" onClick="sorter.move(1, true)" />
                    </div>
                    <div id="text">Displaying Page <span id="currentpage"></span> of <span id="pagelimit"></span></div>
                </div>
                <script src="Lista/script.js" type="text/javascript"></script>
                <script type="text/javascript">
                            var sorter = new TINY.table.sorter("sorter");
                            sorter.head = "head";
                            sorter.asc = "asc";
                            sorter.desc = "desc";
                            sorter.even = "evenrow";
                            sorter.odd = "oddrow";
                            sorter.evensel = "evenselected";
                            sorter.oddsel = "oddselected";
                            sorter.paginate = true;
                            sorter.currentid = "currentpage";
                            sorter.limitid = "pagelimit";
                            sorter.init("table", 1);
                </script>
                <br>
                <center>
                    <a href="menu.html"target="_self"><img src="img/atras.jpg"></a> </th></tr>
                    </body>		
                    </html>
                    <?php
                }

                function ConsultaMatriculas($arreglo, $Titulo) {
                    require ("Funciones/Fechas.php");
                    require_once ("BD/BDEstados.php");
                    require_once ("BD/BDCategorias.php");
                    require_once ("BD/BDPersonas.php");
                    require_once ("BD/BDUniversidades.php");
                    require_once ("BD/BDTitulos.php");
                    ?>
                    <html>
                        <head>
                            <link href="Lista/style.css" rel="stylesheet" type="text/css"/>
                            <title> <?php echo $Titulo; ?> </title>
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        </head>
                        <body>
                        <center>
                            <center>
                                <br>
                                <table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
                                    <thead>
                                        <tr>
                                    <th><h3>Id</h3></th>
                                    <th ><h3>Nombre y Apellido</h3> </th>
                                    <th><h3>Matricula</h3> </th>
                                    <th><h3>Titulo</h3> </th>
                                    <th><h3>Letra</h3> </th>
                                    <th><h3>Fecha Egreso</h3> </th>
                                    <th><h3>Fecha Matricula</h3> </th>
                                    <th><h3>Estado</h3> </th>
                                    <th><h3>Tipo</h3> </th>
                                    <th><h3>Universidad</h3> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Se crea bucle que se repetira tantas veces como elementos tenga la consulta
                                        $contador = 0;
                                        $numeroderegistros = count($arreglo);
                                        //echo $numeroderegistros; die;
                                        ?>
                                        <?php
                                        for ($contador; $contador < $numeroderegistros; $contador++) {
                                            // Se obtienen los datos almacenados en el elemento cursor 
                                            $id = $arreglo[$contador][0];
                                            $id_persona = $arreglo[$contador][1];
                                            $categoria = $arreglo[$contador][2];
                                            $numero = $arreglo[$contador][3];
                                            $circunscripcion = $arreglo[$contador][4];
                                            $titulo = $arreglo[$contador][5];
                                            $letra = $arreglo[$contador][6];
                                            $fecha_egreso = $arreglo[$contador][7];
                                            $fecha_matricula = $arreglo[$contador][8];
                                            $estado = $arreglo[$contador][9];
                                            $tipo = $arreglo[$contador][10];
                                            $universidad = $arreglo[$contador][11];
                                            $categoria = DevuelveCategoria($categoria);
                                            $Estado = DevuelveEstado2($estado);
                                            $QueMatricula = $categoria . '-' . $numero . '-' . $circunscripcion;
                                            $QuePersona = DevuelveNombreyAp($id_persona);
                                            $titulo = DevuelveTitulo($titulo);
                                            $universidad = DevuelveUniversidad($universidad);
                                            ?>
                                            <tr>
                                                <td><h6><?php echo ($id); ?> </td>
                                                <td><h6><?php echo ($QuePersona); ?> </td>
                                                <td><h6><?php echo ($QueMatricula); ?> </td>
                                                <td><h6><?php echo ($titulo); ?> </td>
                                                <td><h6><?php echo ($letra); ?> </td>
                                                <td><h6><?php echo (cambiaf_a_normal($fecha_egreso)); ?> </td>
                                                <td><h6><?php echo (cambiaf_a_normal($fecha_matricula)); ?> </td>
                                                <td><h6><?php echo ($Estado); ?> </td>
                                                <td><h6><?php echo ($tipo); ?> </td>
                                                <td><h6><?php echo ($universidad); ?> </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div id="controls">
                                    <div id="perpage">
                                        <select onChange="sorter.size(this.value)">
                                            <option value="5" selected="selected">5</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span>Registros Por Pagina</span>
                                    </div>
                                    <div id="navigation">
                                        <img src="Lista/images/first.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1, true)" />
                                        <img src="Lista/images/previous.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1)" />
                                        <img src="Lista/images/next.gif" width="16" height="16" alt="First Page" onClick="sorter.move(1)" />
                                        <img src="Lista/images/last.gif" width="16" height="16" alt="Last Page" onClick="sorter.move(1, true)" />
                                    </div>
                                    <div id="text">Displaying Page <span id="currentpage"></span> of <span id="pagelimit"></span></div>
                                </div>
                                <script src="Lista/script.js" type="text/javascript"></script>
                                <script type="text/javascript">
                                            var sorter = new TINY.table.sorter("sorter");
                                            sorter.head = "head";
                                            sorter.asc = "asc";
                                            sorter.desc = "desc";
                                            sorter.even = "evenrow";
                                            sorter.odd = "oddrow";
                                            sorter.evensel = "evenselected";
                                            sorter.oddsel = "oddselected";
                                            sorter.paginate = true;
                                            sorter.currentid = "currentpage";
                                            sorter.limitid = "pagelimit";
                                            sorter.init("table", 1);
                                </script>
                                <br>
                                <center>
                                    <a href="menu.php"target="_self"><img src="img/atras.jpg"></a> </th></tr>
<!--                                    <a href="pdf.php"target="_self"><img src="img/atras.jpg"></a> </th></tr>-->
                                    </body>		
                                    </html>
                                    <?php
                                }
                                