<?php

//require ("BD/BDPersonas.php");
require ("BD/BDMatriculas.php");
require ("VistaConsultas.php");
//$arreglo=DevuelvoArrayConsulaPersonas("Select * From personas where ApyNombre Like '%GARCIA%'");
//ConsultaPersonas($arreglo,"Consulta Prueba");
$arreglo=  DevuelvoArrayConsulaMatriculas("Select * From matriculas Where titulo='1'");
ConsultaMatriculas($arreglo, "Consulta Prueba Matriculas");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

