<?php
$id = $_POST["grabar"];
require ("BD/BDMatriculas.php");
require ("BD/BDPersonas.php");
require ("BD/BDCategorias.php");
$consulta = "SELECT * FROM matriculas WHERE id_persona='" . $id . "'";
$consultaPersona = "SELECT * FROM personas where id='" . $id . "'";
$arreglo_persona = DevuelvoArrayConsulaPersonas($consultaPersona);
$arreglo_matricula = DevuelvoArrayConsulaMatriculas($consulta);

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
$matricula = $categoria . "-" . $arreglo_matricula[0][3] . "-" . $arreglo_matricula[0][4]
?>
        <TD><?php echo $matricula ?></TD>
        <TD>Matricula <?php; ?></TD> 
        <TD>Ciurcunscripcion </TD>
        <TD>Ciudad</TD>
        <TD>Fecha Nac.</TD>
        <TD>Estado</TD>
    </TR>
    <TR>
        <TD><</TD>
        <TD>></TD>
        <TD></TD>
        <TD></TD>
        <TD></TD>
        <TD></TD>
    </TR>
</TABLE>
<a href="menu.php" target="_self"> <center><input type="button"  class="btn btn-danger"name="Salir" value="Volver a Inicio" align="right"/> </a> 

<!--
$arreglo[0][0]=$id;
                        $arreglo_matricula[0][1]=$id_persona;
                        $arreglo_matricula[0][2]=$categoria;
                        $arreglo_matricula[0][3]=$numero;
                        $arreglo_matricula[0][4]=$circunscripcion;
                        $arreglo_matricula[0][5]=$titulo;
                        $arreglo_matricula[0][6]=$letra;
                        $arreglo_matricula[0][7]=$fecha_egreso;
                        $arreglo_matricula[0][8]=$fecha_matricula;
                        $arreglo_matricula[0][9]=$estado;
                        $arreglo_matricula[0][10]=$tipo;
                        $arreglo_matricula[0][11]=$universidad;



$arreglo[0][0]=$id;
                        $arreglo[0][1]=$TipoDocumento;
                        $arreglo[0][2]=$Documento;
                        $arreglo[0][3]=$ApyNombre;
                        $arreglo[0][4]=$Domicilio;
                        $arreglo[0][5]=$Ciudad;
                        $arreglo[0][6]=$Nacionalidad;
                        $arreglo[0][7]=$FNac;
                        $arreglo[0][8]=$Telefono;
                        $arreglo[0][9]=$Mail;
                        $arreglo[0][10]=$Seguro;
                        $arreglo[0][11]=$NumCajaJubilatoria;
                        $arreglo[0][12]=$EstadoCajaJubilatoria;
                        $arreglo[0][13]=$Estado;
                        $arreglo[0][14]=$CUIT;
                        $arreglo[0][15]=$RegimenJubilatorio;

-->