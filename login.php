<?php
session_start();
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$clave_hash = md5($clave);
require_once "BD/BDUsuario.php";
ValidarUsuario($usuario, $clave_hash, $result, $nombreusuario);
$_SESSION['usuario']=$_REQUEST['usuario'];
$rol=DevuelveNivelUsuario($usuario);
$_SESSION['rol']=$rol;
$_SESSION['usuario']=$nombreusuario;
if ($result == "false") {
    require("error_login.html");
} else {
    //require("menu.html");
    header('location:menu.php');
}
?>