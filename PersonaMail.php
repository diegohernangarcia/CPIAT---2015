<?php
    require ("BD/BDCiudades.php");
    require ("BD/BDPersonas.php");
    require ("VistaConsultas.php");
    $consulta="Select * From personas WHERE mail <> '0'";
    //echo $consulta;die;
    $arreglo=DevuelvoArrayConsulaPersonas($consulta);
    ConsultaPersonas($arreglo,"CPIAT -- Contienen Mail");
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

