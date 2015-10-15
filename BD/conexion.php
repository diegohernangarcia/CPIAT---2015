<?php 
	//echo("ENTREEE");	
	$servidormysql="localhost";
	$usuariomysql="root";
	$clavemysql="cpiat";
	$manejador=mysql_connect ($servidormysql,$usuariomysql,$clavemysql);
	$basededatos="CPIAT";
	mysql_select_db($basededatos,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror !=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);
		}
?>

