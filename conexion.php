<?php
include("configuracion.php");
$conexion = new mysqli($server,$user,$pass,$bd);
if(mysqli_connect_errno()) {
    echo "no conectado",mysql_connect_error();
    exit();
}
?>