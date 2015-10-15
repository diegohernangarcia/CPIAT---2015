<?php
    $QueBusco=$_POST["datoconsulta"];
    require ("BD/BDMatriculas.php");
    require ("BD/BDPersonas.php");

    require ("VistaConsultas.php");
    $QueBusco=  devuelvoIdPersonaPorDNI($QueBusco);
    $consulta="Select * From matriculas WHERE id_persona=".$QueBusco."";
    //echo $consulta;die;
    $arreglo=  DevuelvoArrayConsulaMatriculas($consulta);
    ConsultaMatriculas($arreglo,"CPIAT");
    
?>