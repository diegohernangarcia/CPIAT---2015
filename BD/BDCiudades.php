<?php
Function DevuelveIdProvincia($Provincia) {
		require("conexion.php");
		$consulta="SELECT * FROM provincias WHERE provincia='".$Provincia."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
		}
        

Function DevuelveIdCiudad($CiudadEntrada) {
//                if ($CiudadEntrada=="--") {
//                    return 0;
//                    exit;
//                }
                require("conexion.php");
                $pos=strpos($CiudadEntrada,"-");
                $Provincia=  substr($CiudadEntrada,0, $pos-1);
                $QueProvincia=  DevuelveIdProvincia($Provincia);
                $Ciudad= substr($CiudadEntrada, $pos+2,100);
                $consulta="SELECT * FROM localidades WHERE localidad='".$Ciudad."' and id_provincia='".$QueProvincia."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
                //echo $salida;
                
                
		Return $salida;
		}
        


?>

