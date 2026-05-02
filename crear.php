<?php
include("config.php");

if($_POST){
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $destino = $_POST['destino'];

    $conexion->query("INSERT INTO envios VALUES('$codigo','$descripcion','$destino')");
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Nuevo Envío</title>
</head>
<body>

<form method="POST">
<h2>Nuevo Envío</h2>

<input type="text" name="codigo" placeholder="Código" required>
<input type="text" name="descripcion" placeholder="Descripción" required>
<input type="text" name="destino" placeholder="Destino" required>

<button type="submit">Guardar</button>
</form>

</body>
</html>