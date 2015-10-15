<?php


    require ("BD/BDMatriculas.php");
    //$Array=DevuelvoArrayConsulaPersonas("SELECT * FROM personas WHERE ApyNombre LIKE '%GARCIA DIEGO%'");
    $Array=  DevuelvoArrayConsulaMatriculas("SELECT * FROM matriculas WHERE id_persona LIKE '5694'");
    var_dump($Array);
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

