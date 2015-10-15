<?php
    $QueBusco=$_POST["datoconsulta"];
    require ("BD/BDCiudades.php");
    
    require ("BD/BDPersonas.php");
    require ("VistaConsultas.php");
    $QueBusco=DevuelveIdCiudad($QueBusco);
    $consulta="Select * From personas WHERE ciudad =".$QueBusco." AND  mail <> '0'";
    //echo $consulta;die;
    $arreglo=DevuelvoArrayConsulaPersonas($consulta);
    ConsultaPersonas($arreglo,"CPIAT -- Por Localidad");
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

