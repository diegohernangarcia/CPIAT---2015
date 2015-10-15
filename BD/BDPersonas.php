<?php

Function AgregarPersona($Persona) {
    require("conexion.php");
    $TD = $Persona[0];
    $Doc = $Persona[1];
    $Ap = $Persona[2];
    $Dom = $Persona[3];
    $Ciu = $Persona[4];
    $Nac = $Persona[5];
    $FNac = $Persona[6];
    $Tel = $Persona[7];
    $Mail = $Persona[8];
    $Seg = $Persona[9];
    $NCJ = $Persona[10];
    $ECJ = $Persona[11];
    $Est = $Persona[12];
    $CUIT = $Persona[13];
    $Consulta = "INSERT INTO personas";
    $Consulta.="(TipoDocumento,Documento,ApyNombre,Domicilio,Ciudad,Nacionalidad,FNac,Telefono,Mail,Seguro,NumCajaJubilatoria,EstadoCajaJubilatoria,Estado,CUIT,regimenjubilatorio) VALUES ";
    $Consulta.= "($TD,'$Doc','$Ap','$Dom',$Ciu,$Nac,'$FNac','$Tel','$Mail',$Seg,'$NCJ',$ECJ,$Est,'$CUIT',0 )";
//    echo $Consulta;
//    die;
    $hacerconsulta = mysql_query($Consulta, $manejador);
    $numeroerror = mysql_errno();
    $descripcionerror = mysql_error();
    if ($numeroerror != 0) {
        echo ("<br>" . $numeroerror . "<br>" . $descripcionerror);
    } else {
        include("PersonaGrabadaOk.php");
    }
}
    Function DevuelvoPersona($DNI) {
        require("conexion.php");
        $consulta = "SELECT * FROM personas WHERE documento='" . $DNI . "'";
        $hacerconsulta = mysql_query($consulta, $manejador);
        $numeroerror = mysql_errno();
        $descripcionerror = mysql_error();
        if ($numeroerror != 0) {
            echo ("<br>" . $$numeroerror . "<br>" . $descripcionerror);
        }
        $salida[0] = mysql_result($hacerconsulta, 0, "TipoDoc");
        $salida[1] = mysql_result($hacerconsulta, 0, "Documento");
        $salida[2] = mysql_result($hacerconsulta, 0, "ApyNombre");
        $salida[3] = mysql_result($hacerconsulta, 0, "Domicilio");
        $salida[4] = mysql_result($hacerconsulta, 0, "Ciudad");
        $salida[5] = mysql_result($hacerconsulta, 0, "Nacionalidad");
        $salida[6] = mysql_result($hacerconsulta, 0, "FNac");
        $salida[7] = mysql_result($hacerconsulta, 0, "Telefono");
        $salida[8] = mysql_result($hacerconsulta, 0, "Mail");
        $salida[9] = mysql_result($hacerconsulta, 0, "Seguro");
        $salida[10] = mysql_result($hacerconsulta, 0, "NumCajaJubilatoria");
        $salida[11] = mysql_result($hacerconsulta, 0, "EstadoCajaJubilatoria");
        $salida[12] = mysql_result($hacerconsulta, 0, "Estado");
        $salida[13] = mysql_result($hacerconsulta, 0, "CUIT");

        Return $salida;
    }
    function DevuelvoIdPersona($DNI){
         require("conexion.php");
        $consulta = "SELECT * FROM personas WHERE documento='" . $DNI . "'";
        $hacerconsulta = mysql_query($consulta, $manejador);
        $numeroerror = mysql_errno();
        $descripcionerror = mysql_error();
        if ($numeroerror != 0) {
            echo ("<br>" . $$numeroerror . "<br>" . $descripcionerror);
        }
        $idPersona = mysql_result($hacerconsulta, 0, "id");
        return $idPersona;
    }
    
    function devuelvoNombrePorIdPersona($IdPersona){
    require("conexion.php");
        $consulta = "SELECT * FROM personas WHERE id='".$IdPersona."'";
        $hacerconsulta = mysql_query($consulta, $manejador);
        $numeroerror = mysql_errno();
        $descripcionerror = mysql_error();
        if ($numeroerror != 0) {
            echo ("<br>" . $$numeroerror . "<br>" . $descripcionerror);
        }
        $salida = mysql_result($hacerconsulta, 0, "ApyNombre");
        return $salida;
}

