<?php
Function DevuelvoNombreProvincia($id_provincia)
        //($usuario,$clave,&$result,&$nombre)
        {
	require("conexion.php");
	$result="false";
	$consulta="SELECT * FROM provincias WHERE id ='".$id_provincia."'";
	//echo ($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror= mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$result="false";
		return $result;
		die();
	}
	$GETProv=mysql_result($hacerconsulta,0,"provincia");
	return $GETProv;
}

Function DevuelvoArrayProvincias(&$arreglo) {
		require ("conexion.php");
		// Creo la consulta
		$consulta="SELECT * FROM provincias";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"provincia");
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
        
    Function DevuelvoArrayLocalidades(&$arreglo) {
		require ("conexion.php");
		// Creo la consulta
		$consulta="SELECT * FROM localidades ORDER BY id_provincia";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"localidad");
                        $id_provincia=mysql_result($hacerconsulta,$contador,"id_provincia");
                        $nomprovincia=  DevuelvoNombreProvincia($id_provincia);
                        
			//echo($descripcion." "."<br>");
			
			$arreglo[$contador]=$nomprovincia." - ".$descripcion;
			
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
 Function DevuelvoIdProvincia($localidad)
        //($usuario,$clave,&$result,&$nombre)
        {
	require("conexion.php");
	$result="false";
	$consulta="SELECT * FROM localidades WHERE localidad ='".$localidad."'";
	//echo ($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror= mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$result="false";
		return $result;
		die();
	}
	$GETid=mysql_result($hacerconsulta,0,"id_provincia");
	return $GETid;
}
Function DevuelvoIdProvinciaProvincia($provincia)
        //($usuario,$clave,&$result,&$nombre)
        {
	require("conexion.php");
	$result="false";
	$consulta="SELECT * FROM provincias WHERE provincia ='".$provincia."'";
	//echo ($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror= mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$result="false";
		return $result;
		die();
	}
	$GETid=mysql_result($hacerconsulta,0,"id");
	return $GETid;
}
 
  Function DevuelveCiudad($Ciudad) {
		require("conexion.php");
                If ($Ciudad==0){
                    Return "Desconocido";
                    exit;
                } 
		$consulta="SELECT * FROM localidades WHERE id='".$Ciudad."'";
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"localidad");
		Return $salida;
		}
    Function EstaLocalidadProvincia($localidad,$provincia,&$result){
	require("conexion.php");
	$result="true";
	$consulta="SELECT * FROM localidades WHERE id_provincia =".$provincia." AND localidad='"."$localidad'";
	//echo ($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror= mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$result="false";
		return $result;
		die();
	}
    }
    Function AgregarLocalidad($ciudad,$provincia,$cp) {
    require("conexion.php");
    
    $Consulta = "INSERT INTO localidades";
    $Consulta.="(id_provincia,localidad,CP) VALUES ";
    $Consulta.= "($provincia,'$ciudad','$cp')";
//    echo $Consulta;
//    die;
    $hacerconsulta = mysql_query($Consulta, $manejador);
    $numeroerror = mysql_errno();
    $descripcionerror = mysql_error();
    if ($numeroerror != 0) {
        echo ("<br>" . $numeroerror . "<br>" . $descripcionerror);
    } else {
        include("ciudadGrabadaOk.php");
    }
}
 ?>



