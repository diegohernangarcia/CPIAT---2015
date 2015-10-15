<?php
session_start();
//echo $_SESSION['usuario']." ".$_SESSION['rol'];
if ($_SESSION['rol']=="root") {
        include("menu_root.php");
        } else {
            include("menu_base.php");
        }
?>
