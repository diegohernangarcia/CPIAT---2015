<?php
    $QueBusco=$_POST["datoconsulta"];
    require ("BD/BDPersonas.php");
    require ("VistaConsultas.php");
    require ("BD/BDEstados.php");
    require ("BD/BDLocalidades.php");
    $consulta="Select * From personas WHERE ApyNombre Like '%".$QueBusco."%'";
    $arreglo=DevuelvoArrayConsulaPersonas($consulta);
    $long=count($arreglo);
    ?>
 <link href="Lista/style.css" rel="stylesheet" type="text/css"/>
<form role="form" action="VerMatriculaProfesionalNombre2.php" method="POST">
    <TABLE cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
	<TR>
                <!--<TD>BOTON</TD>-->
		<TD>Consultar</TD>
                <TD>Nombre</TD> 
                <TD>Documento</TD>
                <TD>Ciudad</TD>
                <TD>Fecha Nac.</TD>
                <TD>Estado</TD>
	</TR>
	<TR>
            <?php 
                $contador = 0;
                $numeroderegistros = count($arreglo);
                for ($contador; $contador < $numeroderegistros; $contador++) {
		?>
                <TD><input type="submit" name="grabar" value="<?php echo $arreglo[$contador][0]?>" text="Ver"></TD>
                <!--<TD><?echo $arreglo[$contador][0]; ?></TD>-->
                <TD><?echo $arreglo[$contador][3];?></TD>
                <TD><?echo $arreglo[$contador][2];?></TD>
                <TD><? $ciudad= DevuelveCiudad ($arreglo[$contador][5]);
                    echo $ciudad; ?></TD>
                <TD><?echo $arreglo[$contador][7];?></TD>
                <TD><?  $Estado=  DevuelveEstado2($arreglo[$contador][13]);
                    
                    
                    echo $Estado;?></TD>
        </TR>
        <?php }?> 
</TABLE>
    <a href="menu.php" target="_self"> <center><input type="button"  class="btn btn-danger"name="Salir" value="Volver a Inicio" align="right"/> </a> 
</form>

  