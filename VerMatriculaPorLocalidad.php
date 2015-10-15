<?php
    $QueBusco=$_POST["datoconsulta"];
    require ("BD/BDCiudades.php");
    
    require ("BD/BDPersonas.php");
    require ("VistaConsultas.php");
    $QueBusco=DevuelveIdCiudad($QueBusco);
    $consulta="Select * From matriculas, personas.Ciudad where personas.Ciudad='1'";
    
    //SELECT * FROM ventas LEFT JOIN clientes ON ventas.cliente_id = clientes.id;
    //echo $consulta;die;
    
    echo ("EN PROCESO DE OPTIMIZACION, PROXIMAMENTE"); die;
    $arreglo=DevuelvoArrayConsulaPersonas($consulta);
    ConsultaPersonas($arreglo,"CPIAT -- Por Localidad");
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

