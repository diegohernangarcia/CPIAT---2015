<?php
$id = $_POST["grabar"];
require ("BD/BDMatriculas.php");
require ("BD/BDPersonas.php");
require ("BD/BDCategorias.php");
require ("BD/BDDocumento.php");
require ("Funciones/Fechas.php");
require ("BD/BDLocalidades.php");
require ("BD/BDPaises.php");
require ("BD/BDEstados.php");
require ("BD/BDTitulos.php");
require ("BD/BDUniversidades.php");
$consulta = "SELECT * FROM matriculas WHERE id_persona='" . $id . "'";
$consultaPersona = "SELECT * FROM personas where id='" . $id . "'";
$arreglo_persona = DevuelvoArrayConsulaPersonas($consultaPersona);
$arreglo_matricula = DevuelvoArrayConsulaMatriculas($consulta);
$numeroderegistros = count($arreglo_matricula);
//echo "CANTIDAD DE MATRICULAS " . $numeroderegistros;
?>

<center><h2><?php echo "Datos Personales"; ?><h2></center><br>

 <?php

$documento = DevuelveTipoDoc($arreglo_persona[0][1]) . " " . $arreglo_persona[0][2];
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link href="Lista/style.css" rel="stylesheet" type="text/css"/>

<TABLE cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
    <TR>
        <!--<TD>BOTON</TD>-->
        <?php
        $categoria = DevuelveCategoria($arreglo_matricula[0][2]);
        
        ?>
        <TD><?php echo $arreglo_persona[0][3]; ?></TD>
        <TD><?php echo $documento; ?></TD> 
        <TD>Fecha Nac.<?php echo cambiaf_a_normal($arreglo_persona[0][7]); ?></TD>
        <TD><?php echo DevuelveCiudad($arreglo_persona[0][5]); ?></TD>
        <TD><?php echo $arreglo_persona[0][4]; ?></TD>
    </TR>
    <TR>
        <TD>Nacionalidad <?php echo DevuelvePais($arreglo_persona[0][6]); ?></TD>
        <TD> Telefono <?php echo $arreglo_persona[0][8]; ?></TD>
        <TD>Mail <?php echo $arreglo_persona[0][9]; ?></TD>
        <TD>Cuit <?php echo $arreglo_persona[0][14]; ?></TD>
        <TD>Estado <?php echo DevuelveEstado2($arreglo_persona[0][13]); ?></TD>
    </TR>
</TABLE>
<center><h2><?php echo "Datos Titulos"; ?><h2></center><br>
<br>
    <?php
        $contador = 0;
        for ($contador; $contador < $numeroderegistros; $contador++) {
            $matricula = $categoria . "-" . $arreglo_matricula[$contador][3] . "-" . $arreglo_matricula[$contador][4]
    ?>                
        <TABLE cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
            <tr>
                <TD> <?php echo $matricula; ?></TD>
                <TD> <?php echo DevuelveTitulo($arreglo_matricula[$contador][5]); ?></TD>
                <TD> <?php echo DevuelveUniversidad($arreglo_matricula[$contador][11]);?></TD>
            </tr>
        <tr>
            <TD>Estado  <?php echo DevuelveEstado2($arreglo_matricula[$contador][9]); ?></TD>
            <td>Fecha Egreso <?php echo cambiaf_a_normal($arreglo_matricula[$contador][7]);?></td>
            <td>Fecha Matricula <?php echo cambiaf_a_normal($arreglo_matricula[$contador][8]);?></td>
            
        </tr>
        <?php }?>
        </table>
    <a href="menu.php" target="_self"> <center><input type="button"  class="btn btn-danger"name="Salir" value="Volver a Inicio" align="right"/> </a> 
    <input type="button" name="imprimir" value="Imprimir"  onClick="window.print();"/>
    