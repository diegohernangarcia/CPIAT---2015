<?php

Function DevuelvoArrayUniversidad(&$arreglo) {
		require ("conexion.php");
		// Creo la consulta
		$consulta="SELECT * FROM Universidades";
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
Function DevuelveIdUniversidad($Universidad) {
		require("conexion.php");
		$consulta="SELECT * FROM Universidades WHERE descripcion='".$Universidad."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"codigo");
		Return $salida;
		}
Function DevuelveUniversidad($universidad) {
		require("conexion.php");
                 If ($universidad==0){
                    Return "Desconocido";
                    exit;
                } 
		$consulta="SELECT * FROM Universidades WHERE id='".$universidad."'";
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"descripcion");
		Return $salida;
		}   
                
Function EstaUniversidad($universidad,&$result){
	require("conexion.php");
	$result="true";
	$consulta="SELECT * FROM Universidades WHERE descripcion ='".$universidad."'";
	//echo ($consulta);die();
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror= mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$result="false";
		return $result;
		die();
	}
        return $result;
    }                
Function AgregarUniversidad($universidad) {
    require("conexion.php");
    
    $Consulta = "INSERT INTO Universidades";
    $Consulta.="(codigo,descripcion) VALUES ";
    $Consulta.= "(0,'$universidad')";
//    echo $Consulta;
//    die;
    $hacerconsulta = mysql_query($Consulta, $manejador);
    $numeroerror = mysql_errno();
    $descripcionerror = mysql_error();
    if ($numeroerror != 0) {
        echo ("<br>" . $numeroerror . "<br>" . $descripcionerror);
    } else {
        include("universidadGrabadaOk.php");
    }
}             
?>


