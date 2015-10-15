<?php
/*Function logincorrecto($usuario,$clave,&$id){
	require("conexion.php");
	$consulta="SELECT * FROM usuario WHERE usuario ='".$usuario."'";
	//echo ($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$id=2;
		return $id;
		die();
	}
	$GETusuario=mysql_result($hacerconsulta,0,"usuario");
	$GETclave=mysql_result($hacerconsulta,0,"password");
	if (($usuario==$GETusuario) && ($clave==$GETclave))  {
	 	$id=0;
		return $id;
		die;
	} else {
		$id=1;
		return $id;
		die;
	} */

Function logeo($usuario,$clave,&$result,&$nomyap){
	require("conexion.php");
	$result="false";
	$consulta="SELECT * FROM usuario WHERE usuario ='".$usuario."'";
	//echo ($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$result="false";
		return $result;
		die();
	}
	$GETusuario=mysql_result($hacerconsulta,0,"usuario");
	$GETclave=mysql_result($hacerconsulta,0,"clave");
	$GETnomyap=mysql_result($hacerconsulta,0,"nombre");
	if (($usuario==$GETusuario) && ($clave==$GETclave))  {
	 	$result="true";
	 	$nomyap=$GETnomyap;
		return $result;
		die;
	} else {
		$result="false";
		return $result;
		die;
	}
}
?>