Function DevuelvoArrayConsulaPersonas($consulta) {
		require ("conexion.php");
		// Creo la consulta
		//$consulta="SELECT * FROM documentos ORDER BY descripcion";
		// Se Ejecuta La Consulta
                //echo $consulta;
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		$arreglo=Array();
                //echo $numeroderegistros;
		
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			//$descripcion=mysql_result($hacerconsulta,$contador,"descripcion");
                        $id=mysql_result($hacerconsulta,$contador,"id");
                        $TipoDocumento=mysql_result($hacerconsulta,$contador,"TipoDocumento");
                        $Documento=mysql_result($hacerconsulta,$contador,"Documento");
                        $ApyNombre=mysql_result($hacerconsulta,$contador,"ApyNombre");
                        $Domicilio=mysql_result($hacerconsulta,$contador,"Domicilio");
                        $Ciudad=mysql_result($hacerconsulta,$contador,"Ciudad");
                        $Nacionalidad=mysql_result($hacerconsulta,$contador,"Nacionalidad");
                        $FNac=mysql_result($hacerconsulta,$contador,"FNac");
                        $Telefono=mysql_result($hacerconsulta,$contador,"Telefono");
                        $Mail=mysql_result($hacerconsulta,$contador,"Mail");
                        $Seguro=mysql_result($hacerconsulta,$contador,"Seguro");
                        $NumCajaJubilatoria=mysql_result($hacerconsulta,$contador,"NumCajaJubilatoria");
                        $EstadoCajaJubilatoria=mysql_result($hacerconsulta,$contador,"EstadoCajaJubilatoria");
                        $Estado=mysql_result($hacerconsulta,$contador,"Estado");
                        $CUIT=mysql_result($hacerconsulta,$contador,"CUIT");
                        $RegimenJubilatorio=mysql_result($hacerconsulta,$contador,"regimenjubilatorio");
			//echo($descripcion." "."<br>");
			
			$arreglo[$contador][0]=$id;
                        $arreglo[$contador][1]=$TipoDocumento;
                        $arreglo[$contador][2]=$Documento;
                        $arreglo[$contador][3]=$ApyNombre;
                        $arreglo[$contador][4]=$Domicilio;
                        $arreglo[$contador][5]=$Ciudad;
                        $arreglo[$contador][6]=$Nacionalidad;
                        $arreglo[$contador][7]=$FNac;
                        $arreglo[$contador][8]=$Telefono;
                        $arreglo[$contador][9]=$Mail;
                        $arreglo[$contador][10]=$Seguro;
                        $arreglo[$contador][11]=$NumCajaJubilatoria;
                        $arreglo[$contador][12]=$EstadoCajaJubilatoria;
                        $arreglo[$contador][13]=$Estado;
                        $arreglo[$contador][14]=$CUIT;
                        $arreglo[$contador][15]=$RegimenJubilatorio;
                        
                        
			
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
Function DevuelveNombreyAp($nombre) {
		require("conexion.php");
		$consulta="SELECT * FROM personas WHERE id='".$nombre."'";
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"ApyNombre");
		Return $salida;
		}           
function devuelvoIdPersonaPorNombre($Nombre){
    require("conexion.php");
        $consulta = "SELECT * FROM personas WHERE ApyNombre='".$Nombre."'";
        $hacerconsulta = mysql_query($consulta, $manejador);
        $numeroerror = mysql_errno();
        $descripcionerror = mysql_error();
        if ($numeroerror != 0) {
            echo ("<br>" . $$numeroerror . "<br>" . $descripcionerror);
        }
        $salida = mysql_result($hacerconsulta, 0, "id");
        return $salida;
}
function devuelvoIdPersonaPorDNI($DNI){
    require("conexion.php");
        $consulta = "SELECT * FROM personas WHERE documento='".$DNI."'";
        $hacerconsulta = mysql_query($consulta, $manejador);
        $numeroerror = mysql_errno();
        $descripcionerror = mysql_error();
        if ($numeroerror != 0) {
            echo ("<br>" . $$numeroerror . "<br>" . $descripcionerror);
        }
        $salida = mysql_result($hacerconsulta, 0, "id");
        return $salida;
}
?>
