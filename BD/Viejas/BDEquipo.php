<?php
	function AgregarEquipo($operador,$area,$usuario,$edificio,$ip,$sistemaoperativo,$cpu,$memoria,$hd,$monitor,$impresora,$oficina) {
			require("conexion.php");
			/*$consulta= "INSERT INTO equipo";
			$consulta.=" (operador,area,usuario,edificio,ip,sistemaoperativo,cpu,";
			$consulta.="memoria,hd,monitor,impresora,oficina) VALUES ";
			$consulta.="(`$operador`,`$area`,`$usuario`,`$ip`,`$sistemaoperativo`,`$cpu`,`$memoria`,`$hd`,";
			$consulta.="`$monitor`,`$impresora`,`$oficina`);"; */
			$consulta="INSERT INTO equipo (operador,area,usuario,edificio,ip,sistemaoperativo,cpu,memoria,hd,monitor,impresora,oficina) VALUES ('".$operador."','".$area."','".$usuario."','".$edificio."','".$ip."','".$sistemaoperativo."','".$cpu."','".$memoria."','".$hd."','".$monitor."','".$impresora."','".$oficina."')";

			//echo("<br>".$consulta);
			
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		//include("../mensajes/equipograbadook.php");
		 		include("grabado.php");
		 	}
	}


?>
