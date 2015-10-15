<?php

Function DevuelvoArrayDescripcionOrdenada(&$arreglo) {
		require ("conexion.php");
		// Creo la consulta
		$consulta="SELECT * FROM documentos ORDER BY descripcion";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"descripcion");
			//echo($descripcion." "."<br>");
			
			$arreglo[$contador]=$descripcion;
			
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
        
    Function DevuelveIdTipoDoc($TipoDoc) {
		require("conexion.php");
		$consulta="SELECT * FROM documentos WHERE descripcion='".$TipoDoc."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
		}
    Function DevuelveEstaPersonaConDNI($DNI) {
                // 0 Se encuentra el DNI
                // 1 No esta el DNI    
                require("conexion.php");
		$consulta="SELECT * FROM personas WHERE Documento='".$DNI."'";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		if ($numeroderegistros==0)
                    return 1;
                    else  return 0;
			}
            
    Function DevuelveTipoDoc($TipoDoc) {
		require("conexion.php");
                 If ($TipoDoc==0){
                    Return "Desconocido";
                    exit;
                } 
		$consulta="SELECT * FROM documentos WHERE id='".$TipoDoc."'";
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"descripcion");
		Return $salida;
		}
 ?>

