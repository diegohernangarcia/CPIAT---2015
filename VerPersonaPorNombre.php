<?php
    $QueBusco=$_POST["datoconsulta"];
    require ("BD/BDPersonas.php");
    require ("VistaConsultas.php");
    $consulta="Select * From personas WHERE ApyNombre Like '%".$QueBusco."%'";
    //echo $consulta;die;
    $arreglo=DevuelvoArrayConsulaPersonas($consulta);
    ConsultaPersonas($arreglo,"CPIAT -- Por Nombre y Apellido");
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

