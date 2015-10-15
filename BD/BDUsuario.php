<?php
Function ValidarUsuario($usuario,$clave,&$result,&$nombre){
	require("conexion.php");
	$result="false";
	$consulta="SELECT * FROM usuarios WHERE usuario ='".$usuario."'";
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
	$GETusuario=mysql_result($hacerconsulta,0,"usuario");
	$GETclave=mysql_result($hacerconsulta,0,"clave");
	$GETnombre=mysql_result($hacerconsulta,0,"nombre");
	if (($usuario==$GETusuario) && ($clave==$GETclave))  {
	 	$result="true";
	 	$nombre=$GETnombre;
		return $result;
		die;
	} else {
		$result="false";
		return $result;
		die;
	}
}
function DevuelveNivelUsuario($usuario){
    require("conexion.php");
	$result="false";
	$consulta="SELECT * FROM usuarios WHERE usuario ='".$usuario."'";
	//echo ($consulta);die();
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror= mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$result="0";
		return $result;
		die();
	}
	$result=mysql_result($hacerconsulta,0,"rol");
	return $result;
        
    
}
?>
