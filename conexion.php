<?php
$conexion = new mysqli(
    "mysql-opticaitalia.alwaysdata.net",
    "opticaitalia",
    "Samueldavid23",
    "opticaitalia_gestion_envios"
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>