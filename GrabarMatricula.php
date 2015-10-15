<?php
    $Matricula=$_POST["Matricula"];
    $Categoria=$_POST["Categoria"];
    $Circunscripcion=$_POST["Circunscripcion"];
    $Titulo=$_POST["Titulo"];
    $Universidad=$_POST["Universidad"];
    $Letra=$_POST["Letra"];
    $FechaEgreso=$_POST["FechaEgreso"];
    $FechaMatricula=$_POST["FechaMatricula"];
    $Estado=$_POST["Estado"];
    $Tipo=$_POST["Tipo"];
    $IdPersona=$_POST["IdPersona"];
    
    
    require ("BD/BDCategorias.php");
    require ("BD/BDCircunscripciones.php");
    require ("BD/BDTitulos.php");
    require ("BD/BDUniversidades.php");
    require ("BD/BDEstados.php");
    require ("BD/BDMatriculas.php");
    
    $CAT=  DevuelveIdCategoria($Categoria);
    $CIR= DevuelveIdCircunscripcion($Circunscripcion);
    $TIT=  DevuelveIdTitulo($Titulo);
    $UNI=  DevuelveIdUniversidad($Universidad);
    $EST= DevuelveIdEstado($Estado);
    
    
    $Grabar = array(
    0 => $IdPersona,
    1 => $CAT,
    2 => $Matricula,
    3 => $CIR,
    4 => $TIT,
    5 => $Letra,
    6 => $FechaEgreso,
    7 => $FechaMatricula,
    8 => $EST,
    9 => $Tipo,
    10 => $UNI);
   //var_dump($Grabar);
   //echo ("MATRICULA MAYOR ==== ". devuelveMax());
   AgregarMatricula($Grabar);


?>