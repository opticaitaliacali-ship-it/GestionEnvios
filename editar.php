<?php
include("config.php");

$codigo = $_GET['codigo'];

if($_POST){
    $descripcion = $_POST['descripcion'];
    $destino = $_POST['destino'];

    $conexion->query("UPDATE envios 
                      SET descripcion='$descripcion',
                          destino='$destino'
                      WHERE codigo='$codigo'");

    header("Location:index.php");
}

$resultado = $conexion->query("SELECT * FROM envios WHERE codigo='$codigo'");
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Editar Envío</title>
</head>
<body>

<form method="POST">
<h2>Editar Envío</h2>

<input type="text" value="<?php echo $fila['codigo']; ?>" disabled>
<input type="text" name="descripcion" value="<?php echo $fila['descripcion']; ?>" required>
<input type="text" name="destino" value="<?php echo $fila['destino']; ?>" required>

<button type="submit">Actualizar</button>
</form>

</body>
</html>