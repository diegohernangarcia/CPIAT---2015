<?php

Function DevuelvoArrayEstados(&$arreglo) {
		require ("conexion.php");
		// Creo la consulta
		$consulta="SELECT * FROM estados";
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
                        $id=  mysql_result($hacerconsulta,$contador, $id);
			//echo($descripcion." "."<br>");
			
			$arreglo[$contador]=$descripcion;
			
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
    Function DevuelveIdEstado($Estado) {
		require("conexion.php");
		$consulta="SELECT * FROM estados WHERE descripcion='".$Estado."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
		}
Function DevuelveEstado($Estado) {
//		require("conexion.php");
//		$consulta="SELECT * FROM estados WHERE id='".$Estado."'";
//                if (($Estado==0) or ($Estado ==' ')) {
//                    $salida="SIN INFO";
//                    return $salida;
//                    exit;
//                }
//		$hacerconsulta=mysql_query($consulta,$manejador);
//		$$numeroerror=mysql_errno();
//		$descripcionerror=mysql_error();
//		if ($$numeroerror!=0) {
//			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
//		$salida=mysql_result ($hacerconsulta,0,"Descripcion");
//		Return $salida;
                Return $Estado;
		} 
Function DevuelveEstado2($Estado) {
		require("conexion.php");
		$consulta="SELECT * FROM estados WHERE id='".$Estado."'";
                if (($Estado==0) or ($Estado ==' ')) {
                    $salida="SIN INFO";
                    return $salida;
                    exit;
                }
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"codigo");
		Return $salida;
                Return $Estado;
		} 
?>

