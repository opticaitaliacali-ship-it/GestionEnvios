<?php
include("config.php");

$codigo = $_GET['codigo'];

$conexion->query("DELETE FROM envios WHERE codigo='$codigo'");

header("Location:index.php");
?>