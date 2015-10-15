<?php
function devuelvoUltimaMatricula(){
    require("conexion.php");
        $consulta = "SELECT * FROM NumeroMatricula WHERE id=1";
        $hacerconsulta = mysql_query($consulta, $manejador);
        $numeroerror = mysql_errno();
        $descripcionerror = mysql_error();
        if ($numeroerror != 0) {
            echo ("<br>" . $$numeroerror . "<br>" . $descripcionerror);
        }
        $salida = mysql_result($hacerconsulta, 0, "Ultima");
        return $salida;
        
}
Function DevuelvoMatriculasPorIdPersonal($idPersona) {
		require ("conexion.php");
		// Creo la consulta
                $consulta = "SELECT * FROM matriculas WHERE id_persona='" . $idPersona. "' ORDER BY numero";
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
		//$arreglo[0]=  devuelvoUltimaMatricula();
                $arreglo[0]=devuelveMax();
                
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"numero");
			//echo($descripcion." "."<br>");
			
			$arreglo[$contador+1]=$descripcion;
			
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
Function AgregarMatricula($Persona) {
    require("conexion.php");
    $persona=$Persona[0];
    $cat=$Persona[1];
    $num=$Persona[2];
    $cir=$Persona[3];
    $tit=$Persona[4];
    $letra=$Persona[5];
    $fegre=$Persona[6];
    $fmatr=$Persona[7];
    $est=$Persona[8];
    $tipo=$Persona[9];
    $uni=$Persona[10];
    
    
    $Consulta = "INSERT INTO matriculas";
    $Consulta.="(id_persona,categoria,numero,circunscripcion,titulo,letra,fecha_egreso,fecha_matricula,estado,tipo,universidad) VALUES ";
    $Consulta.= "($persona,$cat,$num,$cir,$tit,'$letra','$fegre','$fmatr',$est,'$tipo',$uni )";
    //echo "<br>".$Consulta;
    //die;
    $hacerconsulta = mysql_query($Consulta, $manejador);
    $numeroerror = mysql_errno();
    $descripcionerror = mysql_error();
    if ($numeroerror != 0) {
        echo ("<br>" . $numeroerror . "<br>" . $descripcionerror);
    } else {
        include("MatriculaGrabadaOk.php");
    }
}

function devuelveMax (){
    require("conexion.php");
    //$consulta= "SELECT MAX(numero) AS numero FROM matriculas";
//    $consulta= "Select MAX (numero) AS numero From matriculas";
//    $nmax = mysql_query($consulta);
      $nmax = mysql_result(mysql_query("SELECT MAX(numero) FROM matriculas"), 0);

    return $nmax+1;
}
Function DevuelvoArrayConsulaMatriculas($consulta) {
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
               // echo $numeroderegistros;
		
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			//$descripcion=mysql_result($hacerconsulta,$contador,"descripcion");
                        $id=mysql_result($hacerconsulta,$contador,"id");
                        $id_persona=mysql_result($hacerconsulta,$contador,"id_persona");
                        $categoria=mysql_result($hacerconsulta,$contador,"categoria");
                        $numero=mysql_result($hacerconsulta,$contador,"numero");
                        $circunscripcion=mysql_result($hacerconsulta,$contador,"circunscripcion");
                        $titulo=mysql_result($hacerconsulta,$contador,"titulo");
                        $letra=mysql_result($hacerconsulta,$contador,"letra");
                        $fecha_egreso=mysql_result($hacerconsulta,$contador,"fecha_egreso");
                        $fecha_matricula=mysql_result($hacerconsulta,$contador,"fecha_matricula");
                        $estado=mysql_result($hacerconsulta,$contador,"estado");
                        $tipo=mysql_result($hacerconsulta,$contador,"tipo");
                        $universidad=mysql_result($hacerconsulta,$contador,"universidad");
			//echo($descripcion." "."<br>");
			
			$arreglo[$contador][0]=$id;
                        $arreglo[$contador][1]=$id_persona;
                        $arreglo[$contador][2]=$categoria;
                        $arreglo[$contador][3]=$numero;
                        $arreglo[$contador][4]=$circunscripcion;
                        $arreglo[$contador][5]=$titulo;
                        $arreglo[$contador][6]=$letra;
                        $arreglo[$contador][7]=$fecha_egreso;
                        $arreglo[$contador][8]=$fecha_matricula;
                        $arreglo[$contador][9]=$estado;
                        $arreglo[$contador][10]=$tipo;
                        $arreglo[$contador][11]=$universidad;
                        
                        
			
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
?>