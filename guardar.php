<?php

require_once "conexion.php";

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$proveedor = $_POST['proveedor'];
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO mercancia
(
    codigo,
    nombre,
    proveedor,
    fecha_llegada,
    cantidad,
    precio_unitario,
    observaciones
)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->bind_param(
    "ssssids",
    $codigo,
    $nombre,
    $proveedor,
    $fecha,
    $cantidad,
    $precio,
    $observaciones
);

if($stmt->execute()){

    echo "
    <script>
        alert('Mercancía registrada correctamente');
        window.location='registro.php';
    </script>
    ";

}else{

    echo "
    <script>
        alert('Error al registrar: ".$stmt->error."');
        window.history.back();
    </script>
    ";

}

$stmt->close();
$conexion->close();

?>