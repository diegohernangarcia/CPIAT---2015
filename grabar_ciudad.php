<?php
    require 'BD/BDLocalidades.php';
    $ciudad=$_POST['ciudad'];
    $provincia=$_POST['provincia'];
    $cp=$_POST['cp'];
    $cual_provincia=  DevuelvoIdProvinciaProvincia($provincia);
    //echo $ciudad."<br>".$provincia." ID ".$cual_provincia;
    EstaLocalidadProvincia($ciudad, $cual_provincia, $result);
    //echo "<br>".$result;
    //
    if ($result=='true') {
        require 'existeProvincia.php';
    } else {
        AgregarLocalidad($ciudad,$cual_provincia,$cp);
    }