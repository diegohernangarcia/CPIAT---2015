<php
function DevuelvoIdPersona($DNI){
         require("conexion.php");
        $consulta = "SELECT * FROM personas WHERE documento='" . $DNI . "'";
        $hacerconsulta = mysql_query($consulta, $manejador);
        $numeroerror = mysql_errno();
        $descripcionerror = mysql_error();
        if ($numeroerror != 0) {
            echo ("<br>" . $$numeroerror . "<br>" . $descripcionerror);
        }
        $idPersona = mysql_result($hacerconsulta, 0, "id");
        return $idPersona;
    }
require ("conexion.php");
$consulta="UPDATE circunscripcion" ;
    
?>