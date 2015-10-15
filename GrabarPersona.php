<?php

//    require ("BD/BDDocumento.php");
//    echo (DevuelveIdTipoDoc("PASAPORTE"));
//require ("BD/BDCiudades.php");
//echo (DevuelveIdCiudad("Cordoba - Gral. Roca"));
//require ("BD/BDPaises.php");
//echo (DevuelveIdPais("Antigua y Barbuda"));
//require ("Funciones/Fechas.php");
// echo cambiaf_a_mysql("24/04/1974");
//require ("BD/BDDocumento.php");
//echo DevuelveEstaPersonaConDNI("6740723a");
require ("BD/BDDocumento.php");
require ("BD/BDCiudades.php");
require ("BD/BDPaises.php");
require ("BD/BDEstados.php");
require ("BD/BDPersonas.php");
$TipoDoc = $_POST["TipoDoc"];
$NroDocumento = $_POST["NroDocumento"];
$NombreAp = $_POST["Nombre"];
$CUIT = $_POST["CUIT"];
$Domicilio = $_POST["Domicilio"];
$Ciudad = $_POST["Ciudad"];
$Nacionalidad = $_POST["Nacionalidad"];
$FechaNacimiento = $_POST["FechaNacimiento"];
$Telefono = $_POST["Telefono"];
$Mail = $_POST["Mail"];
$Seguro = $_POST["Seguro"];
$NumeroCajaJubilatoria = $_POST["CajaJubilatoria"];
$EstadoCaja = $_POST["EstadoCaja"];
$Estado = $_POST["Estado"];
//echo $TipoDoc."<BR>";
//echo $NroDocumento."<BR>";
//echo $NombreAp."<BR>";
//echo $CUIT."<BR>";
//echo $Domicilio."<BR>";
//echo $Ciudad."<BR>";
//echo $Nacionalidad."<BR>";
//echo $FechaNacimiento."<BR>";
//echo $Telefono."<BR>";
//echo $Mail."<BR>";
//echo $Seguro."<BR>";
//echo $NumeroCajaJubilatoria."<BR>";
//echo $Estado."<BR>";
//echo DevuelveIdCiudad($Ciudad);
$duplicado = DevuelveEstaPersonaConDNI($NroDocumento);
if ($duplicado == 0) {
    require ("PersonaDuplicada.php");
    exit;
}
if ($Seguro=="NO") {
        $Seguro=0;}
    else
        $Seguro=1;
    

$IdTipoDoc = DevuelveIdTipoDoc($TipoDoc);
$IdCiudad = DevuelveIdCiudad($Ciudad);
$IdEstado = DevuelveIdEstado($Estado);
$IdNacionalidad = DevuelveIdPais($Nacionalidad);
$GrabarX = array(
    0 => $IdTipoDoc,
    1 => $NroDocumento,
    2 => $NombreAp,
    3 => $Domicilio,
    4 => $IdCiudad,
    5 => $IdNacionalidad,
    6 => $FechaNacimiento,
    7 => $Telefono,
    8 => $Mail,
    9 => $Seguro,
    10 => $NumeroCajaJubilatoria,
    11 => $EstadoCaja,
    12 => $IdEstado,
    13 => $CUIT);
////var_dump($GrabarX);
//echo "<br>";
AgregarPersona($GrabarX);
?>