<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestión de Envíos</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>📦 Gestión de Envíos</h1>

<a href="crear.php">+ Nuevo Envío</a>

<table>
    <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Destino</th>
        <th>Acciones</th>
    </tr>

<?php
$resultado = $conexion->query("SELECT * FROM envios");

while($fila = $resultado->fetch_assoc()){
?>
<tr>
    <td><?php echo $fila['codigo']; ?></td>
    <td><?php echo $fila['descripcion']; ?></td>
    <td><?php echo $fila['destino']; ?></td>
    <td>
        <a href="editar.php?codigo=<?php echo $fila['codigo']; ?>">Editar</a>
        <a href="eliminar.php?codigo=<?php echo $fila['codigo']; ?>" onclick="return confirm('¿Eliminar envío?')">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>