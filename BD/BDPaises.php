<?php
   Function DevuelvoArrayPaises(&$arreglo) {
		require ("conexion.php");
		// Creo la consulta
		$consulta="SELECT * FROM paises";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"nombre");
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
Function DevuelveIdPais($Pais) {
		require("conexion.php");
		$consulta="SELECT * FROM paises WHERE nombre='".$Pais."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
		}
  Function DevuelvePais($Pais) {
		require("conexion.php");
                 If ($Pais==0){
                    Return "Desconocido";
                    exit;
                } 
		$consulta="SELECT * FROM paises WHERE id='".$Pais."'";
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"nombre");
		Return $salida;
		}       
?>
