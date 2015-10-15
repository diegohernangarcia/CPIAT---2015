<?php
    require 'BD/BDUniversidades.php';
    $universidad=$_POST['universidad'];
    EstaUniversidad($universidad,$result);
    
    //echo "<br>".$result;
    //
    if ($result=='true') {
        require 'existeUniversidad.php';
    } else {
        AgregarUniversidad($universidad);
    }