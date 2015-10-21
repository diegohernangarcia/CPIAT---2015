<?php
    require("BD/BDEstados.php");
    require ("BD/BDCircunscripciones.php");
    require ("VistaConsultas.php");
    require ("BD/BDMatriculas.php");
    $Circunscripcion=$_POST["Circunscripcion"];
    $Estado=$_POST["Estado"];
    $IdEstado= DevuelveIdEstado($Estado);
    $idCircunscripcion = DevuelveIdCircunscripcion($Circunscripcion);
    $consulta="SELECT * FROM matriculas WHERE circunscripcion=".$idCircunscripcion." and estado=".$IdEstado."";
    $arreglo=DevuelvoArrayConsulaMatriculas($consulta);
    ConsultaMatriculas($arreglo,"Por Circunscripcion y Estado");
    
    
?>