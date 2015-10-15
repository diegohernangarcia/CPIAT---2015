<?php
    $Cat= $_POST["Categoria"];
    $num=$_POST["numero"];
    $Circ=$_POST["Circunscripcion"];
    require_once  ("BD/BDCategorias.php");
    require ("BD/BDCircunscripciones.php");
    require ("BD/BDPersonas.php");
    require ("BD/BDMatriculas.php");
   
    require ("VistaConsultas.php");
    $Cat=  DevuelveIdCategoria($Cat);
    $Circ=  DevuelveIdCircunscripcion($Circ);
    $consulta="Select * From matriculas Where categoria=".$Cat." and numero like '%".$num."%' and circunscripcion=".$Circ;
    //echo $consulta;die;
    $arreglo=  DevuelvoArrayConsulaMatriculas($consulta);
    ConsultaMatriculas($arreglo,"CPIAT");
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

