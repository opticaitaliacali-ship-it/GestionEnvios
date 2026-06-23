<?php
require_once "conexion.php";

$buscar = $_GET['buscar'] ?? '';

$sql = "SELECT * FROM mercancia 
        WHERE codigo LIKE ? 
        OR nombre LIKE ? 
        OR proveedor LIKE ?";

$param = "%$buscar%";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $param, $param, $param);
$stmt->execute();

$resultado = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Resultados de búsqueda</title>

<style>

body{
    font-family: Arial;
    background: #0f172a;
    color: white;
    padding: 30px;
}

table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: white;
    color: black;
}

th, td{
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
}

th{
    background: #2563eb;
    color: white;
}

a{
    color: #60a5fa;
    text-decoration: none;
}

</style>

</head>

<body>

<h1>🔎 Resultados de búsqueda</h1>

<a href="consultar.php">⬅ Volver</a>

<table>
<tr>
    <th>Código</th>
    <th>Nombre</th>
    <th>Proveedor</th>
    <th>Fecha</th>
    <th>Cantidad</th>
    <th>Precio</th>
</tr>

<?php if($resultado->num_rows > 0){ ?>

    <?php while($row = $resultado->fetch_assoc()){ ?>

    <tr>
        <td><?= $row['codigo'] ?></td>
        <td><?= $row['nombre'] ?></td>
        <td><?= $row['proveedor'] ?></td>
        <td><?= $row['fecha_llegada'] ?></td>
        <td><?= $row['cantidad'] ?></td>
        <td><?= $row['precio_unitario'] ?></td>
    </tr>

    <?php } ?>

<?php } else { ?>

<tr>
    <td colspan="6">❌ No se encontraron resultados</td>
</tr>

<?php } ?>

</table>

</body>
</html>