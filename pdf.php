<?php
require_once('class.ezpdf.php');
 
 $bd_host = "localhost:3306"; 
	$bd_usuario = "root"; 
	$bd_password = "cpiat"; 
	$bd_base = "CPIAT"; 
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password) or die("Error con la conexión"); 
	mysql_select_db($bd_base, $con) or die("Error al seleccionar db");
	
	$resSql=mysql_query($sql) or die("<br>Error consulta</br>".mysql_error());
	
$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
	
	while($row=mysql_fetch_row($resSql)){
		$data[]=array('Id'=>$row[0], 'Nombre y Apellido'=>$row[1],'abiertos'=>$row[2],'cerrados'=>$row[3]);
	}
	$titles=array('Depto'=>'Depto', 'num_tickets'=>'Tickets','abiertos'=>'abiertos','cerrados'=>'cerrados');
	
 
$pdf->ezTable($data);
$pdf->ezStream();
?>